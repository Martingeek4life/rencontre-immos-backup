<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    //equivalent to admins table
    protected $table = "admins";
    protected $fillable = [
            "login", "password"
        ];
    public static function getAdmin($login , $password) {
        $admins = admins::where("login", $login)
                        ->where("password", $password)
                        ->get();
        
        // dd($admins);
        return $admins;
    }    
}
