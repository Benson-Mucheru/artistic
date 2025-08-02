<?php

namespace App\Http\Controllers\Music;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Music;

class MusicController extends Controller
{
    public function index($id){
        $artist = Artist::findOrFail($id);
        $songs = $artist->songs;
        return view('music.index', ['artist' => $artist, 'songs' => $songs]);
    }
}
