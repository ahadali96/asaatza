<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function viewhome()
    {
    	return view('frontend.home');
    }
}
