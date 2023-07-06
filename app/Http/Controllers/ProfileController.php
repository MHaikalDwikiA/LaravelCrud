<?php

namespace App\Http\Controllers;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke(Request $request, $identifier)
    {

        // $query = "SELECT * FROM users WHERE usernam = {$identifier}";
        return view('profile', ['username' => $identifier]);
    }
}
