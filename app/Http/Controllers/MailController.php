<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function index() {
        return view('send_email');
    }

    public function send(Request $request) {
    //     $this->validate($request, [
    //      'sender'     =>  'required',
    //      'email'  =>  'required|email',
    //      'message' =>  'required'
    //     ]);
       
    //    $data = array(
    //        'sender'      =>  $request->sender,
    //        'message'   =>   $request->message
    //    );

        $data = new \stdClass();
        $data->sender = $request->sender;
        $data->message = $request->message;
       
        Mail::to('190103441@stu.sdu.edu.kz')->send(new SendMail($data));
        return back();   
    }
}
