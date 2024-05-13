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
        if($vote === 'details' || !is_numeric($vote) || $vote > 9 || !isset($vote)){
            abort(404);
            // return view('error');
        }else{
            $movies = Movie::where('vote', '>', $vote)->get();

            $title = 'Filtro per voto' . ' - ' . 'Maggiore di' . ' ' . $vote ;

            return view('home', compact('movies', 'title'));
        }

    }

    public function movieDetails($id){

            $movie = Movie::find($id);

            // se la query restituisce null faccio il controllo su movie che a sua volta è null
            if (!isset($movie)) {
                abort(404);
                // return view('error');
            } else{
                return view('details', compact('movie'));
            }

    }
}
