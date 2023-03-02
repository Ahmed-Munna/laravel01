<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\secController;

class firstControler extends Controller
{
    function index() {
        return view('/contact');
    }
    function about() {
        //return redirect('/');
        //return redirect()->route('contact.list');
        return redirect()->action([secController::class, 'some']);
    }

    function store(Request $request) {
        $validate = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:4|max:8'
        ]);
        return $request->all();
    }
}
