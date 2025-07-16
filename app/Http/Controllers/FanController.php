<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class FanController extends Controller
{
    public function index(): View {
        return view('fan.index');
    }
}
