<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\house;
use App\terrain;
use App\users;

class houseController extends Controller
{


    public function loadVille(Request $request) {

        return 1;

    }

    public static function registerUser(Request $request)
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
    //for all house management
    public function registerv(Request $request) {
        $ville = $request->ville;
        $quartier = $request->quartier;
        $type = $request->type;
        $douche = $request->douche;
        $salon = $request->salon;
        $chambre = $request->chambre;
        $cuisine = $request->cuisine;
        $achat = 'Achat';
        $description = $request->description;
        $userPhone = $request->phone;
        $nom = $request->nom;
        
        // upload localisation   
        $localisation = time().'.'.$request->local->extension();
        $request->local->move(public_path('localisation_doc'), $localisation);

        // upload houses photos
        $photos = time().$request->photo[0]->getClientOriginalName();
        $request->photo[0]->move(public_path('photos_house'), $photos);
        for ($i = 1; $i < count($request->photo); $i++) {
            $variable = time().$request->photo[$i]->getClientOriginalName();
            $photos = $photos.' '.$variable;
            $request->photo[$i]->move(public_path('photos_house'), $variable);
        }
        //dd($request->all());
        house::postHouse($ville , $quartier ,$type,  $douche, $cuisine , $salon , $chambre, $userPhone,  $description, $localisation, $photos, $nom, $achat);
        $house = house::getAllHouse();
        for($i = 0; $i < count($house); $i ++) {
            // tableau de photos
            $house[$i]['photos'] = explode(" ", $house[$i]['photos']);
        }
        session(['hasTerre' => $house]);
        // dd($louer);
        session(['hasBuyT' => 1]);
        session(['author' => 1]);
        session(['hasBuy' => 1]);
        return view('immos.louer_maison');
    }

    public function register(Request $request) {
        $ville = $request->ville;
        $quartier = $request->quartier;
        $type = $request->type;
        $douche = $request->douche;
        $salon = $request->salon;
        $chambre = $request->chambre;
        $cuisine = $request->cuisine;
        $achat = 'Louer';
        $description = $request->description;
        $userPhone = $request->phone;
        $nom = $request->nom;
        
        // upload localisation   
        $localisation = time().'.'.$request->local->extension();
        $request->local->move(public_path('localisation_doc'), $localisation);

        // upload houses photos
        $photos = time().$request->photo[0]->getClientOriginalName();
        $request->photo[0]->move(public_path('photos_house'), $photos);
        for ($i = 1; $i < count($request->photo); $i++) {
            $variable = time().$request->photo[$i]->getClientOriginalName();
            $photos = $photos.' '.$variable;
            $request->photo[$i]->move(public_path('photos_house'), $variable);
        }
        //dd($request->all());
        house::postHouse($ville , $quartier ,$type,  $douche, $cuisine , $salon , $chambre, $userPhone,  $description, $localisation, $photos, $nom, $achat);
        $house = house::getAllHouse();
        for($i = 0; $i < count($house); $i ++) {
            // tableau de photos
            $house[$i]['photos'] = explode(" ", $house[$i]['photos']);
        }
        session(['hasTerre' => $house]);
        // dd($louer);
        session(['hasBuyT' => 1]);
        session(['author' => 1]);
        session(['hasBuy' => 1]);
        return view('immos.louer_maison');
    }

    public static function registerTerrain(Request $request) {
        // dd($request->photo1);
        $ville = $request->ville1;
        $quartier = $request->quartier1;
        // $achat = $request->achat1;
        $description = $request->description1;
        $superficie = $request->superficie;
        // upload localisation   
        // dd($request->local);
        $localisation = time().'.'.$request->local->extension();
        // dd($localisation);
        $request->local->move(public_path('./localisation_doc'), $localisation);

        // upload houses photos
        $photos = time().$request->photo1[0]->getClientOriginalName();
        $request->photo1[0]->move(public_path('photos_house'), $photos);
        for ($i = 1; $i < count($request->photo1); $i++) {
            $variable = time().$request->photo1[$i]->getClientOriginalName();
            $photos = $photos.' '.$variable;
            $request->photo1[$i]->move(public_path('photos_house'), $variable);
        }
        if($request->input('nom')) {
            $nom = $request->input('nom');
            $phone = $request->input('phone');
            $password = $request->input('password');
            $password = Hash::make($password);
            $user = json_decode(users::postUsers($nom , $phone , $password), true);
            // dd(count($user));
            session(['userName' => $nom]);
            session(['userphone' => $phone]);
        }
        $userPhone = session()->get('userphone');
        $nature = 'louer';
        terrain::postTerrain($ville, $superficie, $quartier , $userPhone, $nature,  $description, $localisation, $photos );
        $louer = terrain::getAllTerre($nature);
        for($i = 0; $i < count($louer); $i ++) {
            // tableau de photos
            $louer[$i]['photos'] = explode(" ", $louer[$i]['photos']);
        }
        session(['hasTerre' => $louer]);
        // dd($louer);
        session(['hasBuyT' => 1]);
        session(['author' => 1]);
        return view('immos.louer_terrain');
    }

    public static function getAllTerres() {
        $terres = terrain::getAllTerres();
        for($i = 0; $i < count($terres); $i ++) {
            // tableau de photos
            $terres[$i]['photos'] = explode(" ", $terres[$i]['photos']);
        }
        session(['hasTerre' => $terres]);
        // dd($louer);
        session(['hasBuyT' => 0]);
        session(['author' => 1]);
        return view('immos.louer_terrain');
    }

    public static function registerTerrainV(Request $request) {
        // dd($request->photo1);
        $ville = $request->ville1;
        $quartier = $request->quartier1;
        // $achat = $request->achat1;
        $description = $request->description1;
        $superficie = $request->superficie;
        // upload localisation   
        // dd($request->local);
        $localisation = time().'.'.$request->local->extension();
        // dd($localisation);
        $request->local->move(public_path('./localisation_doc'), $localisation);

        // upload houses photos
        $photos = time().$request->photo1[0]->getClientOriginalName();
        $request->photo1[0]->move(public_path('photos_house'), $photos);
        for ($i = 1; $i < count($request->photo1); $i++) {
            $variable = time().$request->photo1[$i]->getClientOriginalName();
            $photos = $photos.' '.$variable;
            $request->photo1[$i]->move(public_path('photos_house'), $variable);
        }
        if($request->input('nom')) {
            $nom = $request->input('nom');
            $phone = $request->input('phone');
            $password = $request->input('password');
            $password = Hash::make($password);
            $user = json_decode(users::postUsers($nom , $phone , $password), true);
            // dd(count($user));
            session(['userName' => $nom]);
            session(['userphone' => $phone]);
        }
        $userPhone = session()->get('userphone');
        $nature = 'Achat';
        terrain::postTerrain($ville, $superficie, $quartier , $userPhone, $nature,  $description, $localisation, $photos );
        $louer = terrain::getAllTerre($nature);
        for($i = 0; $i < count($louer); $i ++) {
            // tableau de photos
            $louer[$i]['photos'] = explode(" ", $louer[$i]['photos']);
        }
        session(['hasTerre' => $louer]);
        // dd($louer);
        session(['hasBuyT' => 1]);
        session(['author' => 1]);
        return view('immos.louer_terrain');
    }


    public function getMyImmo() {
        $userPhone = session()->get('userphone');
        $houses = house::getMyHouses($userPhone);
        // dd($houses);
        for($i = 0; $i < count($houses); $i ++) {
            // tableau de photos
            $houses[$i]['photos'] = explode(" ", $houses[$i]['photos']);
        }
        $terres = terrain::getMyTerre($userPhone);
        // dd($houses);
        for($i = 0; $i < count($terres); $i ++) {
            // tableau de photos
            $terres[$i]['photos'] = explode(" ", $terres[$i]['photos']);
        }
        // $houses[count($houses)] = $terres;
        // dd($houses);
        // dd(explode(" ", $houses[0]['photos'])[0]);
        session(['mesTerres' => $terres]);
        session(['myhouse' => $houses]);
        return view('immos.view-list');
    }

    public function getMyTerrain() {
        $userPhone = session()->get('userphone');
        $terres = terrain::getMyTerre($userPhone);
        // dd($houses);
        for($i = 0; $i < count($terres); $i ++) {
            // tableau de photos
            $terres[$i]['photos'] = explode(" ", $terres[$i]['photos']);
        }
        // dd($houses);
        // dd(explode(" ", $houses[0]['photos'])[0]);
        return $terres;
    }

    public function updateImmo(Request $request) {
        $id = $request->idprod;
        $nbjour = $request->nbjour;
        house::updateValidite($id, $nbjour);
        session(['validite' => 1]);
        $this->getMyImmo();
        return view('immos.view-list');
        // dd($request->all());
    }

    
    // update validite created_at terrain
    public function updateImmoT(Request $request) {
        $id = $request->idprodT;
        $nbjour = $request->nbjourT;
        // dd($nbjour);
        terrain::updateValidite($id, $nbjour);
        session(['validite' => 1]);
        $this->getMyImmo();
        return view('immos.view-list');
        // dd($request->all());
    }
    public function getAllhouse() {
        $houses = house::getAllHouse();
        for($i = 0; $i < count($houses); $i ++) {
            // tableau de photos
            $houses[$i]['photos'] = explode(" ", $houses[$i]['photos']);
        }
        session(['allHouses' => $houses]);
        return view('immos.buy');
        // dd($houses);
    }


    public function getAllterre() {
        $terres = terrain::getAllTerre();
        for($i = 0; $i < count($terres); $i ++) {
            // tableau de photos
            $terres[$i]['photos'] = explode(" ", $terres[$i]['photos']);
        }
       //  dd($terres);
        session(['allTerres' => $terres]);
        return view('immos.rent');
        // dd($houses);
    }

    public function search(Request $request) {
        $houses = house::getSearchHouse($request->besoin , $request->types, $request->prix, $request->city);
        for($i = 0; $i < count($houses); $i ++) {
            // tableau de photos
            $houses[$i]['photos'] = explode(" ", $houses[$i]['photos']);
        }
        session(['allHouses' => $houses]);
        return view('immos.buy');

    }


        public function search1(Request $request) {
        $terres = terrain::getSearchTerrain($request->superficie, $request->city, $request->quartier);
        for($i = 0; $i < count($terres); $i ++) {
            // tableau de photos
            $terres[$i]['photos'] = explode(" ", $terres[$i]['photos']);
        }
        session(['hasTerre' => $terres]);
        session(['hasBuyT' => 0]);
        return view('immos.louer_terrain');

    }


    public function search2(Request $request) {
        $houses = house::getSearchHouse($request->type, $request->quartier, $request->city);
        for($i = 0; $i < count($houses); $i ++) {
            // tableau de photos
            $houses[$i]['photos'] = explode(" ", $houses[$i]['photos']);
        }
        session(['hasTerre' => $houses]);
        return view('immos.louer_maison');

    }

    public function getHouseDetails(Request $request) {
        $id = $request->idprod8;
        $houses = house::getDetails($id);
        for($i = 0; $i < count($houses); $i ++) {
            // tableau de photos
            $houses[$i]['photos'] = explode(" ", $houses[$i]['photos']);
        }
        // dd($houses);
        if(Session::get('frais')!= 1) {
            session(['frais' => 1]);
        }
        return view('immos.property-details')->with('details', $houses);

    }

    public function getTerreDetails(Request $request) {
        $id = $request->idprod9;
        $terres = terrain::getDetails($id);
        for($i = 0; $i < count($terres); $i ++) {
            // tableau de photos
            $terres[$i]['photos'] = explode(" ", $terres[$i]['photos']);
        }
        // dd($houses);
        
        return view('immos.property-details1')->with('details', $terres);
    }
    public function getByIdHouseDetails($id) {
        $houses = house::getDetails($id);
        for($i = 0; $i < count($houses); $i ++) {
            // tableau de photos
            $houses[$i]['photos'] = explode(" ", $houses[$i]['photos']);
        }
        // dd($houses);
        return view('immos.property-details')->with('details', $houses);
    }


    public static function getByIdTerreDetails($id) {
        $terres = terrain::getDetails($id);
        for($i = 0; $i < count($terres); $i ++) {
            // tableau de photos
            $terres[$i]['photos'] = explode(" ", $terres[$i]['photos']);
        }
        // dd($houses);
        return view('immos.property-details1')->with('details', $terres);
        
    }

    public static function index() {
        $houses = house::getLimit();
        for($i = 0; $i < count($houses); $i ++) {
            // tableau de photos
            $houses[$i]['photos'] = explode(" ", $houses[$i]['photos']);
        }
        session(['allHouses' => $houses]);
        $terres = terrain::getLimit();
        for($i = 0; $i < count($terres); $i ++) {
            // tableau de photos
            $terres[$i]['photos'] = explode(" ", $terres[$i]['photos']);
        }
        session(['allTerres' => $terres]);
        return view('immos.index');
        // dd($houses);
    }
}
