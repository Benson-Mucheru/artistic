<?php

namespace App\Http\Controllers\Fan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Fan;
use Illuminate\Contracts\View\View;

class FanDashboardController extends Controller
{
    public function index($id): View{
        $fan = Fan::findOrFail($id);
        $artists = Artist::all();
        return view('fan.dash.dashboard', ['data' => $fan, 'artists' => $artists]);
    }
}
