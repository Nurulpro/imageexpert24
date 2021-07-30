<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{

    public function storecontactus(Request $Request)
    {
        $Request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required',
        ]);


        $data = array();

        $data['name'] = $Request->name;
        $data['email'] = $Request->email;
        $data['phone'] = $Request->phone;
        $data['subject'] = $Request->subject;
        $data['message'] = $Request->message;

        DB::table('contactus')->insert($data);

        $notification = array(
            'messege' => 'Thanks for contact us!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

        \Mail::send('contactMail', array(
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subject' => $data['subject'],
            'message' => $data['message'],
        ), function ($message) use ($Request) {
            
            $message->from($Request->email);
            $message->to('nurulpro24@gmail.com')->subject($Request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}


