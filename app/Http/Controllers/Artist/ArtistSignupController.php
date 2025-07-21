<?php

namespace App\Http\Controllers\Artist;

use App\Http\Requests\ArtistSignupRequest;
use App\Models\Artist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArtistSignupController extends Controller
{
    public function create() : View {
        return view('artist.signup');
    }

    public function store(ArtistSignupRequest $request) : RedirectResponse {
        //validate
        $validatedData = $request->validated();

        //Check
        $checkArtist = Artist::firstWhere('name', $validatedData['artistname']);
        if($checkArtist){
           return back()->withInput()->with('artistname_exists', 'Artist name already exists');
        }
        else{
        //store
        Artist::create([
            'name' => $validatedData['artistname'], 
            'email' => $validatedData['email'],
            'profile_path' => Storage::url('images/profile-image.webp'),
            'password' => Hash::make($validatedData['password'])
        ]);
        
        //Get id
        $artistId = Artist::firstWhere('name', $validatedData['artistname'])->id;
        Auth::guard('artist')->loginUsingId($artistId);
        return redirect()->action([ArtistDashboardController::class, 'dashboard'], ['id' => $artistId]);
        }

    }
}
