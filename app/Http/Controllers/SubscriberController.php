<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriberController extends Controller
{
    public function storesubscriber(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriber|max:55',
        ]);

        DB::table('subscriber')->insert([
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $notification = [
            'messege' => 'Thanks for subscribing!',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
