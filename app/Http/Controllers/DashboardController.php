<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Wing;

class DashboardController extends Controller
{
    public function welcomePage(){
        $wingsData = Wing::get();
        return view('welcome', compact('wingsData'));
    }
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
        $data = Wing::orderBy('created_at', 'DESC')->get();
        return view('wings', compact('data'));
    }

    public function wingsAddNew(){
        return view('wings_add_new');
    }

    public function wingsAddNewPost(Request $request){
        $wing = new Wing;
        $wing->name = $request->name;
        $wing->description = $request->description;
        $wing->save();

        return redirect('/wings');
    }

    public function wingsEditIndex( $id){
        $data = Wing::where('id', $id)->first();
        return view('wings_edit', compact('data'));
    }

    public function wingsEditPost(Request $request, $id){
        $data = [
            'name' => $request->name,
            'description' => $request->description
        ];

        Wing::where('id', $id)->update($data);
        return redirect('/wings');
    }

    public function wingsDelete($id){
        Wing::where('id', $id)->delete();

        return redirect('/wings');
    }

    public function clientsIndex(){
        return view('clients');
    }
}
