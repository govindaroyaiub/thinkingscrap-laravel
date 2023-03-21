<?php

use App\Models\Contact;
use App\Models\Wing;
use App\Models\Client;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Work;
use App\Models\WorkFile;
use Illuminate\Support\Facades\Auth;

class Helper{
    public static function getClientName($id){
        $data = Client::where('id', $id)->first();

        return $data['name'];
    }
}