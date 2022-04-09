<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Fare;
use App\FareModel;
use App\CarrerLevelModel;
use App\SelectServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\GetFareRequest;
use App\Http\Requests\StoreOrderQueryRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Mail\OrderQueryAdminMail;
use App\Mail\OrderQueryMail;
use App\OrderAdmin;
use App\OrderQuery;
use App\DayModel;
use App\Deadline;
use App\PaperType;
use App\ResumeWriting;
use App\Service;
use App\WebSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index()

    {
        // $web_setting = WebSetting::first();
        $carrer_levels=CarrerLevelModel::all();
        $select_services=SelectServices::all();
        $days=DayModel::orderBy('name','DESC')->get();
         return view('pages.homecv',compact('carrer_levels','select_services','days'));       
    }

    
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

     public function reviews()
    {
        return view('pages.reviewscv');
    }

    public function getFare(Request $request)
    {   
        return FareModel::where(['carrer_level_id' => $request->carrer_level_id, 'day_model_id' => $request->day_model_id,'select_service_id' => $request->select_service_id])->firstOrFail();
    }

    public function orderQuery(Request $request)
    {

        // DB::beginTransaction();
            $query = OrderQuery::create($request->all());
            // Send mail to user
            // Mail::to($query->email)->send(new OrderQueryMail($query));
            // Send mail to admin
            //Mail::to(env('MAIL_FROM_ADDRESS', 'info@contentwritingservice.ae'))->send(new OrderQueryAdminMail($query));
        // DB::commit();    
            return redirect()->back()->withSuccess('We receive your query successfully.');
    }


    public function sitemap()
    {
        $services = Service::orderBy('name', 'ASC')->get();

        return view('pages.sitemap', compact('services'));
    }

  

    
}
