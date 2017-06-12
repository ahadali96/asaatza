<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JobController extends Controller
{
    public function viewjobs()
    {
    	return view('frontend.jobs');
    }
}
