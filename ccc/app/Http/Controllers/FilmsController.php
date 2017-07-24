<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests\CreateFilmRequest;
use App\Http\Controllers\Controller;
use App\Film;
use App\User;
use App\Score;
use App\Comment;
use App\Movie_categories;
use App\Material;
use Illuminate\Support\Facades\Redirect;

class FilmsController extends Controller
{
    // pobieramy liste filmów

    public function index()
    {
        $userScores = Score::latest()->get();

        foreach ($userScores as $k => $v)
        {
            $user = User::findOrFail($userScores[$k]->usrId);
            $userScores[$k]->userName = $user->name;
        }

        $materialsKata = Material::latest()->where('category', 1)->get();
        $materialsKichon = Material::latest()->where('category', 2)->get();
        $materialsKumite = Material::latest()->where('category', 3)->get();

        $user = User::findOrFail(1);
        return view('films.index')->with([
            'userScores' => $userScores,
            'materialsKata' => $materialsKata,
            'materialsKichon' => $materialsKichon,
            'materialsKumite' => $materialsKumite,
        ]);
    }


    // metoda wyciagajaca jeden film

    public function showMovieDetails($id)
    {
        $film = Material::findOrFail($id);
        return view('films.show-movie-details')->with('film', $film);
    }

    public function showScoreDetails($id)
    {
        $film = Score::findOrFail($id);
        $comments = Comment::latest()->where('movieId', $id)->get();

        foreach ($comments as $k => $v)
        {
            $user = User::findOrFail($comments[$k]->usrId);
            $comments[$k]->userName = $user->name;
        }

        return view('films.show-score-details')->with([
            'film' => $film,
            'comments' => $comments
        ]);
    }

    public function storeComment(request $Request)
    {
        $input = Request::all();
        Comment::create($input);
        return Redirect::back();
    }

}

