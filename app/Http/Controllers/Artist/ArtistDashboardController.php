<?php

namespace App\Http\Controllers\Artist;

use App\Models\Artist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\MusicUploadRequest;
use App\Models\Music;
use Illuminate\Support\Facades\Storage;

class ArtistDashboardController extends Controller
{
    public function dashboard($id) : View {
        $artist = Artist::findOrFail($id);
        return view('artist.dash.dashboard', ['artistData' => $artist]);
    }

    public function music($id) : View {
        $artist = Artist::findOrFail($id);
        $songs = $artist->songs->all();
        return view('artist.dash.music', ['artistData' => $artist, 'artistSongs' => $songs[0]]);
    }

    public function fans($id) : View {
        $artist = Artist::findOrFail($id);
        return view('artist.dash.fans', ['artistData' => $artist]);
    }

    public function earnings($id) : View {
        $artist = Artist::findOrFail($id);
        return view('artist.dash.earning', ['artistData' => $artist]);
    }

    public function edit($id){
        $artist = Artist::findOrFail($id);
        return view('artist.dash.profile-edit', ['artistData' => $artist]);
    }

    public function music_add($id){
        $artist = Artist::findOrFail($id);
        return view('artist.dash.music-add', ['artistData' => $artist]);
    }

    public function music_upload(MusicUploadRequest $request, $id){
        $artist = Artist::findOrFail($id);
        /* $attributes = $request->validated();

        //Store
        Storage::disk('public')->putFileAs('music', $attributes['audio'], $attributes['title'].'.mp3');
        Music::create([
            'artist_id' => $artist->id,
            'title' => $attributes['title'],
            'path' => '/storage/music/' . $attributes['title'] . '.mp3',
        ]); */

        //Redirect
        return redirect()->action([ArtistDashboardController::class, 'music'], ['id' => $artist->id]);
    }

}
