<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Carrer_Level;
use App\CarrerLevelModel;
use App\SelectServices;
use App\Country;
use App\DayModel;
use App\Deadline;
use App\Events\OrderCreated;
use App\Fare;
use App\FareModel;
use App\File;
use App\Filecv;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use App\Order;
use App\Ordercv;
use App\PaperType;
use App\ReferenceStyle;
use App\Subject;
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    public function create()
    {
        // $web_setting = WebSetting::first();

        $carrer_levels=CarrerLevelModel::all();
        $select_services=SelectServices::all();
        $days=DayModel::orderBy('name','DESC')->get();
        return view('pages.ordercv',compact('carrer_levels','select_services','days')); 
    }

    public function success()
    {
        return view('pages.order-success');
    }

    public function store(StoreOrderRequest $request)
    {
        if ($request->hasfile('emailAttachments')) {
            $fileSize = 0;
            $fileQty = 0;
            foreach ($request->file('emailAttachments') as $file) {
                $fileSize += $file->getSize();
                $fileQty = $fileQty + 1;
            }

            if ($fileQty > 10) {
                $request->session()->flash('message', 'file quantity exceeded the limit.');
                // return redirect()->route('order.now');
                return redirect()->back();
            }

            if ($fileSize >  25000000) {
                $request->session()->flash('message', 'file size exceeded the limit.');
                // return redirect()->route('order.now');
                return redirect()->back();
            }
        }
        $files = [];

          $fare = FareModel::where(['carrer_level_id' => $request->carrer_level, 'select_service_id' => $request->select_service ,'day_model_id'=>$request->deadline_id] )->firstOrFail();
          
           $request->merge([
               "total_price" => $fare->fare,
               'carrer_level' => $fare->carrer_level,
               'deadline' => $fare->deadline_id,
               
           ]);

           
        DB::beginTransaction();
            $order = Order::create($request->all());

            if ($request->hasfile('emailAttachments')) {
                foreach($request->file('emailAttachments') as $file)
                {
                    $fileName = uniqid().'_'.time().'_'.$file->getClientOriginalName();
                    $filePath = $file->storeAs( 'uploads' , $fileName, 'public');
 
                    array_push( $files, $filePath);

                    File::create([
                    "order_id" => $order->id,
                        "file_path" => $filePath
                    ]);
                }
            }
            // Send mail to user
             Mail::to($request->email)->send(new OrderMail($order, $files));

            // Send mail to admin
            Mail::to(env('MAIL_FROM_ADDRESS','info@cheapcvwriting.co.uk') )->send(new OrderAdminMail($order, $files));
        DB::commit();

     
        return response()->json(['success'=>"Thank you for showing your intrest, We've receive your query successfully."]);
    }
}
