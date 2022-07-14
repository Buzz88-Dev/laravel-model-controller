<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\movie;

class PageController extends Controller
{
    public function index() {
        $data = [
            "pageTitle" => 'Card Movies',
            "text" => 'Stampo le card Movies',
        ];
        // dd($data);
        $Movies = movie::all();
        // dd($Movies);
        $vote = movie::where('vote', '>', '9')->get();
        // dd($vote);
        //return view('home', $data);
        return view('home', compact('data','Movies', 'vote'));
    }

    public function new(){
        $data = [
            "pageTitle" => 'New Page',
            "text" => 'Sono una nuova pagina',
        ];
        return view('new', compact('data'));   // dove new è new.blade.php e 'data' è l array che passo al file in views
    }
}
