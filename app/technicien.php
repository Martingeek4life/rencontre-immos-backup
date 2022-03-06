<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class technicien extends Model
{
    // technicien model

    protected $table = "technicien";
    protected $fillable = [
            "ville", "quartier", "rue", "nom" ,"prenom", "telephone", "profession", "description", "localisation", "photos", "video", "password", "email"
        ];

    public static function postTech($ville, $quartier, $rue, $nom,  $prenom, $telephone , $profession, $description, $photos, $localisation, $video, $password, $email) {
        $tech = technicien::create([
            "ville"=>$ville,
            "quartier"=>$quartier,
            "rue"=>$rue,
            "nom"=>$nom,
            "prenom"=>$prenom,
            "telephone"=>$telephone,
            "profession"=>$profession,
            "description"=>$description,
            "photos"=>$photos,
            "localisation"=>$localisation,
            "video"=>$video,
            "password"=>$password,
            "email"=>$email
        ]);
        $tech = json_decode($tech, true);
        return $tech;
    }
    public static function getTech() {
        $buyImmo = technicien::orderBy('created_at', 'DESC')->get();
        return $buyImmo;
    }

    public static function getInfoByPhone($login, $password) {
        $infoUser = technicien::where('telephone', $login)->Where('password', $password)->paginate(10);
        return $infoUser;
    }

    public static function getPays() {
        $buyImmo = technicien::select('localisation')->distinct()->get();
        return $buyImmo;
    }
    public static function getVille() {
        $buyImmo = technicien::select('ville')->distinct()->get();
        return $buyImmo;
    }
    public static function getQuartier() {
        $buyImmo = technicien::select('quartier')->distinct()->get();
        return $buyImmo;
    }
    public static function getRue() {
        $buyImmo = technicien::select('rue')->distinct()->get();
        return $buyImmo;
    }

    public static function  getProfession() {
        $buyImmo = technicien::select('profession')->distinct()->get();
        return $buyImmo;
    }

    public static function getDetails($id) {
    $immo = technicien::where('id', $id)->get();
    $immo = json_decode($immo, true);
    return $immo;
    }

public static function getPubservice($login) {
    $buyImmo = technicien::where('telephone', $login)->get();
    return $buyImmo;
}


    public static function Search($profession, $pays, $ville, $quartier, $rue) {
        // dd($profession);
        if($quartier == '' && $rue == '') {
            $tech = technicien::where('profession', $profession)->Where('localisation', $pays)->Where('ville', $ville)->get();
        }
        else if ($quartier == '' && $rue != '') {
            $tech = technicien::where('profession', $profession)->Where('localisation', $pays)->Where('ville', $ville)->Where('rue', $rue)->get();
        }
        else if ($quartier != '' && $rue == '' ) {
            $tech = technicien::where('profession', $profession)->Where('localisation', $pays)->Where('ville', $ville)->Where('quartier', $quartier)->get();
        } 
        else {
            $tech = technicien::where('profession', $profession)->Where('localisation', $pays)->Where('ville', $ville)->Where('quartier', $quartier)->Where('rue', $rue)->get();
        }
        $tech = json_decode($tech, true);
        return $tech;
    }
}
