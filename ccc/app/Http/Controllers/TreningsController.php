<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trening;

class TreningsController extends Controller
{
    // Pobieramy liste filmów


    public function index2()
    {

    	$trenings =Trening::latest()->get();
    	return view('trenings.index2')->with('trenings', $trenings);

    }

    public function show($id)
    {
    	$trening = Trening::find($id);
    	return view('trenings.show')->with('trening', $trening);
    }
}
