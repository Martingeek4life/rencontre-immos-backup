<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immobiliers;
use App\technicien;
use App\messages;

class immoController extends Controller
{
    // Immo controller logic



    public static function updateImmo(Request $request) {
        // dd($request->photo1);
        $ville = $request->ville;
        $quartier = $request->quartier;
        $description = $request->description;
        $superficie = $request->superficie;
        $nom = $request->nom;
        $prenom = $request->prenom;
        $phone = $request->phone;
        $objet = $request->objet;
        $type = $request->type;
        $prix = $request->prix;
        $localisation = $request->pays;
        $rue = $request->rue;
        $password = $request->passe;
        $email = $request->email;
    
        $id = session()->get('idPub'); 
        $immo = Immobiliers::updateImmo($id, $ville , $quartier ,$nom,  $prenom, $phone , $superficie , $type, $objet, $description , $prix, $localisation, $rue, $password, $email);
        // dd($immo);
        return view('rencontreImmo.notification-message.updateimmo')->with('details', $immo);
        }
    
    public static function registerImmo(Request $request) {
    // dd($request->photo1);
    $ville = $request->ville;
    $quartier = $request->quartier;
    $description = $request->description;
    $superficie = $request->superficie;
    $nom = $request->nom;
    $prenom = $request->prenom;
    $phone = $request->phone;
    $objet = $request->objet;
    $type = $request->type;
    $prix = $request->prix;
    $localisation = $request->pays;
    $rue = $request->rue.' ';
    $password = $request->passe;


    // upload houses photos
    $photos = time().$request->photo[0]->getClientOriginalName();
    $request->photo[0]->move(public_path('photos_house'), $photos);
    for ($i = 1; $i < count($request->photo); $i++) {
        $variable = time().$request->photo[$i]->getClientOriginalName();
        $photos = $photos.' '.$variable;
        $request->photo[$i]->move(public_path('photos_house'), $variable);
    }
    $video = time().$request->video->getClientOriginalName();
    $request->video->move(public_path('photos_house'), $video);
    $immo = Immobiliers::postImmo($ville , $quartier ,$nom,  $prenom, $phone , $superficie , $type, $objet, $description , $prix,$photos, $localisation, $rue, $video, $password, $request->email);
    $tech = Immobiliers::getDetails($immo['id']);
    for($i = 0; $i < count($tech); $i ++) {
        // tableau de photos
        $tech[$i]['photos'] = explode(" ", $tech[$i]['photos']);
    }
    // dd($tech);
    session(['initial' => 0]);
    return view('rencontreImmo.notification-message.publicSuccessImmo')->with('details', $tech);
    
	}



    public static function registerTech(Request $request) {
    // dd($request->photo1);
    $ville = $request->ville;
    $description = $request->description;
    $profession = $request->type;
    $nom = $request->nom;
    $prenom = $request->prenom;
    $quartier = $request->quartier;
    $telephone = $request->phone;
    $localisation = $request->pays;
    $rue = $request->rue;
    $password = $request->passe;
    // dd($password);

    // upload houses photos
    $photos = time().$request->photo[0]->getClientOriginalName();
    $request->photo[0]->move(public_path('photos_house'), $photos);
    for ($i = 1; $i < count($request->photo); $i++) {
        $variable = time().$request->photo[$i]->getClientOriginalName();
        $photos = $photos.' '.$variable;
        $request->photo[$i]->move(public_path('photos_house'), $variable);
    }
    $video = time().$request->video->getClientOriginalName();
    $request->video->move(public_path('photos_house'), $video);
    $immo = technicien::postTech($ville ,$quartier, $rue, $nom,  $prenom, $telephone , $profession, $description, $photos, $localisation, $video, $password, $request->email);
    $tech = technicien::getDetails($immo['id']);
    for($i = 0; $i < count($tech); $i ++) {
        // tableau de photos
        $tech[$i]['photos'] = explode(" ", $tech[$i]['photos']);
    }
    // dd($tech);
    session(['initial' => 0]);
    return view('rencontreImmo.notification-message.publishsuccesstech')->with('details', $tech);
    
    }


    public static function getRentImmo(){
        $buyImmo = Immobiliers::getRentImmo();
        // dd()
        session(['initial'=> 0]);
        session()->forget('notInitial');
        $pays = Immobiliers::getPays();
        for($i = 0; $i < count($pays); $i ++) {
            // tableau de photos
            $pays[$i] = $pays[$i]['localisation'];
        }
    
        $ville = Immobiliers::getVille();
        for($i = 0; $i < count($ville); $i ++) {
            // tableau de photos
            $ville[$i] = $ville[$i]['ville'];
        }
    
        $quartier = Immobiliers::getQuartier();
        for($i = 0; $i < count($quartier); $i ++) {
            // tableau de photos
            $quartier[$i] = $quartier[$i]['quartier'];
        }
    
    
        $rue = Immobiliers::getRue();
        for($i = 0; $i < count($rue); $i ++) {
            // tableau de photos
            $rue[$i] = $rue[$i]['rue'];
        }
    
        // dd($pays);
        session(['pays' => $pays]);
        session(['ville' => $ville]);
        session(['quartier' => $quartier]);
        session(['rue' => $rue]);
        session(['rue' => $rue]);
        session(['hasBuyImmo' => $buyImmo]);
        return view('rencontreImmo.Vente.immolouer');
    }

    public static function getBuyImmo(){
    $buyImmo = Immobiliers::getBuyImmo();
    // dd()
    session(['initial'=> 0]);
    session()->forget('notInitial');
    $pays = Immobiliers::getPays();
    for($i = 0; $i < count($pays); $i ++) {
        // tableau de photos
        $pays[$i] = $pays[$i]['localisation'];
    }

    $ville = Immobiliers::getVille();
    for($i = 0; $i < count($ville); $i ++) {
        // tableau de photos
        $ville[$i] = $ville[$i]['ville'];
    }

    $quartier = Immobiliers::getQuartier();
    for($i = 0; $i < count($quartier); $i ++) {
        // tableau de photos
        $quartier[$i] = $quartier[$i]['quartier'];
    }


    $rue = Immobiliers::getRue();
    for($i = 0; $i < count($rue); $i ++) {
        // tableau de photos
        $rue[$i] = $rue[$i]['rue'];
    }

    // dd($pays);
    session(['pays' => $pays]);
    session(['ville' => $ville]);
    session(['quartier' => $quartier]);
    session(['rue' => $rue]);
    session(['rue' => $rue]);
    session(['hasBuyImmo' => $buyImmo]);
    return view('rencontreImmo.Vente.immobiliers');
}
    public static function login(Request $request) {
        $login = $request->login;
        session(['phone' => $login]);
        $password = $request->password;
        // dd($password);
        $immoUser = Immobiliers::getInfoByPhone($login, $password);
        // dd($immoUser);
        $techUser = technicien::getInfoByPhone($login, $password);

        
        if((count($immoUser)) >= 1) {
            session(['nom' => $immoUser[0]['nom']]);
        }
        if((count($techUser)) >= 1) {
            session(['nom' => $techUser[0]['nom']]);
        }
        if( (count($immoUser)) >= 1 || ( count($techUser)) >= 1 ) {
            $myMessages = messages::getMessage($login);
            for($j = 0; $j < count($myMessages); $j ++) {
                if( $myMessages[$j]['etat'] == 0) {
                    // dd($myMessages[$j]['etat']);
                    session(['new' => 1]);
                    

                }
                
            }
            session(['messages' => $myMessages]);
            
            return view('rencontreImmo.letters.letters');
        } else {
            return view('rencontreImmo.notification-message.failed');
        }
    }
public static function getPub() {
    $login = session()->get('phone'); 
    $tech = Immobiliers::getPub($login);
    $techs = technicien::getPubservice($login);

    for($i = 0; $i < count($techs); $i ++) {
        // tableau de photos
        $techs[$i]['photos'] = explode(" ", $techs[$i]['photos']);
    
        }
    for($i = 0; $i < count($tech); $i ++) {
    // tableau de photos
    $tech[$i]['photos'] = explode(" ", $tech[$i]['photos']);

    }
    // dd($login);
    session(['hasBuyImmo' => $tech]);
    session(['hasBuyImmot' => $techs]);
    session()->forget('initial'); 
    session(['notInitial'=> 0]);
    return view('rencontreImmo.Vente.mesPub');
}

public static function getCompta() {
    $read = messages::getMessageRead();
    $unRead = messages::getMessageUnRead();
    session(['read' => $read]);
    session(['unRead' => $unRead]);
    return view('rencontreImmo.admin.compta');
}

    public static function getMessage($type) {
        $myMessages = messages::getMessageAll();
        $louer = [];
        $achat = [];
        $services = [];
        if($type == 'achat') {
            for($i = 0; $i < count($myMessages); $i ++) {
                $immo = Immobiliers::getDetails($myMessages[$i]['idService']);
                // dd($immo);
                if( (count($immo)) >= 1 && ($immo[0]['objet'] == 'pour vente')) {
                    $achat[$i] = $myMessages[$i];
                }
            }
            session(['messages' => $achat]);
        }

        if($type == 'louer') {
            for($i = 0; $i < count($myMessages); $i ++) {
                $immo = Immobiliers::getDetails($myMessages[$i]['idService']);
                if( (count($immo)) >= 1 && ($immo[0]['objet'] == 'pour location')) {
                    $louer[$i] = $myMessages[$i];
                }
            }
            session(['messages' => $louer]);
        }

        if($type == 'services') {
            $cpt = 0;
            for($j = 0; $j < count($myMessages); $j ++) {
                // dd($myMessages[$j]['idService']);
                $tech = technicien::getDetails($myMessages[$j]['idService']);
                if( count($tech) == 1) {
                    $cpt = $cpt + 1;
                    $services[$j] = $myMessages[$j];

                }
                

            }
            session(['messages' => $services]);
        }
        // dd($services);

        return view('rencontreImmo.admin.admin');
    }

    public static function getMessageById($id) {
        $message = messages::getDetails($id);
        // dd($message);
        $update = messages::updateEtat($id);
        session(['detailsMessage' => $message]);
        return redirect('letters');
    }

    public static function getMessageByIdAdmin($id) {
        $message = messages::getDetails($id);
        // dd($message);
        // $update = messages::updateEtat($id);
        session(['detailsMessage' => $message]);
        return redirect('letters');
    }

    public static function getTech() {
        $buyImmo = technicien::getTech();
        // dd()
        session(['initial'=> 0]);
        session()->forget('notInitial');
        $pays = technicien::getPays();
        for($i = 0; $i < count($pays); $i ++) {
            // tableau de photos
            $pays[$i] = $pays[$i]['localisation'];
        }

        $ville = technicien::getVille();
        for($i = 0; $i < count($ville); $i ++) {
            // tableau de photos
            $ville[$i] = $ville[$i]['ville'];
        }

        $quartier = technicien::getQuartier();
        for($i = 0; $i < count($quartier); $i ++) {
            // tableau de photos
            $quartier[$i] = $quartier[$i]['quartier'];
        }


        $rue = technicien::getRue();
        for($i = 0; $i < count($rue); $i ++) {
            // tableau de photos
            $rue[$i] = $rue[$i]['rue'];
        }
        $profession = technicien::getProfession();
        for($i = 0; $i < count($profession); $i ++) {
            // tableau de photos
            $profession[$i] = $profession[$i]['profession'];
        }
        // dd($pays);
        session(['type' => $profession]);
        session(['pays' => $pays]);
        session(['ville' => $ville]);
        session(['quartier' => $quartier]);
        session(['rue' => $rue]);
        session(['rue' => $rue]);
        session(['techs' => $buyImmo]);
        return view('rencontreImmo.Vente.tech');
    }

    public static function sendMessage(Request $request) {
        $idService = $request->session()->get('idService');
        $phoneService = $request->session()->get('phoneService');
        // dd($phoneService);
        $message = messages::postMessage($idService, $phoneService, $request->phone, $request->message, $request->nom, $request->profession);
        return view('rencontreImmo.notification-message.publishSuccess');
    }

    public function searchTech(Request $request) {
            
    		$tech = technicien::Search($request->type, $request->pays, $request->ville, $request->quartier, $request->rue);
            // dd($request->type);
            for($i = 0; $i < count($tech); $i ++) {
            // tableau de photos
            $tech[$i]['photos'] = explode(" ", $tech[$i]['photos']);

        	}
            
            session(['techs' => $tech]);
            // dd(session()->get('techs'));
            session()->forget('initial'); 
            session(['notInitial'=> 0]);
        	return view('rencontreImmo.Vente.tech');
    	    

    }

    public function search1BuyImmo(Request $request) {

        $tech = Immobiliers::Search($request->type, $request->pays, $request->ville, $request->quartier, $request->rue);
        for($i = 0; $i < count($tech); $i ++) {
        // tableau de photos
        $tech[$i]['photos'] = explode(" ", $tech[$i]['photos']);

        }
    // dd($buyImmo);
        session(['hasBuyImmo' => $tech]);
        session()->forget('initial'); 
        session(['notInitial'=> 0]);
        return view('rencontreImmo.Vente.immobiliers');
        

}

public function search1LImmo(Request $request) {

    $tech = Immobiliers::SearchL($request->type, $request->pays, $request->ville, $request->quartier, $request->rue);
    for($i = 0; $i < count($tech); $i ++) {
    // tableau de photos
    $tech[$i]['photos'] = explode(" ", $tech[$i]['photos']);

    }
// dd($buyImmo);
    session(['hasBuyImmo' => $tech]);
    session()->forget('initial'); 
    session(['notInitial'=> 0]);
    return view('rencontreImmo.Vente.immolouer');
    

}
public function getImmoById($id) {
    $immo = Immobiliers::getDetails($id);
    for($i = 0; $i < count($immo); $i ++) {
        // tableau de photos
        $immo[$i]['photos'] = explode(" ", $immo[$i]['photos']);
    }
    // dd($immo);
    session(['idService'=> $id]);
    session(['phoneService'=> $immo[0]['phone']]);
    session(['pub'=> $immo]);
    session(['idPub'=> $id]);
    return view('rencontreImmo.details.immoDetails')->with('details', $immo);
    }

    public function getImmoByIdm($id) {
    $immo = Immobiliers::getDetails($id);
    for($i = 0; $i < count($immo); $i ++) {
        // tableau de photos
        $immo[$i]['photos'] = explode(" ", $immo[$i]['photos']);
    }
    // dd($immo);
    session(['idService'=> $id]);
    session(['phoneService'=> $immo[0]['phone']]);
    session(['pub'=> $immo]);
    session(['idPub'=> $id]);
    return view('rencontreImmo.formulaire.vendreImmom');
    }
    
    public function getImmoByIdmt($id) {
        $immo = technicien::getDetails($id);
        for($i = 0; $i < count($immo); $i ++) {
            // tableau de photos
            $immo[$i]['photos'] = explode(" ", $immo[$i]['photos']);
        }
        // dd($immo);
        session(['idService'=> $id]);
        session(['phoneService'=> $immo[0]['telephone']]);
        session(['pub'=> $immo]);
        session(['idPub'=> $id]);
        return view('rencontreImmo.formulaire.vendreImmomt');
        }    


    public function getImmo1ById($id) {
    $immo = Immobiliers::getDetails($id);
    for($i = 0; $i < count($immo); $i ++) {
        // tableau de photos
        $immo[$i]['photos'] = explode(" ", $immo[$i]['photo']);
    }
    // dd($immo);
    return view('rencontreImmo.details.detailslouer')->with('details', $immo);
    }

    public function gettechById($id) {
    $immo = technicien::getDetails($id);
    for($i = 0; $i < count($immo); $i ++) {
        // tableau de photos
        $immo[$i]['photos'] = explode(" ", $immo[$i]['photos']);
    }
    // dd($immo);
    session(['idService'=> $id]);
    session(['phoneService'=> $immo[0]['telephone']]);

    return view('rencontreImmo.details.tech-détails')->with('details', $immo);
    }


}
