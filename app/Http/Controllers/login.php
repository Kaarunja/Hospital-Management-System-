<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use App\Mail\resetmail;



class login extends Controller
{
    public function log(Request $request){

        $password=DB::table('all_users')->where('id',$request->id)->value('password');
        $roll=DB::table('all_users')->where('id',$request->id)->value('roll');
        
        if(Hash::check($request->password,$password)){
            if($roll=="patient"){
               
                return redirect()->route('patpage',['c'=>$request->id]);
            }
            elseif($roll=="doctor"){
                return redirect()->route('docpage',['c'=>$request->id]);
               
            }
            /*
            elseif($roll=="pharmacist"){
                $details=DB::table('pharmacists')->where('Pharmacist_ID',$request->id)->first();
               return view('blade-scafolding.pharmasist')->with('det',$details)->with('messege',"");
               // return redirect()->route('pharmPage');
          
            }
            */
            elseif($roll=="pharmacist"){
                return redirect()->route('pharmPage');
            
           }
            elseif($roll=="receptionist"){
                 return redirect()->route('recPage');
             
            }
            elseif($roll=="admin"){
                return redirect()->route('admin');
            
           }
            
           
     
    }
    else{
        return view('blade-scafolding.login')->with('messege','Wrong password or username');
    }
}
 //forget password
 public function forgotpass(Request $request)
 {
     $roll=DB::table('all_users')->where('id',$request->id)->value('roll');
     if($roll=="patient"){
         $email=DB::table('patients')->where('Pat_id',$request->id)->value('Pat_Email');
         if($email==$request->email){
             $password=rand(100000,1000000);
             DB::table('patients')->where('Pat_id',$request->id)->update([
                 'Pat_password' =>$password,
             ]);
             DB::table('all_users')->where('id',$request->id)->update([
                 'password' =>$password,
             ]);
             $s="Password reset successful";
         }
         else{
             $s="Email is wrong";
         }
     }
     elseif($roll=="doctor"){
        $email=DB::table('doctors')->where('Doctor_ID',$request->id)->value('Doc_email');
        if($email==$request->email){
            $password=rand(100000,1000000);
            DB::table('doctors')->where('Doctor_ID',$request->id)->update([
                'password' =>Hash::make($password),
            ]);
            DB::table('all_users')->where('id',$request->id)->update([
                'password' =>Hash::make($password),
            ]);
            $s="Password reset successful";
        }
        else{
            $s="Email is wrong";
        }
        

    }
    elseif($roll=="pharmacist"){
        $email=DB::table('pharmacists')->where('phm_id',$request->id)->value('Phm_email');
        if($email==$request->email){
            $password=rand(100000,1000000);
            DB::table('pharmacists')->where('phm_id',$request->id)->update([
                'password' =>Hash::make($password),
            ]);
            DB::table('all_users')->where('id',$request->id)->update([
                'password' =>Hash::make($password),
            ]);
            $s="Password reset successful";
        }
        else{
            $s="Email is wrong";
        }
        

    }elseif($roll=="Receptionist"){
        $email=DB::table('receptionists')->where('rec_id',$request->id)->value('rec_email');
        if($email==$request->email){
            $password=rand(100000,1000000);
            DB::table('receptionists')->where('rec_id',$request->id)->update([
                'password' =>Hash::make($password),
            ]);
            DB::table('all_users')->where('id',$request->id)->update([
                'password' =>Hash::make($password),
            ]);
            $s="Password reset successful";
        }
        else{
            $s="Email is wrong";
        }
        
        
    }
    elseif($roll=="admin"){
        $email=DB::table('admins')->where('adm_id',$request->id)->value('adm_email');
        if($email==$request->email){
            $password=rand(100000,1000000);
            DB::table('admins')->where('adm_id',$request->id)->update([
                'password' =>Hash::make($password),
            ]);
            DB::table('all_users')->where('id',$request->id)->update([
                'password' =>Hash::make($password),
            ]);
            $s="Password reset successful";
        }
        else{
            $s="Email is wrong";
        }
        

    }

    else{
        $s="User ID is wrong";
    }
    if($s=="Password reset successful"){
        $details=['title'=>'Your password has reset.',
               'body'=>'Your new password : '.$password];
        Mail::to($email)->send(new resetmail($details));
        return redirect()->route('login')->with('msg',$s);
    }
    else{
        return redirect()->back()->with('msg',$s);
    }
}

}