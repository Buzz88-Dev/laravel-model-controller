<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $data = [
            "pageTitle" => 'Pagina Metod-Controller',
            "text" => 'Stampo le card Movies',
        ];
        $Movies = \App\movie::all();
        // dd($Movies);
        // dd($data);
        //return view('home', $data);
        return view('home', compact('data','Movies'));
    }

    public function new(){
        $data = [
            "pageTitle" => 'New Page',
            "text" => 'Sono una nuova pagina',
        ];
        return view('new', compact('data'));   // dove new è new.blade.php e 'data' è l array che passo al file in views
    }
}
