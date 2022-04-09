<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Deadline;
use App\Http\Controllers\Controller;
use App\PaperType;
use App\Service;
use App\CarrerLevelModel;
use App\SelectServices;
use App\DayModel;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    public function create()
    {
         $services = Service::orderBy('name', 'ASC')->get();
        // dd($services);
        
        return view('pages.services.index',compact('services'));
    }

    public function show($slug)
    {
        $service = Service::where(['slug' => $slug])->firstOrFail();
        $carrer_levels=CarrerLevelModel::all();
        $select_services=SelectServices::all();
        $days=DayModel::orderBy('name','DESC')->get();
        return view('pages.services.show',compact('service','carrer_levels','select_services','days')); 
        
    }

    public function writingindex(){
        $PaperTypes=PaperType::all();
        $AcademicLevels=AcademicLevel::all();
        $Deadlines=Deadline::all();
        return view('pages.writing',compact('PaperTypes','AcademicLevels','Deadlines'));    
   }

   public function createpagetwo(){
       return view('pages.servicescv');
   }
}
