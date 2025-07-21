<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index() : View {
        //Storage::disk('public')->put('example.txt', 'Contents');
        $content = Storage::url('music/sela.mp3');
        return view('homepage', ['data' => $content]);
    }
}
