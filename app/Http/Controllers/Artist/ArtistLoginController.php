<?php

namespace App\Http\Controllers\Artist;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistLoginRequest;
use App\Models\Artist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistLoginController extends Controller
{
    public function create() : View {
        return view('artist.login');
    }

    public function store(ArtistLoginRequest $request) : RedirectResponse {
        $attributes = $request->validated();
        if(Auth::attempt($attributes)){
            $artistId = Artist::firstWhere('email', $attributes['email'])->id;
            $request->session()->regenerate();
            Auth::guard('artist')->loginUsingId($artistId);
            return redirect()->action([ArtistDashboardController::class, 'dashboard'], ['id' => $artistId]);
        }

        return back()->withErrors([
            'login-error' => 'User does not exist'
        ])->withInput();
    }

    public function destroy(Request $request) : RedirectResponse {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');    
    }
}

