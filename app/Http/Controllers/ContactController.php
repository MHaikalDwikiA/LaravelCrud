<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function update()
    {
        return view('contact');
    }

    public function store()
    {
        dd('submited'); // dump and died
    }
}
