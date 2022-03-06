<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/logo_immos.png" type="image/png">
        <title>Rencontre-immo-services</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/breadcrumb.css">
        <link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
        <style>
#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    border-radius: 10px
}
a, a:hover{
  color:#333
}

#register {
    color: #6A1B9A
}

h1 {
    text-align: center
}
.input-group-addon {
    padding: .5rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.25;
    color: 
#495057;
text-align: center;
background-color:
#e9ecef;
border: 1px solid
    rgba(0,0,0,.15);
        border-left-color: rgba(0, 0, 0, 0.15);
        border-left-style: solid;
        border-left-width: 1px;
    border-radius: .25rem;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
}
input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    border-radius: 10px;
    -webkit-appearance: none
}

.tab input:focus {
    border: 1px solid #6a1b9a !important;
    outline: none
}

input.invalid {
    border: 1px solid #e03a0666
}


button {
    background-color: #6A1B9A;
    color: #ffffff;
    border: none;
    border-radius: 50%;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}

button:hover {
    opacity: 0.8
}

button:focus {
    outline: none !important
}

#prevBtn {
    background-color: #bbbbbb
}

.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center
}

.step {
    height: 40px;
    width: 40px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    color: #6a1b9a;
    opacity: 0.5
}

.step.active {
    opacity: 1
}

.step.finish {
    color: #fff;
    background: #6a1b9a;
    opacity: 1
}

.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}

.thanks-message {
    display: none
}  
        
        </style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area" style="background: url(/immos/public/img/banner/banner.jpg);">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">
           				<div class="float-left">
           					<a href="#">Visitez nous</a>
           					<a href="#">Support</a>
           				</div>
           				<div class="float-right">
           					<ul class="list header_socila">
           						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
           						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
           						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
           						<li><a href="#"><i class="fa fa-behance"></i></a></li>
           					</ul>
           				</div>
           			</div>
           		</div>
           	</div>
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="accueil"><img src="img/logo_immos.png" alt="" style="width: 200px;"><img src="img/logo_immos.png" alt="" style="width: 200px;"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="{{route('accueil')}}">Accueil</a></li>
								<!-- <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="projects.html">Project</a></li>
										<li class="nav-item"><a class="nav-link" href="project-details.html">Project Details</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								-->
								<li class="nav-item"><a class="nav-link" href="contact.html">Contactez-nous</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
	 	<br><br><br><br><br>

<form method= "post" action= "{{ route('addtech') }}" enctype="multipart/form-data">
@csrf
<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <form id="regForm">
            @csrf
                <h1 id="register">Faites vous connaitre </h1>
                <!-- <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i class="fa fa-shopping-bag"></i></span> <span class="step"><i class="fa fa-car"></i></span> <span class="step"><i class="fa fa-spotify"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> </div> -->
                <div class="tab">
                    <h4>Entrez votre nom</h4>
                    <p> <input placeholder="Votre Nom..." oninput="this.className = ''" name="nom" required id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez votre prenom</h4>
                    <p><input placeholder="Votre prenom" oninput="this.className = ''" name="prenom" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez votre Pays</h4>
                    <p><input placeholder="Votre Pays" oninput="this.className = ''" name="pays" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                
                <div class="tab">
                    <h4>Entrez votre ville</h4>
                    <p><input placeholder="Votre ville" oninput="this.className = ''" name="ville" required id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez votre Quartier</h4>
                    <p><input placeholder="Votre quartier" oninput="this.className = ''" name="quartier" required id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez votre Rue</h4>
                    <p><input placeholder="Votre Rue" oninput="this.className = ''" name="rue" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez votre telephone</h4>
                    <p><input type= "number" placeholder="Votre telephone" oninput="this.className = ''" name="phone" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez votre e-mail</h4>
                    <p><input placeholder="Votre e-mail" oninput="this.className = ''" name="email" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez le Service/Profession/Busines proposé</h4>
                    <p>
                    <select class="form-control" id="typeselect" name="type" style="display: block; background: white;" required>>
                        <optgroup label="Automobile/Vehicules legers">
                        <option value="Achat/vente voiture voiture Hyundai">Vente voiture Hyundai</option>
                          <option value="Achat/vente voiture Toyota">Vente voiture Toyota</option>
                          <option value="Achat/vente voiture Peugeot">Vente voiture Peugeot</option>
                          <option value="Achat/vente voiture Mercedes">Vente voiture Mercedes</option>
                          <option value="Achat/vente voiture Volswagen">Vente voiture Volswagen</option>
                          <option value="Achat/vente voiture Ausdi">Vente voiture Audi</option>
                          <option value="Achat/vente voiture BMWVehicules">Vente voiture BMW</option>
                          <option value="Achat/vente voiture Mitsubishi">Vente voiture Mitsubishi</option>
                          <option value="Achat/vente voiture Range">Vente voiture Range</option>
                          </optgroup>
                          <optgroup label="Automobile/Vehicules legers">
                        <option value=" location voiture  Hyundai">location voiture Hyundai</option>
                          <option value="location voiture Toyota">location voiture Toyota</option>
                          <option value="location voiture Peugeot">location voiture Peugeot</option>
                          <option value="location voiture  Mercedes">location voiture Mercedes</option>
                          <option value="location voiture Volswagen">location voiture Volswagen</option>
                          <option value="location voiture Ausdi">location voiture Audi</option>
                          <option value="location voiture BMW">location voiture BMW</option>
                          <option value="location voiture Mitsubishi">location voiture Mitsubishi</option>
                          <option value="location voiture Range">location voiture Range</option>
                          </optgroup>
                          <optgroup label="Agriculture">
                          <option value="Ingenieur de conception-Agriculture">Ingenieur Agricole</option>
                          <option value="Technicien-Agriculture">Technicien d'agriculture</option>
                          <option value="Ouvrier-agricole">Ouvrier agricole</option>
                          <option value="Planteur-agricole">Planteur</option>
                          <option value="Vendeur-agricole">Vendeur de produit agricole</option>
                          <option value="exportateur-agricole">exportateur produit agricole</option>
                          <option value="importateur-agricole">importateur produit agricole</option>
                          <option value="machiniste-agriculture">Manichiste agricole</option>
                          <option value="Conducteur de Tracteurs-agriculture">Conducteur de Tracteurs agricole</option>
                          <option value="Tracteurs-agriculture">Tracteurs agricole</option>
                        </optgroup>
                        <optgroup label="Art-Artisanat">
                          <option value="vendeur-Art-Artisanat">vendeur Art-Artisanat</option>
                          <option value="ArtisanArt-Artisanat">Artisan</option>
                          <option value="SérigrapheArt-Artisanat">Sérigraphe</option>
                          <option value="SculpteurArt-Artisanat">Sculpteur</option>
                        </optgroup>
                        <optgroup label="Audio-visuel">
                          <option value="IngenieurAudio-visuel">Ingenieur Audio-visuel</option>
                          <option value="technicienAudio-visuel">technicien Audio-visuel</option>
                          <option value="CameramanArtAudio-visuel">Cameraman Audio-visuel</option>
                          <option value="AnimateurArtAudio-visuel">Animateur Audio-visuel</option>
                        </optgroup>
                        <optgroup label="Aéronautique">
                          <option value="IngenieurAéronautique">Ingenieur Aéronautique</option>
                          <option value="technicienAéronautique">technicien Aéronautique</option>
                          <option value="MéchanicienAéronautique">Méchanicien Aéronautique</option>
                          
                        </optgroup>
                        <option value="Ecoiffure">coiffeuse</option>
                        <optgroup label="Communication">
                          <option value="Journaliste">Journaliste</option>
                          <option value="Publicité">Publicité</option>
                          <option value="Télévision">Télévision</option>
                          <option value="Radio">Radio</option>
                        </optgroup>
                        <optgroup label="Comptabilité">
                          <option value="expert-Comptabilité">Expert comptable</option>
                          <option value="Comptable">Comptable</option>
                          <option value="Enseignant-Comptabilité">Enseignant Comptabilité</option>
                        </optgroup>
                        <optgroup label="Commerce">
                        <option value="super-marché">super-marché</option>
                          <option value="Magasin">Magasin</option>
                          <option value="Boutique">Boutique</option>
                          <option value="Boulangerie">Boulangerie</option>
                          <option value="Alimentation">Alimentation</option>
                          <option value="quincallerie">quincallerie</option>
                          <option value="Pressing">Pressing</option>
                          <option value="Librairie">Librairie</option>
                        </optgroup>
                        <optgroup label="Droit-justice">
                          <option value="Magistrat Droit-justice">Magistrat</option>
                          <option value="Avocat Droit-justice">Avocat</option>
                          <option value="Notaire Droit-justice">Notaire</option>
                          <option value="HuissierDroit-justice">Huissier</option>
                        </optgroup>
                        <optgroup label="finance">
                          <option value="Banquefinance">Banque</option>
                          <option value="Micro-finance">Micro-finance</option>
                        </optgroup>
                        <optgroup label="Gardienage">
                          <option value="Chiens de garde">Chiens de garde</option>
                          <option value="Gardien">Gardien</option>
                          <option value="société de gardienage">société de gardienage</option>
                        </optgroup>
                          <optgroup label="Génie Civil">
                          <option value="Ingenieur de conception genie civil">Ingenieur de conception genie civil</option>
                          <option value="Ingenieur de travaux genie civil">Ingenieur de travaux genie civil</option>
                          <option value="Technicien Superieur genie civil">Technicien Superieur genie civil</option>
                          <option value="Maçon">Maçon</option>
                          <option value="Maçon Moéllons">Maçonerie Moéllons</option>
                          <option value="Carrière Agrégat">Carrière Agrégat</option>
                          <option value="Bétonière">Bétonière</option>
                          <option value="compacteur">compacteur</option>
                          <option value="camion">camion</option>
                          <option value="Engin">Engin</option>
                          <option value="Vibreur">Vibreur</option>
                          <option value="Menuserie Bois">Menuserie Bois</option>
                          <option value="Menuserie Métallique">Menuserie Métallique</option>
                          <option value="Menuserie Alluminium">Menuserie Alluminium</option>
                          <option value="carreleur">carreleur</option>
                          <option value="menusier bois">menusier bois</option>
                          <option value="menusier allu">menusier alu</option>
                          <option value="Architecte">Architecte genie civil</option>
                          <option value="charpentier">charpentier</option>
                          <option value="Enseignant genie civil">Enseignant genie civil</option>
                          <option value="Soudeur genie civil">Soudeur</option>
                          <option value="Manoeuvre genie civil">Manoeuvre genie civil</option>
                          <option value="Peintre genie civil">Peintre</option>
                          <option value="Déssinateur genie civil">Déssinateur genie civil</option>
                        </optgroup>

                        <optgroup label="Informatique">
                          <option value="Ingenieur de conception-informatique">Ingenieur de conception Informatique</option>
                          <option value="Ingenieur de travaux">Ingenieur de travaux Informatique</option>
                          <option value="Architecte logiciel">Architecte logiciel</option>
                          <option value="Maintenancier">Maintenancier Informatique</option>
                          <option value="Enseignant-informatique">Enseignant Informatique</option>
                        </optgroup>
                        <optgroup label="Education">
                          <option value="Location voitures">Enseignant Mathematiques</option>
                          <option value="location des tentes, chaises">Enseignant Histoire & geographie</option>
                          <option value="services traiteur">Enseignant genie civil</option>
                          <option value="DJ et sonorisation">Enseignant svt</option>
                          <option value="chimie">Enseignant chimie</option>
                          <option value="Français">Enseignant Français</option>
                          <option value="Anglais">Enseignant Anglais</option>
                          <option value="Philosophie">Enseignant Philosophie</option>
                          <option value="Instituteur/Institutrice">Instituteur/Institutrice</option>
                        </optgroup>
                        <optgroup label="Evenementiels">
                          
                          <option value="location des tentes, chaises">location des tentes, chaises</option>
                          <option value="services traiteur">services traiteur</option>
                          <option value="DJ et sonorisation">DJ et sonorisation</option>
                          <option value="corbillards Funèbres">corbillards Funèbres</option>
                          <option value="Salles de fete">Salles de fete</option>
                        </optgroup>
      
                        <optgroup label="Electricité">
                        <option value="Ingenieur de conception-informatique-Electricité">Ingenieur de conception Electricité</option>
                          <option value="Ingenieur de travaux-Electricité">Ingenieur de travaux Electricité</option>
                          <option value="Maintenancier-Electricité">Maintenancier Electricité</option>
                          <option value="Groupe  électrogène">Groupe  électrogène</option>
                          <option value="Solaire">Instalation Energie Solaire</option>
                          <option value="Enseignant-informatique-Electricité">Enseignant Electricité</option>
                        </optgroup>
                        <option value="Femme de ménage">Femme de ménage</option>
                        <optgroup label="Restauration">
                        <option value="Hotelerie">Hotelerie</option>
                          <option value="Restaurant">Restaurant</option>
                          <option value="Bar">Bar</option>
                          <option value="Employé-resto">Employé</option>
                        </optgroup>
                        <option value="jardinier">jardinier</option>
                        <option value="Esthétique-beauté-coiffure">Esthétique-beauté-coiffure</option>
                        <optgroup label="Mécanique">
                        <option value="Ingenieur Conception-Mécanique">Ingenieur Conception Mécanique</option>
                        <option value="Ingenieur travaux-Mécanique">Ingenieur travaux Mécanique</option>
                          <option value="Technicien-Mécanique">Technicien Mécanique</option>
                          <option value="Enseignant-Mécanique">Enseignant Mécanique</option>
                          <option value="Electricien-Mécanique">Electricien Mécanique</option>
                          <option value="Tolier-Mécanique">Tolier Mécanique</option>
                          <option value="Mécanicien-mecanique">Mécanicien Auto</option>
                          <option value="Garage Auto">Garage Auto</option>
                        </optgroup>
                        <option value="Laverie Auto">Laverie Auto</option>
                        <optgroup label="Médecine">
                        <option value="Medecin généraliste">Medecin généraliste</option>
                        <option value="Medecin specialiste">Medecin specialiste</option>
                          <option value="infirmier">infirmier</option>
                          <option value="clinique">clinique</option>
                          <option value="Dispensaire">Dispensaire</option>
                          <option value="Hopital">Hopital</option>
                          <option value="sage femme">sage femme</option>
                          <option value="Laborantain">Laborantain</option>
                          <option value="Technicien Radiologie">Technicien Radiologie</option>
                        </optgroup>
                        <optgroup label="Ressources Humaines">
                        <option value="Gestionnaire de ressources humaines">Gestionnaire de ressources humaines</option>
                        </optgroup>
                        <optgroup label="Sécrétariat">
                        <option value="Sécrétariat de direction">Sécrétariat de direction</option>
                        <option value="Sécrétariat bureatique">Sécrétariat bureatique</option>
                        </optgroup>
                        <optgroup label="Transport Aérien">
                        <option value="CompagnieAérien">Compagnie Aérienne</option>
                        <option value="PiloteAérien">Pilote</option>
                        <option value="hotesse de l'airAérien">hotesse Transport Aérien</option>
                        <option value="Employé Aérien">Employé Transport Aérien</option>
                        </optgroup>
                        <optgroup label="Transport Terrestre">
                        <option value="féroviaire">transport féroviaire</option>
                        <option value="CompagnieTerrestreAgence de voyage">Agence de voyage</option>
                        <option value="Location voitures">Location voitures</option>
                        <option value="CompagniTransporteurse">Transporteurs</option>
                        <option value="Employé Chauffeur">Chauffeur</option>
                        <option value="hotesse terrestre">hotesse Transport Terrestre</option>
                        <option value="Taxi">Taxi</option>
                        <option value="camilloneur">camilloneur</option>
                        <option value="containeur">containeur</option>
                        </optgroup>
                        <option value="Vidange  fosses">Vidange  fosses</option>
                      </select>
                    </p>
                </div>
                <div class="tab">
                    <h4>Decrire le Service/Profession/Busines proposé</h4>
                    <p><textarea class="form-control" name="description" placeholder="Decrivez votre service/profession, experience etc ..." id="desc" onkeyup="onlyNumber();"> </textarea></p>
                </div>
                <div class="tab">
                    <h4>Entrez les photos de vos réalisations</h4>
                    <p><input type="file" placeholder="vos réalisations en photos" oninput="this.className = ''" max= "5" name="photo[]" accept="image/*" multiple required></p>
                </div>
                <div class="tab">
                    <h4>Entrez une vidéo de vos réalisations(la video doit avoir une taille de 2 mega)</h4>
                    <p><input type="file" max-size="2000" placeholder="vos réalisations en videos" oninput="this.className = ''"  name="video" accept="video/*" required></p>
                </div>
                <div class="tab">
                <h4>Entrez votre mot de passe</h4>
                  <div class="tab" id="show_hide_password">
                    <input class="form-control" type="password" name="passe" required>
                    <div class="input-group-addon">
                      <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div><br>
              <center>
              <button type="submit" class="btn btn-primary">Valider votre publication</button><br><br>
                <a href="accueil" class="btn btn-secondary">Annuler votre publication</a>
                
                <br><br><br>
              </center>
            </form>
        </div>
    </div>
</div>
</div>
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>

<script type="text/javascript">
$('#typeselect').editableSelect({ effects: 'default' });
$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
function onlyNumber()
{
    var champ=document.getElementById('desc');
    champ.value=champ.value.replace(/[^A-Za-z]/,' ');
}
</script>
    </body>
</html>
