<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Inertia\Inertia;
use Inertia\Response;

class SubscriberController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Subscribers/Index', [
            'subscribers' => Subscriber::latest()->get(['id', 'email', 'created_at']),
        ]);
    }

    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();

        return back();
    }
}
