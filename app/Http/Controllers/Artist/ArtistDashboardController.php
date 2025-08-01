<?php

namespace App\Http\Controllers\Artist;

use App\Models\Artist;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\MusicUploadRequest;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistDashboardController extends Controller
{
    public function dashboard($id) : View {
        $artist = Artist::findOrFail($id);
        $songs = $artist->songs->take(4)->all();
        return view('artist.dash.dashboard', ['artistData' => $artist, 'artistSongs' => $songs]);
    }

    public function music($id) : View {
        $artist = Artist::findOrFail($id);
        $songs = $artist->songs->all();
        return view('artist.dash.music', ['artistData' => $artist, 'artistSongs' => $songs]);
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
        $attributes = $request->validated();

        
        if(Music::firstWhere('artist_id', $id) && Music::firstWhere('title', $attributes['title'])){
          return back()->withInput()->withErrors(['song_exists' => 'The song already exists']);
        }else{
            //Store
            Storage::disk('public')->putFileAs('music', $attributes['audio'], $attributes['title'].'.mp3');
            Music::create([
                'artist_id' => $artist->id,
                'title' => $attributes['title'],
                'path' => 'storage/music/' . $attributes['title'] . '.mp3',
            ]);
            //Redirect
            return redirect()->action([ArtistDashboardController::class, 'music'], ['id' => $artist->id]);
        }  
    }

    public function edit_profile(Request $request,$id){
        $artist = Artist::findOrFail($id);
        $attributes = $request->validate([
            'name' => ['required', 'min:3'],
            'profile_pic' => ['required', 'file', 'mimetypes:image/*', 'max:20000']
        ]);
        Storage::disk('public')->putFileAs('images/profiles', $attributes['profile_pic'], $attributes['profile_pic']->getClientOriginalName());
        $artist->update([
            'name' => $attributes['name'],
            'profile_path' => '/storage/images/profiles/'.$attributes['profile_pic']->getClientOriginalName()
        ]);
        return redirect()->action([ArtistDashboardController::class, 'dashboard'], ['id' => $artist->id]);
    }

    public function music_download(Request $request, $id){
        return response()->download($request->music_path, $request->music_name);
        
    }
}
