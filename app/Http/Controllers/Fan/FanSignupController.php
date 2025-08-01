<?php

namespace App\Http\Controllers\Fan;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Fan\FanSignupRequest;
use App\Models\Fan;
use Illuminate\Support\Facades\Auth;

class FanSignupController extends Controller
{
    public function index(): View {
        return view('fan.auth.signup');
    }

    public function create(FanSignupRequest $request){
        //Validate
        $attributes = $request->validated();
 
        //Check
        if(Fan::firstWhere('name', $attributes['name'])){
          return back()->withInput()->withErrors(['user_exists' => 'The user already exists']);
        }

        //Insert
        $fan = Fan::create($attributes);

        //Signin
        Auth::guard('fan')->loginUsingId($fan->id);

        //Redirect
        dd('Successfully signup');
    }
}
