<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){
        $allAnime = Anime::all();
        return view('home', compact('allAnime'));
    }
}
