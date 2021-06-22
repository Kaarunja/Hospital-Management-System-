<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\repchat;
use Illuminate\Support\Facades\DB; 

class ChatController extends Controller
{




          /*CHAT*/
public function repchat(){

    $p=DB::table('patients')->get();
    $in=DB::table('chats')->where('from','pat')->get();
    $send=DB::table('chats')->where('from',"rec")->get();
 return view('blade-scafolding.receptionist.recchat')->with('p',$p)->with('in',$in)->with('send',$send);

}
public function recreply(Request $request){

    DB::table('chats')->where('id',$request->id)->update([
        'reply' => $request->reply
    ]);

     

     
    return redirect()->back()->with('msg',"Reply Send");

  
    
}

public function recsend(Request $request){

    $msg=new chat;
 

       
        $msg->patid=$request->patid;
        $msg->msg=$request->msg;
        $msg->from="rec";
     
        $msg->save();


     

     
    return redirect()->back()->with('msg',"Message Sent");

  
    
}

}  
