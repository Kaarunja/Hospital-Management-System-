<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use App\Models\all_users;
use App\Models\Appointment;
use App\Models\chat;


class Pat extends Controller
  {
    public function register(Request $request){

        //dd($request->all);
        $p=DB::table('patients')->get();
        $np=count($p)+1;
        $patient=new Patient;
        $user=new all_users;
        if($request->psw==$request->rpsw){
            $patient->Pat_id="Pat".$np;
            $patient->Pat_name=$request->name;
            $patient->Pat_MobileNo=$request->phone;
            $patient->Pat_Email=$request->email;
            $patient->Pat_password=Hash::make($request->psw);
            $patient->Pat_address=$request->address;
            $patient->Pat_DateOfBirth=$request->birthday;
            $patient->Pat_Gender=$request->gender;
            $patient->Pat_Nic=$request->nic;
            $patient->save();

            $user->id="Pat".$np;
            $user->password=Hash::make($request->psw);
            $user->roll="patient";
            $user->save();
            $s="Registered successfully.";
        }
        else{
            $s="Password retype is wrong.";
            return view('blade-scafolding.register')->with('msg',"Those passwords didn't match. Try again.")->with('id',"");

        }

        return redirect()->back()->with('msg',"Registered successfully.");

    }
    public function docsearch(Request $request){

        if($request->specialization!=""&&$request->date!=""){
            $p=DB::table('periods')->where('Specialization',$request->specialization)->whereDate('Date',$request->date)->get();
        }
        elseif($request->specialization==""&&$request->date!=""){
            $p=DB::table('periods')->whereDate('Date',$request->date)->get();
        }
        elseif($request->specialization!=""&&$request->date==""){
            $p=DB::table('periods')->where('Specialization',$request->specialization)->get();
        }
        else{
            $p=DB::table('periods')->get();
        }


            return redirect()->back()->with('p',$p);

    }

    public function book($id,$patid){

        //dd($request->all);

        $app=new Appointment;

        $p=DB::table('periods')->where('Period_ID',$id)->first();

            $app->Period_ID=$id;
            $app->Pat_id=$patid;
            $app->Doctor_id=$p->Doctor_ID;
            $app->Date=$p->Date;
            $app->Time=$p->Time_Period;
            $nic=DB::table('patients')->where('Pat_id',$patid)->value('Pat_Nic');
            $app->NIC_No=$nic;
            $app->Doctor_Name=$p->Doctor_Name;
            $app->Specialization=$p->Specialization;

            $app->save();

            $d=DB::table('appointments')->where('Period_ID',$id)->where('Pat_id',$patid)->where('Date',$p->Date)->first();




            return view('blade-scafolding.channelDet')->with('d',$d)->with('id',$patid);



    }

    /*home registration*/

    public function hmreg(Request $request){

        //dd($request->all);
        $p=DB::table('patients')->get();
        $np=count($p)+1;
        $patient=new Patient;
        $user=new all_users;
        if($request->psw==$request->rpsw){
            $patient->Pat_id="Pat".$np;
            $patient->Pat_name=$request->name;
            $patient->Pat_MobileNo=$request->phone;
            $patient->Pat_Email=$request->email;
            $patient->Pat_password=Hash::make($request->psw);
            $patient->Pat_address=$request->address;
            $patient->Pat_DateOfBirth=$request->birthday;
            $patient->Pat_Gender=$request->gender;
            $patient->Pat_Nic=$request->nic;
            $patient->save();

            $user->id="Pat".$np;
            $user->password=Hash::make($request->psw);
            $user->roll="patient";
            $user->save();
            $s="Registered successfully.";

            $app=new Appointment;

            $p=DB::table('periods')->where('Period_ID',$request->bid)->first();

                $app->Period_ID=$request->bid;
                $app->Pat_id="Pat".$np;
                $app->Date=$p->Date;
                $app->Time=$p->Time_Period;

                $app->NIC_No=$request->nic;
                $app->Doctor_Name=$p->Doctor_Name;
                $app->Specialization=$p->Specialization;

                $app->save();

                $d=DB::table('appointments')->where('Period_ID',$request->bid)->where('Pat_id',"Pat".$np)->where('Date',$p->Date)->first();






        }

        else{
            $s="Password retype is wrong.";
            return redirect()->back()->with('msg',$s)->with('bid',$request->bid);

        }

        return view('blade-scafolding.hmchannel')->with('d',$d)->with('msg',$s);

    }

    /*Book delete */
    public function bookdlt($id){


     DB::table('appointments')->where('Appointment_No',$id)->delete();






            return redirect()->back()->with('msg',"Appointment deleted successfully!");


    }
                     /*image upload*/
                     public function patimg(Request $request){
                        $request->validate([
                       'image'=>'required|image'
                   ],[
                       'image.required' => 'You have not choose any file',
                       'image.image'=>'Only Image is allowed'
                   ]);

                       $name = $request->id.'.'.$request->image->extension();
                       $request->image->move(public_path().'/upload/profile', $name);

                       DB::table('patients')->where('Pat_id',$request->id)->update([
                           'patim' => $name
                       ]);
                       $s="Profile picture changed";
                     return redirect()->back()->with('msg',$s);

       }



       public function reply(Request $request){

        DB::table('chats')->where('id',$request->id)->update([
            'reply' => $request->reply
        ]);




        return redirect()->back()->with('msg',"Reply Send");



    }

    public function send(Request $request){

        $msg=new chat;



            $msg->patid=$request->patid;
            $msg->msg=$request->msg;
            $msg->from="pat";

            $msg->save();





        return redirect()->back()->with('msg',"Message Sent");



    }

}
