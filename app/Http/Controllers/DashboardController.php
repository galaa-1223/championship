<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $profile = 0;

        if($profile == 1){
            echo "dashboard";
        }else{
            return redirect()->route('users.index');
        }
    }
}
