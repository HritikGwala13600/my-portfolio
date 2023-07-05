<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendmail;

class PortfolioController extends Controller
{
    public function index(Request $request){
        return view('index');
    }
    public function projectDetails(Request $request){
        return view('project-details');
    }
    public function sendEmail(Request $request){
        $checkMail = Mail::to($request->email)->send(new sendmail($request->subject,$request->message));
        if($checkMail){
            return back()->with('success','Send Successfully');
        }
        return back()->with('error','Something Went Wrong');
    }
}

/*
 * 
 *  "_token" => "GHEOZxbkRGAhxVs1IhmSp4nAOD0lpJlFMQyP7IDr"
  "name" => "Ritik Gwala"
  "email" => "ritik6397@gmail.com"
  "subject" => "test"
  "message" => "sdlfkjdsflkdsjfsdfldskfdsf"
]
 */