<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Film;
use App\User;
use App\Score;
use App\Comment;
use App\Movie_categories;
use App\Material;
use Request;
use Illuminate\Support\Facades\Auth;




class MaterialsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        $movie_categories = Movie_categories::all();
        return view('materials.create')->with(['movie_categories' => $movie_categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $Request)
    {
        $input = Request::all();
        Material::create($input);
        return redirect('films');
    }
}
