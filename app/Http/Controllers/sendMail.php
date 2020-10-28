<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\verifyMail;

class sendMail extends Controller
{
    public function send(){

        $details = [
            'name' => 'Dedar'
        ];

        Mail::to('dedar3000@gmail.com')->send(new verifyMail($details));
    }
}
