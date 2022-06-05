<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepageController extends Controller
{
    public function prepage()
    {
    	return view('auth.login');
    }
}
