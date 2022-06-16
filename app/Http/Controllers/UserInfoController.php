<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserInfoController extends Controller{
    
    public function getUserInfo(Request $req){
        $user_name = $req->input('user_name');
        $user_password = $req->input('user_password');

        if ($user_name !== null) {
            $new_user = new User;
            $new_user->name = $user_name;
            $new_user->password = $user_password;

            $new_user->save();
        }
        return view('sign_in_or_sign_up', [
            'post_user_info' => array($user_name, $user_password)
        ]);
    }
    public function buyPremium(Request $req){
        return view('premium', [
            'premium-buy' => true,
        ]);
    }
    
}