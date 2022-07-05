<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function createAnimePage(){
        return view('createAnime');
    }

    public function createNewAnime(Request $request){
//        dd($request->all());
        $request->validate([
           'name' => 'required|max:200',
           'author' => 'required|max:200',
           'animator' => 'required|max:200',
           'genre' => 'required|max:200',
        ]);
        Anime::create($request->all());
        return redirect()->back();
    }

    public function deleteAnime(Anime $anime){
//        dd($anime);
        $anime->delete();
        return redirect()->back();
    }

    public function updatePage(Anime $anime){
        return view('update', compact('anime'));
    }
    public function updateAnime(Anime $anime, Request $request){
        $anime->name = $request->name;
        $anime->author = $request->author;
        $anime->animator = $request->animator;
        $anime->genre = $request->genre;
        $anime->status = $request->status;
        $anime->save();
        return redirect()->route('home');
    }
}
