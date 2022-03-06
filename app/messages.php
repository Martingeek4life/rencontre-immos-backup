<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    protected $table = "messages";
    protected $fillable = [
        "idService", "phoneService", "phoneClient", "contenu", "nomClient", "professionClient", "etat"
    ];
    public static function postMessage($idService, $phoneService, $phoneClient, $contenu,  $nomClient, $professionClient) {
        $message = messages::create([
            "idService"=>$idService,
            "phoneService"=>$phoneService,
            "phoneClient"=>$phoneClient,
            "contenu"=>$contenu,
            "nomClient"=>$nomClient,
            "professionClient"=>$professionClient,
            "etat"=>0
        ]);
        $message = json_decode($message, true);
        return $message;
    }
    public static function getMessage($login){
        $messages = messages::where('phoneService', $login)->get();
        return $messages;
    }


    public static function getMessageAll(){
        $messages = messages::orderBy('created_at', 'DESC')->get();
        
        return $messages;
    }

    public static function getMessageRead(){
        $messages = messages::where('etat', 1)->get();
        
        return $messages;
    }

    public static function getMessageUnRead(){
        $messages = messages::where('etat', 0)->get();
        
        return $messages;
    }

    public static function getDetails($id) {
        $message = messages::where('id', $id)->get();
        $update = messages::where('id', $id)->update(['etat' => 1]);
        return $message;
    }

    public static function updateEtat($id) {
        $message = messages::where('id', $id)->update(['etat' => 1]);
    }
}
