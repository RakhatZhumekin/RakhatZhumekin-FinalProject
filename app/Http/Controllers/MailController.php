<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function index($lang) {
        App::setlocale($lang);
        return view('send_email');
    }

    public function send(Request $request) {
        $data = new \stdClass();
        $data->sender = $request->sender;
        $data->message = $request->message;
       
        Mail::to('190103441@stu.sdu.edu.kz')->send(new SendMail($data));
        return back();   
    }
}
