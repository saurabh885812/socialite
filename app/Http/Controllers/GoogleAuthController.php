<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facade\Socialite;

class GoogleAuthController extends Controller
{
    function redirect(){
        return Socialite::driver('google')->redirect();
    }
    function callbackGoogle(){
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
            if(!$user){
                
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
