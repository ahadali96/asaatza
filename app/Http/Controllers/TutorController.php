<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TutorController extends Controller
{
    public function viewtutor()
    {
    	return view('frontend.tutors');
    }
}
