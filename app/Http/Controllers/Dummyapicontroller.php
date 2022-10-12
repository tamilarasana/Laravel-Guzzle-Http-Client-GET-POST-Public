<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dummyapicontroller extends Controller
{
    function getData() {
        return ['name' => 'Tamil', 'email' => 'tamil@terst.com'];
    }
}
