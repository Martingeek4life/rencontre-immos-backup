<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admins;

class adminController extends Controller
{
    public function login(Request $request)
    {
        dd($request->input('nom'));
        return view('adminLte.login')->with('error','login ou mot de passe incorrect');
/*         $name = $request->input('username');
        $password = $request->input('pass');
        $admin = json_decode(admins::getAdmin($name, $password), true);
        // var_dump(count($admin));
        // dd(count($admin)); 
        if(count($admin) > 0) {
            session(['admin' => $name]);
            return  redirect()->to('/login-success');
        } else {
            session(['hasError' => 1]);
            return view('adminLte.login')->with('error','login ou mot de passe incorrect');
        } */
           


        //
    }
}
