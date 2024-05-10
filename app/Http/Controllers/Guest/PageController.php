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

        // in caso ci sia qualsiasi altra cosa al posto dell'uri del voto reindirizzo alla pagina di errore
        if($vote === 'details' || !is_numeric($vote)){
            return view('error');
        }else{
            $movies = Movie::where('vote', '>', $vote)->get();

            $title = 'Filtro per voto' . ' - ' . 'Maggiore di' . ' ' . $vote ;

            return view('home', compact('movies', 'title'));
        }

    }

    public function movieDetails($id){

            $movie = Movie::find($id);

            // se l'id è maggiore del numero di id nel database reindirizzo alla pagina di errore
            if ($id > Movie::count('id')) {
                return view('error');
            } else{
                return view('details', compact('movie'));
            }

    }
}
