<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\FreeTrialMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function storeContactForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($validated);

        Mail::to('info@imageexpert24.com')->send(new ContactFormMail(
            $validated['name'],
            $validated['email'],
            $validated['phone'],
            $validated['subject'],
            $validated['message'],
        ));

        return redirect()->back()->with(['success' => 'Contact Form send Successfully']);
    }

    public function storeFreeTrial(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'attachment' => 'required|file',
        ]);

        $file = $request->file('attachment');
        $path = $file->store('free-trial-attachments');

        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'attachment' => $path,
        ]);

        Mail::to('info@imageexpert24.com')->send(new FreeTrialMail(
            $validated['name'],
            $validated['email'],
            $validated['subject'],
            $path,
            $file->getClientOriginalName(),
        ));

        return redirect()->back()->with(['success' => 'FreeTrial send Successfully']);
    }
}
