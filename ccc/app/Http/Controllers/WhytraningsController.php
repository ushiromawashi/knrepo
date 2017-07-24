<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Whytraning;

class WhytraningsController extends Controller
{
    
    // Pobieramy liste filmów


    public function index3()
    {

    	$whytranings =Whytraning::latest()->get();
    	return view('whytranings.index3')->with('whytranings', $whytranings);

    }
}
