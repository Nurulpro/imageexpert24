<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Inertia\Inertia;
use Inertia\Response;

class ContactFormController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/ContactForms/Index', [
            'contacts' => Contact::latest()->get(['id', 'name', 'email', 'phone', 'subject', 'message', 'created_at']),
        ]);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back();
    }
}
