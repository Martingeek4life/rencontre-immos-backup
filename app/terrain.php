<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class terrain extends Model
{
    //model for terrain
    protected $table = "terrains";
    protected $fillable = [
            "ville", "nom", "quartier", "userPhone", "nature", "description", "prix", "localisation", "photos" , "superficie"
        ];
    public static function postTerrain($ville , $superficie ,  $quartier , $userPhone, $nature, $description, $localisation, $photos) {
        $terrain = terrain::create([
            "ville"=>$ville,
            "quartier"=>$quartier,
            "superficie" =>$superficie,
            "description"=>$description,
            "prix"=>0,
            "localisation"=>$localisation,
            "photos"=>$photos,
            "userPhone"=>$userPhone,
            "nature"=>$nature,
            "nom"=>Session::get('userName')

        ]);
        
        return $terrain;
    }

    public static function getMyTerre($userPhone) {
        $myTerres = terrain::where('userPhone', $userPhone)
                            ->paginate(5);
        // $myTerre = json_decode($myTerres, true);

        return $myTerres;
    }

    public static function updateValidite($id , $nbDay) {

        $terre = terrain::where('id', $id)->get();
        $terres = json_decode($terre, true);
        $date = date_create($terres[0]['created_at']);
        date_add($date,date_interval_create_from_date_string("$nbDay days"));
        $terres = terrain::where('id', $id)->update(['created_at'=>$date]);
        // $terres = json_decode($house, true);
        // dd($houses);
        // dd($houses[0]['created_at']);
        // return $houses;
    }
    public static function getAllTerre($nature) {
        $terre = $terre = terrain::orderBy('created_at', 'DESC')->where('nature', $nature)->paginate(5);
        // $terres = json_decode($terre, true);
        // dd($terre);
        return $terre;
    }


    public static function getAllTerres() {
        $terre = $terre = terrain::orderBy('created_at', 'DESC')->paginate(5);
        // $terres = json_decode($terre, true);
        // dd($terre);
        return $terre;
    }

    public static function getDetails($id) {
        $terre = terrain::where('id', $id)->get();
        $terres = json_decode($terre, true);
        return $terres;
    }
    public static function getLimit() {
        $terre = terrain::offset(0)->limit(3)->get();
        $terres = json_decode($terre, true);
        // dd($terres);
        return $terres;
    }

    public static function getSearchTerrain($superficie, $ville, $quartier) {
        $terre = terrain::where('nature', 'louer')->where('superficie', $superficie)->orWhere('ville', $ville)->orWhere('quartier', $quartier)->paginate(5);
        // $houses = json_decode($house, true);
        return $terre;

    }
}
