<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use GuzzleHttp\Psr7\Header;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();

        $title = 'Tutti i film';

        return view('home', compact('movies', 'title'));
    }

    public function moviesByVote($vote){

        if($vote === 'details'){
            dd('Inserire un id valido');
        }else{
            $movies = Movie::where('vote', '>', $vote)->get();

            $title = 'Filtro per voto' . ' - ' . 'Maggiore di' . ' ' . $vote ;

            return view('home', compact('movies', 'title'));
        }
    }

    public function movieDetails($id){

            $movie = Movie::find($id);

            return view('details', compact('movie'));
    }
}
