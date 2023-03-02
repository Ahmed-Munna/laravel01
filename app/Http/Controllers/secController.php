<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secController extends Controller
{
    function some() {
        return view('/welcome');
    }
}
