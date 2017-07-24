<?php

namespace App\Http\Controllers;

use Request;
use App\Score;
use App\User;
use Illuminate\Support\Facades\Auth;

class ScoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index4()
    {
        $user = Auth::user();
    	$scores =Score::latest()->where('usrId', $user->id)->get();
        return view('scores.index4')->with(['scores'=> $scores, 'user_name' => $user->name]);
    }


    public function show($id)
    {
    	$score = Score::findOrFail($id);
    	return view('scores.show')->with('score', $score);
    }


    //  wyswietla formularz dodawania filmu

    public function create()
    {
    	return view('scores.create');
    }


    // Zapisywanie filmu do tabeli ( bazy )

     public function store(request $Request)
    {
    	$input = Request::all();
        Score::create($input);
    	return redirect('scores');
    }



}
