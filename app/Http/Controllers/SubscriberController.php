<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SubscriberController extends Controller
{
    public function storesubscriber(Request $request)
    {


        $validatedData = $request->validate([
            'email' => 'required|unique:subscriber|max:55',
        ]);

        $data = array();
        $data['email'] = $request->email;
        DB::table('subscriber')->insert($data);

        $notification = array(
            'messege' => 'Thanks for subscribing!',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
