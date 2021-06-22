<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Medicine_stock;
use App\Models\Bill;

class FrontendController extends Controller
{
     /*public function ajax(Request $request){
    	return response()->json(['success'=>'This was saved',]);
    }
*/

    public function loginpage(){
    	return view('blade-scafolding.login')->with('messege');
    }
    public function Registrationpage(){
        $p=DB::table('patients')->get();
        $np1=count($p)+1;
        $id="Pat".$np1;
    	return view('blade-scafolding.register')->with('id',$id)->with('msg',"");
    }
    public function channelDetails(){
    	return view('blade-scafolding.channelDet');
    }
    public function afterLoginPatientPage($id){
      
        $details=DB::table('patients')->where('Pat_id',$id)->first();
        $c=DB::table('periods')->get();
        $co=DB::table('appointments')->get();
        return view('blade-scafolding.patientpage')->with('det',$details)->with('messege',"")->with('c',$c)->with('co',$co);
    	
    }
    public function patientRecordPage($id){
        $details=DB::table('patients')->where('Pat_id',$id)->first();
        $rec=DB::table('prescriptions')->where('Pat_id',$id)->get();
        return view('blade-scafolding.patientRecord')->with('det',$details)->with('rec',$rec);
    }
    

    /*  Doctor Page*/
    public function afterLoginDoctoPage($id){
        $details=DB::table('doctors')->where('Doctor_ID',$id)->first();
        $period=DB::table('periods')->where('Doctor_ID',$id)->get();
        $app=DB::table('appointments')->where('Doctor_ID',$id)->where('Date',date("Y-m-d"))->get();
    
        return view('blade-scafolding/doctorPage')->with('det',$details)->with('messege',"")->with('periods', $period)->with('app',$app);
     
    }
    public function addPrescriptionPage($t){
        $c=DB::table('doctors')->where('Doctor_ID',$t)->first();
        $p=DB::table('prescriptions')->get();
        return view('blade-scafolding.addPrescription')->with('c',$c)->with('msg',"")->with('pres',$p);
    }
    /* End Doctor Page*/
    

    /*  receptionist Page*/
    public function receptPage(){
     

        $receptionists=DB::table('receptionists')->get();
        $p=DB::table('doctors')->get();
        return view('blade-scafolding.receptionist.receptionistPage')->with('receptionists', $receptionists)->with('msg',"")->with('doctors', $p);

    }
    /*End receptionist Page*/
     

    /*  Pharmacy Page*/
    public function pharmasistPage(){
        $medicine_stocks=Medicine_stock::all();
        $bills=Bill::all();
        $lastID=Bill::max('bill_id');
        $bill_receipt=Bill::where('bill_id',$lastID)->get();
        return view('blade-scafolding.pharmasist',
        ['medicine_stocks'=>$medicine_stocks,
        'bills'=>$bills,
        'bill_receipt'=>$bill_receipt]);
    }
    /* End Pharmacy Page*/

    /*home booking*/
    public function booking($bid){
        $p=DB::table('patients')->get();
        $np1=count($p)+1;
        $id="Pat".$np1;
       return view('blade-scafolding/registreAfterBook')->with('bid',$bid)->with('msg',"")->with('id',$id);
     
    }
   /*CHAT*/
public function patchat($id){

    //dd($request->all);
 
    $p=DB::table('patients')->where('Pat_id',$id)->first();
        $in=DB::table('chats')->where('patid',$id)->where('from','rec')->get();
        $send=DB::table('chats')->where('patid',$id)->where('from','pat')->get();
   

        
      
    

     
        return view('blade-scafolding.patchat')->with('p',$p)->with('in',$in)->with('send',$send);

  
    
}
    /*  admin Page*/
    public function timetable(){
        $c=DB::table('periods')->get();
        return view('blade-scafolding.admin.timetable_admin')->with('periods',$c);
    }
    /* End admin Page*/
    public function updatedate(){
        $mon = Carbon::now()->addDays(1)->toDateString();
        $tue = Carbon::now()->addDays(2)->toDateString();
        $wed = Carbon::now()->addDays(3)->toDateString();
        $thu = Carbon::now()->addDays(4)->toDateString();
        $fri = Carbon::now()->addDays(5)->toDateString();
        $sat = Carbon::now()->addDays(6)->toDateString();
        $sun = Carbon::now()->addDays(7)->toDateString();
        DB::table('periods')->where('day','Monday')->update([
            'Date' => $mon
        ]);
        DB::table('periods')->where('day','Tuesday')->update([
            'Date' => $tue
        ]);
        DB::table('periods')->where('day','Wednesday')->update([
            'Date' => $wed
        ]);
        DB::table('periods')->where('day','Thursday')->update([
            'Date' => $thu
        ]);
        DB::table('periods')->where('day','Friday')->update([
            'Date' => $fri
        ]);
        DB::table('periods')->where('day','Saturday')->update([
            'Date' => $sat
        ]);
        DB::table('periods')->where('day','Sunday')->update([
            'Date' => $sun
        ]);
        return redirect()->back();
    }

    public function admin(){
        $u=DB::table('all_users')->get();
        $d=DB::table('doctors')->get();
        $p=DB::table('patients')->get();
      
            return view('blade-scafolding.admin.admin_profile')->with('u',$u)->with('d',$d)->with('p',$p);
    }




}
