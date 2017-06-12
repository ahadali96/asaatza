<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TutionController extends Controller
{
    public function viewtution()
    {
    	return view('frontend.tutioncentre');
    }
}
