<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\users;

class userController extends Controller
{
    //for all user account

    public function register(Request $request)
    {
        // dd($request->input('nom'));
        $nom = $request->input('nom');
        $phone = $request->input('phone');
        $password = $request->input('password');
        $password = Hash::make($password);
        $user = json_decode(users::postUsers($nom , $phone , $password), true);
        // dd(count($user));
        session(['userName' => $nom]);
        session(['userphone' => $phone]);
        // dd(session()->all());
        // return view('immos.index');
    }
    
    public function login(Request $request) {
        $phone = $request->input('telLogin');
        $password = $request->input('passLogin');
        $user = json_decode(users::getUsers($phone), true);
         // dd($user[0]['password']);
        if (Hash::check($password, $user[0]['password'])) {
            // dd($user);
            session(['userInfo' => $user[0]['nom']]);
            session(['nbconnected' => 1]);
            session(['userphone' => $phone]);
            return  redirect()->to('/achat');
        }
    }
}
