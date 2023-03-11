<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class LoginController extends Controller
{
    public function show()
    {
        return view('site.users.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            // return redirect()->to('login')
            //     ->withErrors(trans('auth.failed'));
            return response()->json([
                "status" => false,
                "errors" => 'Бүртгэлтэй хэрэглэгч алга байна!'
            ]);
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user) 
    {
        // $log = User::whereId($user->id)->update([
        //     "ip"          => $request->ip(),
        //     "lastlogin"   =>  Carbon::now()->timestamp
        // ]);

        return response()->json([
            "status" => true, 
            "redirect" => url("dashboard")
        ]);
        // return redirect()->intended();
    }
}
