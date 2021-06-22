<?php

namespace App\Http\Controllers;
use App\Models\Period;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    

    public function display()
    {
       $timetables = Period::all();
      

       return view('timetables.timeTable',compact('timetables'));
    }

/*
    public function searchingtab(Request $request)
    {
        $search = $request->get('searching');
        $timetables = Period::where('Doctor_Name','like','%'.$search.'%');
        return view('timetables.timeTable',compact('timetables'));
    }
*/
    public function searchtab(Request $request)
    {
        $search = $request->get('search');
        $timetables = Period::where('Day','like','%'.$search.'%')
                              ->orwhere('Specialization','like','%'.$search.'%')
                              ->orwhere('Doctor_Name','like','%'.$search.'%')
                              ->orwhere('Doctor_ID','like','%'.$search.'%')
                              ->paginate(30);
        return view('timetables.timeTable',compact('timetables'));
    }

  

}
