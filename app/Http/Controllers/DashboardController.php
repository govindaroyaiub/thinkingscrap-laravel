<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function messagesIndex(){
        $data = Contact::orderBy('created_at', 'DESC')->get();
       return view('messages', compact('data'));
    }

    public function contactStore(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
    }

    public function wingsIndex(){
        return view('wings');
    }

    public function clientsIndex(){
        return view('clients');
    }
}
