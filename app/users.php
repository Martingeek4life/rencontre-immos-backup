<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //users model
        //equivalent to admins table
    protected $table = "users";
    protected $fillable = [
            "nom", "telephone", "password"
        ];
    public static function postUsers($nom , $telephone , $password) {
        $user = users::create([
            "nom"=>$nom,
            "telephone"=>$telephone,
            "password"=>$password,
        ]);
        
        // dd($user);
        return $user;
    }

    public static function getUsers($telephone) {
        $user = users::where("telephone", $telephone)
                        ->get();
         // dd($user);
        return $user;
    }
}
