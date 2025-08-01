<?php

namespace App\Http\Controllers\Fan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Fan\FanLoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class FanLoginController extends Controller
{
    public function create(): View{
        return view('fan.auth.login');
    }

    public function store(FanLoginRequest $request){
        //validate
        $attributes = $request->validated();
        //dd($attributes);
        //attempt
        dd(Auth::guard('fan')->attempt($attributes));
        //login

        //redirect
        
    }
}
