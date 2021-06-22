<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use App\Mail\passwordmail;

use App\Models\Doctor;
use App\Models\pharmacist;
use App\Models\receptionist;
use App\Models\all_users;
use App\Models\Period;
class admin extends Controller
{
    //registration

    public function regi_page(){
        $no_doc=count(DB::table('doctors')->get())+1;
        $no_pha=count(DB::table('pharmacists')->get())+1;
        $no_rec=count(DB::table('receptionists')->get())+1;

        return view('blade-scafolding.admin.regi_by_admin',compact('no_doc','no_pha','no_rec'))->with('msg',"");
    }
    
    public function register(Request $request){
        $no_doc=count(DB::table('doctors')->get())+1;
        $no_pha=count(DB::table('pharmacists')->get())+1;
        $no_rec=count(DB::table('receptionists')->get())+1;

        $request->validate([
            'roll' => 'required',
            'name' => 'required',
            'phone_no' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        ///////////////////// send mail //////////////////////
        $details = [
            'user_id' => $request->userid,
            'password' => $request->password
        ];
        $toEmail = $request->email;
        Mail::to($toEmail)->send(new PasswordMail($details));

        if($request->roll=="doc"){

            $request->validate(['specalization' => 'required']);
            $user = new Doctor;

            $user->Doctor_ID = $request->userid;
            $user->Doctor_Name = $request->name;
            $user->Specialization = $request->specalization;
            $user->Doc_email = $request->email;
            $user->Phone_no = $request->phone_no;
            $user->save();

            $user = new all_users;
            $user->id = $request->userid;
            $user->password = Hash::make($request->password);
            $user->roll = "doctor" ;
            $user->save(); 
            
            $no_doc=count(DB::table('doctors')->get())+1; 
            return view('blade-scafolding.admin.regi_by_admin',compact('no_doc','no_pha','no_rec'))->with('msg',"Registration was successful and the password was emailed");
        }
        elseif ($request->roll=="pham") {
            $user = new pharmacist;

            $user->Pharmacist_ID = $request->userid;
            $user->Pharmacist_Name = $request->name;
            $user->Pharmacist_email = $request->email;
            $user->Phone_no = $request->phone_no;
            $user->save();

            $user = new all_users;
            $user->id = $request->userid;
            $user->password = Hash::make($request->password);
            $user->roll = "pharmacist" ;
            $user->save(); 

            $no_pha=count(DB::table('pharmacists')->get())+1;
            return view('blade-scafolding.admin.regi_by_admin',compact('no_doc','no_pha','no_rec'))->with('msg',"Registration was successful and the password was emailed");
        }
        elseif ($request->roll=="rece") {
            $user = new receptionist;

            $user->Receptionist_ID = $request->userid;
            $user->Receptionist_Name = $request->name;
            $user->Receptionist_email = $request->email;
            $user->Phone_no = $request->phone_no;
            $user->save();

            $user = new all_users;
            $user->id = $request->userid;
            $user->password = Hash::make($request->password);
            $user->roll = "receptionist" ;
            $user->save();  

            $no_rec=count(DB::table('receptionists')->get())+1;
            return view('blade-scafolding.admin.regi_by_admin',compact('no_doc','no_pha','no_rec'))->with('msg',"Registration was successful and the password was emailed");
        }
        
    }
  //addtimetable
    public function addtt(Request $request){

      
        $pr=new Period;
       
       
        $pr->Time_Period=$request->timeperiod;
        $pr->Doctor_ID=$request->D_id;
        $pr->Specialization=$request->spe;
        $pr->Doctor_Name=$request->name;
        $pr->Date=$request->date;
        $pr->day=$request->day;
        $pr->No_of_Patients="0";
        $pr->save();
       // $s="Prescription added successfully";
      
    
        
     return redirect()->back()->with('msg',"Doctor Added Successfully!");
  
        
        
        
    }

}
