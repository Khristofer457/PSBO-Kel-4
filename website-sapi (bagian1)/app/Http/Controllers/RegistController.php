<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function create()
    {
    	return view('regist', [
    		'title' => 'Regist',
    		'active' => 'regsit'
    	]);
    }

    public function store()
    {
    	return Request() -> all();
    }
}
