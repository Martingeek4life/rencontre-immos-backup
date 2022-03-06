<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immobiliers extends Model
{
    // Immobilier Model logic

    protected $table = "Immobiliers";
    protected $fillable = [
            "ville", "quartier", "nom", "prenom", "phone", "superficie", "type", "objet", "description", "prix", "photos","localisation", "rue", "video", "password", "email"
        ];
    public static function postImmo($ville , $quartier ,$nom,  $prenom, $phone , $superficie , $type, $objet, $description , $prix, $photo, $localisation, $rue, $video, $password, $email) {
        $immo = Immobiliers::create([
            "ville"=>$ville,
            "quartier"=>$quartier,
            "nom"=>$nom,
            "prenom"=>$prenom,
            "phone"=>$phone,
            "superficie"=>$superficie,
            "type"=>$type,
            "objet"=>$objet,
            "description"=>$description,
            "prix"=>$prix,
            "photos"=>$photo,
            "localisation"=>$localisation,
            "rue"=>$rue,
            "video"=>$video,
            "password"=>$password,
            "email"=>$email
        ]);
        
        return $immo;
    }
    public static function Search($profession, $pays, $ville, $quartier, $rue) {
        // dd($pr)
        if($quartier == '' && $rue == '') {
            $tech = Immobiliers::where('objet', "pour vente")->where('type', $profession)->Where('localisation', $pays)->Where('ville', $ville)->get();
        }
        else if ($quartier == '' && $rue != '') {
            $tech = Immobiliers::where('objet', "pour vente")->where('type', $profession)->Where('localisation', $pays)->Where('ville', $ville)->Where('rue', $rue)->get();
        }
        else if ($quartier != '' && $rue == '' ) {
            $tech = Immobiliers::where('objet', "pour vente")->where('type', $profession)->Where('localisation', $pays)->Where('ville', $ville)->Where('quartier', $quartier)->get();
        } 
        else {
            $tech = Immobiliers::where('objet', "pour vente")->where('type', $profession)->Where('localisation', $pays)->Where('ville', $ville)->Where('quartier', $quartier)->get();
        }
        
        $tech = json_decode($tech, true);
        return $tech;
    }

    public static function SearchL($profession, $pays, $ville, $quartier, $rue) {
        // dd($pr)
        if($quartier == '' && $rue == '') {
            $tech = Immobiliers::where('objet', "pour location")->where('type', $profession)->Where('localisation', $pays)->Where('ville', $ville)->get();
        }
        else if ($quartier == '' && $rue != '') {
            $tech = Immobiliers::where('objet', "pour location")->where('type', $profession)->Where('localisation', $pays)->Where('ville', $ville)->Where('rue', $rue)->get();
        }
        else if ($quartier != '' && $rue == '' ) {
            $tech = Immobiliers::where('objet', "pour location")->where('type', $profession)->Where('localisation', $pays)->Where('ville', $ville)->Where('quartier', $quartier)->get();
        } 
        else {
            $tech = Immobiliers::where('objet', "pour location")->where('type', $profession)->Where('localisation', $pays)->Where('ville', $ville)->Where('quartier', $quartier)->get();
        }
       
        $tech = json_decode($tech, true);
        return $tech;
    }
public static function getPub($login) {
    $buyImmo = Immobiliers::where('phone', $login)->get();
    // dd($login);
    return $buyImmo;
}

    public static function getBuyImmo() {
        $buyImmo = Immobiliers::where('objet', 'pour vente')->get();
        return $buyImmo;
    }
    public static function updateImmo($id, $ville , $quartier ,$nom,  $prenom, $phone , $superficie , $type, $objet, $description , $prix, $localisation, $rue, $password, $email) {
        $buyImmo = Immobiliers::find($id);
        $buyImmo->ville = $ville;
        $buyImmo->localisation = $localisation;
        $buyImmo->quartier = $quartier;
        $buyImmo->nom = $nom;
        $buyImmo->prenom = $prenom;
        $buyImmo->phone = $phone;
        $buyImmo->type = $type; 
        $buyImmo->objet = $objet;
        $buyImmo->description = $description;
        $buyImmo->prix = $prix;
        $buyImmo->rue = $rue;
        $buyImmo->password = $password;
        $buyImmo->email = $email;
        $buyImmo->superficie = $superficie;
        // dd($buyImmo);
        $immo = $buyImmo;
        $buyImmo->save();
        // dd($buyImmo);
        return $immo;
    }
    public static function getRentImmo() {
        $buyImmo = Immobiliers::where('objet', 'pour location')->get();
        return $buyImmo;
    }
    public static function getPays() {
        $buyImmo = Immobiliers::select('localisation')->distinct()->get();
        return $buyImmo;
    }
    public static function getVille() {
        $buyImmo = Immobiliers::select('ville')->distinct()->get();
        return $buyImmo;
    }
    public static function getQuartier() {
        $buyImmo = Immobiliers::select('quartier')->distinct()->get();
        return $buyImmo;
    }
    public static function getRue() {
        $buyImmo = Immobiliers::select('rue')->distinct()->get();
        return $buyImmo;
    }
    public static function getInfoByPhone($login, $password) {
        $infoUser = Immobiliers::where('phone', $login)->Where('password', $password)->paginate(10);
        return $infoUser;
    }


    public static function getSearchImmo($objet, $type , $prix , $ville) {
        // dd($prix);
        // dd($ville);
        if($prix == null && $ville != null) {
            $immo = Immobiliers::Where('objet', $objet)->Where('type', $type)->where('ville', $ville)->orwhere('prix', $prix)->paginate(10);
        } 

        else if($ville = null && $prix != null) {
            $immo = Immobiliers::Where('objet', $objet)->Where('type', $type)->where('prix', $prix)->orwhere('ville', $ville)->paginate(10);
        } else if($ville != null && $prix != null) {
            $immo = Immobiliers::Where('objet', $objet)->Where('type', $type)->where('prix', $prix)->where('ville', $ville)->paginate(10);
        }

         else {
            $immo = Immobiliers::Where('objet', $objet)->Where('type', $type)->orwhere('ville', $ville)->orwhere('prix', $prix)->paginate(10);
        }
        // $houses = json_decode($house, true);
        return $immo;

    }

    public static function getDetails($id) {
        $immo = Immobiliers::where('id', $id)->get();
        $immo = json_decode($immo, true);
        return $immo;
    }
}
