<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailSend(){

        return view('mail.mailsend');

     }

     public function sendmail(Request $request){

        $request->validate([
                  'subject'=> 'required',
                  'message'=>'required',
                  'email'=>'required',
                 ]);
        //dd($request);
        $data = array(
          'subject' => $request->subject,
          'message'=> $request->message ,
           );
          Mail::to($request->email)->send(new Email($data));
          return back()->with('success', 'Sent Successfully !');

      }
}
