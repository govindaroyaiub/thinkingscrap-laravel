<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function messagesIndex(){
       return view('messages');
    }
}
