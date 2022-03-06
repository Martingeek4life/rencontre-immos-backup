<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class house extends Model
{
    //house model

    protected $table = "houses";
    protected $fillable = [
            "ville", "nom" ,"quartier", "type", "douche", "cuisine", "salon", "chambre","userPhone", "nature", "description", "prix", "localisation", "photos"
        ];
    public static function postHouse($ville , $quartier ,$type,  $douche, $cuisine , $salon , $chambre, $userPhone, $description , $localisation, $photos, $nom, $achat) {
        $house = house::create([
            "ville"=>$ville,
            "quartier"=>$quartier,
            "type"=>$type,
            "douche"=>$douche,
            "cuisine"=>$cuisine,
            "salon"=>$salon,
            "chambre"=>$chambre,
            "description"=>$description,
            "prix"=>0,
            "localisation"=>$localisation,
            "photos"=>$photos,
            "userPhone"=>$userPhone,
            "nature"=>$achat,
            "nom"=>$nom
        ]);
        
        return $house;
    }

    public static function getMyHouses($userPhone) {
        $myHouses = house::where('userPhone', $userPhone)
                            ->paginate(5);
        // $houses = json_decode($myHouses, true);

        return $myHouses;
    }

    public static function updateValidite($id , $nbDay) {

        $house = house::where('id', $id)->get();
        $houses = json_decode($house, true);
        $date = date_create($houses[0]['created_at']);
        date_add($date,date_interval_create_from_date_string("$nbDay days"));
        $house = house::where('id', $id)->update(['created_at'=>$date]);
        // $houses = json_decode($house, true);
        // dd($houses);
        // dd($houses[0]['created_at']);
        // return $houses;
    }
    public static function getAllHouse() {
        $house = house::orderBy('created_at', 'DESC')->paginate(5);
/*         dd($house);
        $houses = json_decode($house, true); */
        return $house;

    }

    public static function getSearchHouse($type , $quartier , $ville) {
        $house = house::where('type', $type)->orWhere('ville', $ville)->orWhere('quartier', $quartier)->paginate(5);
        // $houses = json_decode($house, true);
        return $house;

    }

    public static function getDetails($id) {
        $house = house::where('id', $id)->get();
        $houses = json_decode($house, true);
        return $houses;
    }

    public static function getLimit() {
        $house = house::offset(0)->limit(3)->get();
        $houses = json_decode($house, true);
        // dd($houses);
        return $houses;
    }
}
