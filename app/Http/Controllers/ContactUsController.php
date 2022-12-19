<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function addContact(Request $request)
    {
        $contacts = new contactUs();
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->telephone = $request->telephone;
        $contacts->message = $request->message;
        $contacts->status = 1;

        $contacts->save();
        return redirect()->back()->with('success', 'Your Message Submitted !!!');
    }

}
