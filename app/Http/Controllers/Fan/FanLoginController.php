<?php

namespace App\Http\Controllers\Fan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Fan\FanLoginRequest;
use App\Models\Fan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class FanLoginController extends Controller
{
    public function create(): View{
        return view('fan.auth.login');
    }

    public function store(FanLoginRequest $request): RedirectResponse{
        //validate
        $attributes = $request->validated();

        //attempt
        if(!Auth::guard('fan')->attempt($attributes)){
           return back()->withInput()->withErrors(['login_failed' => 'The credentials your provided do not much']);
        }
        //find fan id
        $fanId = Fan::firstWhere('email', $attributes['email'])->id;

        //regenerate session id
        $request->session()->regenerate();

        //login
        Auth::guard('fan')->loginUsingId($fanId);

        //redirect
        return dd('Successfully logined in');
    }

    public function destory (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        redirect('/');
    }
}
