<?php

namespace App\Http\Controllers\Artist;

use App\Models\Artist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class ArtistDashboardController extends Controller
{
    public function dashboard($id) : View {
        Gate::authorize('check-artist-url', $id);
        $artist = Artist::findOrFail($id);
        return view('artist.dash.dashboard', ['artistData' => $artist]);
    }

    public function music($id) : View {
        $artist = Artist::findOrFail($id);
        return view('artist.dash.music', ['artistData' => $artist]);
    }
}
