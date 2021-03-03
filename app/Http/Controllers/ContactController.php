<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }

    public function contactSubmit(Request $request)
    {
//        Mail::send('emails.contactmail', [
//            'name'  => $request->name,
//            'email' => $request->email,
//            'phone' =>$request->phone,
//            'msg'   =>$request->msg
//        ],function($mail) use($request){
//            $mail->from(env('MAIL_FROM_ADDRESS'), $request->name);
//            $mail->to("rmachhim@gmail.com")->subject('Contact Us Message');
    
//        });
//        return "Message  has been sent successfull !!";
//     }
// }

$to_names="rmachhim@gmail.com";
$to_emails="rmachhim@gmail.com";
$data=array("body"=>$request->msg);
//$message ="mfmf";
$sender_mail= $request->email;

$sender_name =$request->name;

Mail::send('emails.contactmail', $data, function($message) use 
($to_names, $to_emails,$sender_mail,$sender_name) 
            {$message->to($to_emails, $to_names)
            ->subject("contact");$message->from($sender_mail, $sender_name);
        });

        return redirect('/submitsucess')->with('success', 'Thank you for contact us');
    }
   
}
