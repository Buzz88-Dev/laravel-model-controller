<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            "pageTitle" => 'Pagina Metod-Controller',
            "text" => 'Stampo la tabella Movies',
        ];
        // dd($data);
        //return view('home', $data);
        return view('home', compact('data'));
    }

    public function new(){
        $data = [
            "pageTitle" => 'New Page',
            "text" => 'Sono una nuova pagina',
        ];
        return view('new', compact('data'));
    }
}
