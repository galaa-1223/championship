<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function personal()
    {
        return view('site.users.personal');
    }

    public function idcard()
    {
        return view('site.users.idcard');
    }

    public function contract()
    {
        return view('site.users.contract');
    }

    public function finish()
    {
        return view('site.users.finish');
    }

    public function register(RegisterRequest $request) 
    {
        // dd($request);
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
