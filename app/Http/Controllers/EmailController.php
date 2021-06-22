<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    function index()
    {
        return view('form');
    }

   public function send(Request $req)
    {

        $name=$req->file->getClientOriginalName();

        $file_name=pathinfo($name, PATHINFO_FILENAME).'.'.$req->file->extension();

        $files=$req->file->move(public_path().'/upload',$name);
        $data=['subj'=>$req->subj,'msg'=>$req->message,'emails'=>$req->email];

        Mail::send('emails',$data,function($message)use($data,$files){
            $message->from('mithushathillaivasan@gmail.com','Life Care Hospital')->to($data['emails'],$data['subj'])
                    ->subject("Medicine Query");
                    $message->attach($files);
        });
      //  return "Message sent";
      return redirect()->back()->with('success','Message sent');

    }
}
