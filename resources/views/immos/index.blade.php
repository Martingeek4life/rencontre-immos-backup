<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RencontreImmo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/mdb.min.css">
<!-- Plugin file -->
<link rel="stylesheet" href="./css/addons/datatables.min.css">
<link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.17.0/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">


  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


<!-- debut Modal form maison -->
<div class="modal fade" id="elegantModalFormM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>publiez votre maison A Louer</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method= "post" action= "{{ route('addMaison') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Ville</span>
  </div>
  <input type="text" class="form-control" name="ville" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <div class="input-group-prepend">
    <span class="input-group-text" name="quartier" id="inputGroup-sizing-sm">Quartier</span>
  </div>
  <input type="text" name="quartier" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>

<select id="type" name="type"class="browser-default custom-select" 
onchange="  if(document.getElementById('type').value == 'chambre') {
    // alert(document.getElementById('type').value);
    document.getElementById('salon').hidden= true;
    // document.getElementById('douche').disabled= true;
    document.getElementById('cuisine').hidden= true;
    // document.getElementById('chambre').disabled= true;
  } else {
    document.getElementById('salon').hidden= false;
    document.getElementById('douche').disabled= false;
    document.getElementById('cuisine').hidden= false;
    document.getElementById('chambre').disabled= false;
  }" 

>
  <option selected>type de maison</option>
  <option value="Immeuble">Immeuble</option>
  <option value="Appartement">Appartement</option>
  <option value="chambre">chambre</option>
</select>

<div class="md-form" id="salon">
  <input type="number" name="salon"  class="form-control">
  <label for="inputMDEx">nombre de salon(s)</label>
</div>
<div class="md-form" id="chambre">
  <input type="number" name="chambre"  class="form-control">
  <label for="inputMDEx">nombre de chambre(s)</label>
</div>
<div class="md-form" id="cuisine">
  <input type="number" name="cuisine"  class="form-control">
  <label for="inputMDEx">nombre de cuisine(s)</label>
</div>
<div class="md-form" id="douche">
  <input type="number" name="douche"  class="form-control">
  <label for="inputMDEx">nombre de douche(s)</label>
</div>

<!-- <div class="md-form">
  <input type="number" name="achat" id="inputMDEx" class="form-control">
  <label for="inputMDEx">prix d'achat</label>
</div> -->

<div class="custom-file">
  <input type="file" class="custom-file-input" accept="image/*" max= "5" name="photo[]" multiple id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">photos pour votre maison </label>
</div>
<br>
<div class="custom-file">
  <input type="file"  name="local" class="custom-file-input" max= "1" accept="application/pdf" multiple id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">plan de localisation </label>
</div>

<div  id="inf" hidden>
<span style="color:red">
Entrez vos informations personnelles
</span>
@if(! Session::has('nbconnected'))

  <input required type="text" placeholder="nom" name="nom" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
 
<br>
  <input required type="text" placeholder="votre telephone" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <br>
  <!-- <input required type="password" placeholder="mot de passe" class="form-control" name="password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-md">
 <br> -->
  </div>
  @endif
<div class="form-group purple-border">
  <textarea class="form-control" placeholder="breve description de votre maison" name="description" id="exampleFormControlTextarea4" rows="3"></textarea>
</div>
<div class="text-center mb-3">
<a   data-toggle="modal" id="suivant1" onclick="    document.getElementById('salon').hidden= false;
    document.getElementById('douche').hidden= true;
    document.getElementById('cuisine').hidden= true;
    document.getElementById('chambre').hidden= true;
    document.getElementById('salon').hidden= true;
    document.getElementById('type').hidden= true;
    document.getElementById('inf').hidden= false;
    document.getElementById('envoyer1').hidden= false;
    document.getElementById('suivant1').hidden= true;
    " class="btn btn-outline-primary waves-effect"> Suivant </a>
          <button type="submit" id="envoyer1" hidden class="btn blue-gradient btn-block btn-rounded z-depth-1a">envoyer</button>
        </div>

        </form>
      </div>
      
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>


<!-- debut Modal form maison -->
<div class="modal fade" id="elegantModalFormMv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>publiez votre maison A Vendre</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method= "post" action= "{{ route('addMaisonv') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Ville</span>
  </div>
  <input type="text" class="form-control" name="ville" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <div class="input-group-prepend">
    <span class="input-group-text" name="quartier" id="inputGroup-sizing-sm">Quartier</span>
  </div>
  <input type="text" name="quartier" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>

<select id="type" name="type"class="browser-default custom-select" 
onchange="  if(document.getElementById('type').value == 'chambre') {
    // alert(document.getElementById('type').value);
    document.getElementById('salon').hidden= true;
    // document.getElementById('douche').disabled= true;
    document.getElementById('cuisine').hidden= true;
    // document.getElementById('chambre').disabled= true;
  } else {
    document.getElementById('salon').hidden= false;
    document.getElementById('douche').disabled= false;
    document.getElementById('cuisine').hidden= false;
    document.getElementById('chambre').disabled= false;
  }" 

>
  <option selected>type de maison</option>
  <option value="Immeuble">Immeuble</option>
  <option value="Appartement">Appartement</option>
  <option value="chambre">chambre</option>
</select>

<div class="md-form" id="salon">
  <input type="number" name="salon"  class="form-control">
  <label for="inputMDEx">nombre de salon(s)</label>
</div>
<div class="md-form" id="chambre">
  <input type="number" name="chambre"  class="form-control">
  <label for="inputMDEx">nombre de chambre(s)</label>
</div>
<div class="md-form" id="cuisine">
  <input type="number" name="cuisine"  class="form-control">
  <label for="inputMDEx">nombre de cuisine(s)</label>
</div>
<div class="md-form" id="douche">
  <input type="number" name="douche"  class="form-control">
  <label for="inputMDEx">nombre de douche(s)</label>
</div>

<!-- <div class="md-form">
  <input type="number" name="achat" id="inputMDEx" class="form-control">
  <label for="inputMDEx">prix d'achat</label>
</div> -->

<div class="custom-file">
  <input type="file" class="custom-file-input" accept="image/*" max= "5" name="photo[]" multiple id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">photos pour votre maison </label>
</div>
<br>
<div class="custom-file">
  <input type="file"  name="local" class="custom-file-input" max= "1" accept="application/pdf" multiple id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">plan de localisation </label>
</div>

<div  id="inf" hidden>
<span style="color:red">
Entrez vos informations personnelles
</span>
@if(! Session::has('nbconnected'))

  <input required type="text" placeholder="nom" name="nom" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
 
<br>
  <input required type="text" placeholder="votre telephone" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <br>
  <!-- <input required type="password" placeholder="mot de passe" class="form-control" name="password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-md">
 <br> -->
  </div>
  @endif
<div class="form-group purple-border">
  <textarea class="form-control" placeholder="breve description de votre maison" name="description" id="exampleFormControlTextarea4" rows="3"></textarea>
</div>
<div class="text-center mb-3">
<a   data-toggle="modal" id="suivant1" onclick="    document.getElementById('salon').hidden= false;
    document.getElementById('douche').hidden= true;
    document.getElementById('cuisine').hidden= true;
    document.getElementById('chambre').hidden= true;
    document.getElementById('salon').hidden= true;
    document.getElementById('type').hidden= true;
    document.getElementById('inf').hidden= false;
    document.getElementById('envoyer1').hidden= false;
    document.getElementById('suivant1').hidden= true;
    " class="btn btn-outline-primary waves-effect"> Suivant </a>
          <button type="submit" id="envoyer1" hidden class="btn blue-gradient btn-block btn-rounded z-depth-1a">envoyer</button>
        </div>

        </form>
      </div>
      
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>


<!-- debut Modal form terrain -->
@if(! Session::has('nbconnected'))
<div class="modal fade" id="elegantModalFormT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>publiez votre Terrain A Louer</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method= "post" action= "{{ route('addTerrain') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Ville</span>
  </div>
  <input required type="text" class="form-control" name="ville1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">Quartier</span>
  </div>
  <input required type="text" name="quartier1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="md-form">
  <input type="number" name="superficie" id="inputMDEx" class="form-control">
  <label for="inputMDEx">Superficie(<var>m<sup>2</sup></var>)</label>
</div>

<div class="custom-file">
  <input required type="file" class="custom-file-input" accept="image/*" max= "5" name="photo1[]" multiple id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">photos de votre maison </label>
</div>
<br><br>
<div class="custom-file">
  <input required type="file" class="custom-file-input" max= "1" accept="application/pdf" multiple name="local" id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">plan de localisation </label>
</div>

<div class="form-group purple-border">
  <textarea class="form-control" name="description1" id="examplelegantModalFormMtrolTextarea4" rows="3"></textarea>
</div>
<div class="input-group input-group-sm mb-3">
@if(! Session::has('nbconnected'))
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">nom</span>
  </div>
  <input required type="text" class="form-control" name="nom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
 
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">téléphone</span>
  </div>
  <input required type="text" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  </div>
  <div class="input-group input-group-sm mb-3">
  
<div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">mot de passe</span>
  </div>
  <input required type="password" class="form-control" name="password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-md">
  
  @endif
  
</div>

<div class="text-center mb-3">
<button type="submit" id="envoyer" class="btn blue-gradient btn-block btn-rounded z-depth-1a">envoyer</button>
<!-- @else 
<a   data-toggle="modal" id="suivant" data-target="#elegantModalForm" class="btn btn-outline-primary waves-effect"> Suivant </a>
@endif -->
        </div>

        </form>
      </div>
      
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>


@if(! Session::has('nbconnected'))
<div class="modal fade" id="elegantModalFormTA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>publiez votre Terrain A Vendre</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method= "post" action= "{{ route('addTerrainV') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Ville</span>
  </div>
  <input required type="text" class="form-control" name="ville1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">Quartier</span>
  </div>
  <input required type="text" name="quartier1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>


<div class="md-form">
  <input type="number" name="superficie" id="inputMDEx" class="form-control">
  <label for="inputMDEx">Superficie(<var>m<sup>2</sup></var>)</label>
</div>

<div class="custom-file">
  <input required type="file" class="custom-file-input" accept="image/*" max= "5" name="photo1[]" multiple id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">photos de votre maison </label>
</div>
<br><br>
<div class="custom-file">
  <input required type="file" class="custom-file-input" max= "1" accept="application/pdf" multiple name="local" id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">plan de localisation </label>
</div>

<div class="form-group purple-border">
  <label for="exampleFormControlTextarea4">description de votre maison</label>
  <textarea class="form-control" name="description1" id="exampleFormControlTextarea4" rows="3"></textarea>
</div>
<div class="input-group input-group-sm mb-3">
@if(! Session::has('nbconnected'))
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">nom</span>
  </div>
  <input required type="text" class="form-control" name="nom" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
 
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">téléphone</span>
  </div>
  <input required type="text" name="phone" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  </div>
  <div class="input-group input-group-sm mb-3">
  
<div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">mot de passe</span>
  </div>
  <input required type="password" class="form-control" name="password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-md">
  
  @endif
  
</div>

<div class="text-center mb-3">
<button type="submit" id="envoyer" class="btn blue-gradient btn-block btn-rounded z-depth-1a">envoyer</button>
<!-- @else 
<a   data-toggle="modal" id="suivant" data-target="#elegantModalForm" class="btn btn-outline-primary waves-effect"> Suivant </a>
@endif -->
        </div>

        </form>
      </div>
      
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- fin Modal form terrain -->


 <!-- Central Modal Medium Info -->
 <div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-info" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">Infos pour commencer</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>vous bénéficiez de 6 immobiliers avec accès gratuit aux informations du propriétaire <br> et plan de localisation  .si vous voulez avoir accès à plus d'informations sur des centaines d'immobiliers alors premierement si vous n'etes pas encore inscrit,  inscivez-vous <br> si vous etes deja inscrit connectez vous et payez juste 100 fcfa par rubrique pour avoir accès à toutes les informations concernants des milliers d'immobiliers de nature à vendre ou à louer   </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
        <!--  <a type="button" class="btn btn-primary">Get it now <i class="far fa-gem ml-1 text-white"></i></a> -->
         <a  onclick="document.getElementById('search').scrollIntoView();  "class="btn btn-outline-primary waves-effect" data-dismiss="modal"> Ok </a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Info-->



    <!-- Central Modal Medium Info -->
    <div class="modal fade" id="centrabody2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notibodynfo" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">Que voulez-vous ?</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-footer justify-content-center">
       
        <!--  <a type="button" class="btn btn-primary">Get it now <i class="far fa-gem ml-1 text-white"></i></a> -->
        <a   data-toggle="modal" data-target="#elegantModalFormT" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Vous voulez faire louer un Terrain ? cliquez ici</a>
         <a   data-toggle="modal" data-target="#elegantModalFormTA" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Vous voulez vendre un Terrain ? cliquez ici</a>
         <a   data-toggle="modal" data-target="#elegantModalFormM" class="btn btn-outline-primary waves-effect" data-dismiss="modal"> Vous voulez faire louer une Maison ? cliquez ici</a>
         <a   data-toggle="modal" data-target="#elegantModalFormMv" class="btn btn-outline-primary waves-effect" data-dismiss="modal"> Vous etes vendeur de Maison ? cliquez ici</a>

       </div>
       <!--Footer-->
       <div class="modal-footer justify-content-center">
        <!--  <a type="button" class="btn btn-primary">Get it now <i class="far fa-gem ml-1 text-white"></i></a> -->
         <a   data-toggle="modal" data-target="#elegantModalFormT" class="btn btn-outline-primary waves-effect" data-dismiss="modal"> Vous voulez Acheter une Maison ? cliquez ici</a>
         <a   data-toggle="modal" data-target="#elegantModalFormT" class="btn btn-outline-primary waves-effect" data-dismiss="modal"> Vous voulez Louer une  Maison ? cliquez ici</a>
         <a   data-toggle="modal" data-target="#elegantModalFormT" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Vous voulez Acheter un Terrain ? cliquez ici</a>
         <a   data-toggle="modal" data-target="#elegantModalFormT" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Vous voulez Louer un Terrain ? cliquez ici</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Info-->


<!-- debut Modal login-->
<div class="modal fade" id="elegantModalForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Connectez-vous</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method= "get" action= "{{ route('login') }}">
         
        <div class="md-form mb-5">
          <input type="text"  name= "telLogin" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Téléphone</label>
        </div>

        <div class="md-form pb-3">
          <input type="password"  name="passLogin" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-pass1">Mot de passe</label>
<!--           <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">
              Password?</a></p> -->
        </div>

        <div class="text-center mb-3">
          <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">envoyer</button>
        </div>
        </form>
<!--         <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
          with:</p> -->

        <!-- <div class="row my-3 d-flex justify-content-center"> -->
          <!--Facebook-->
          <!-- <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button> -->
          <!--Twitter-->
          <!-- <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button> -->
          <!--Google +-->
          <!-- <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div> -->
      </div>
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- fin Modal login -->


<!-- debut Modal inscription-->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Inscrivez-vous</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method= "post" action= "{{ route('registration') }}">
        @csrf
        <div class="md-form mb-5">
          <input required type="text" id="Form-email1" name="nom" class="form-control validate">
          <label data-error="wrong" data-success="right"  for="Form-email1">votre nom</label>
        </div>

        <div class="md-form mb-5">
          <input required type="text" id="Form-email1" name="phone" class="form-control validate">
          <label data-error="wrong" data-success="right"  for="Form-email1">Téléphone</label>
        </div>

        <div class="md-form pb-3">
          <input required type="password" id="Form-pass1" name="password" class="form-control validate">
          <label data-error="wrong" data-success="right"  for="Form-pass1">Mot de passe</label>
<!--           <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">
              Password?</a></p> -->
        </div>

        <div class="text-center mb-3">
          <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">envoyer</button>
        </div>
<!--         <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
          with:</p> -->

        <!-- <div class="row my-3 d-flex justify-content-center"> -->
          <!--Facebook-->
          <!-- <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button> -->
          <!--Twitter-->
          <!-- <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button> -->
          <!--Google +-->
          <!-- <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div> -->
        </form>
      </div>
      
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- fin Modal inscription -->

    <div class="site-navbar mt-4" style="background: rgba(31, 60, 136, 0.9);">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="{{ route('racine') }}" class="text-white h2 mb-0"><strong>point de rencontre Immobilier<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="{{ route('racine') }}">Accueil</a>
                  </li>
<!--                <li><a href="buy.html">A Vendre</a></li>
                  <li><a href="rent.html">A louer</a></li> -->
                  <!-- <li class="has-children">
                    <a href="properties.html">Properties</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#">Condo</a></li>
                      <li><a href="#">Property Land</a></li>
                      <li><a href="#">Commercial Building</a></li>
                      <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li> -->
                  <!-- <li><a href="blog.html">Blog</a></li> -->
<!--                   @if(Session::has('nbconnected'))
                  <li><a href="{{ route('vendre') }}" >Maisons</a></li>
                  <li><a href="{{ route('louer') }}">Terrains</a></li>
                  <li><a href="{{ route('mes-immobiliers') }}">Mes Immobiliers</a></li>
                  @endif -->
                  @if(! Session::has('userInfo')) 
                  <li><a  data-toggle="modal"><strong>{{ Session::get('userInfo') }}</strong></a></li>
                  @endif
<!--                   @if(! Session::has('nbconnected'))
                  <li><a data-toggle="modal" data-target="#elegantModalForm1">Connectez-nous</a></li>
                  @endif -->
                  <li><a data-toggle="modal" data-target="#centrabody2">Que voulez-vous ?</a></li>
                </ul>
              </nav>
            </div>
            
@if(Session::has('userInfo') && ! Session::has('nbconnected'))        
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Salut Monsieur(Madame) {{ Session::get('userInfo') }}</strong> inscription effectuée avec succès !! veuillez vous connecter
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

            
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
    <div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row">
        <!-- <div class="container" id="fix"><center><a   onclick="activesubmit()"class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cliquez pour commencer </a></center></div> -->
        </div>
        </div>
        </div>





    </div>
      <div class="container"> 
      <?php foreach(Session::get('allHouses') as $key=>$value): ?>
        <!-- <div class="row mb-5"> -->
        <div class="row mb-4">
          <div class="col-md-12">
            <div class="property-entry horizontal d-lg-flex">

              <a  class="property-thumbnail h-100">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">{{ $value['nature'] }}</span>
                  
                </div>
                <img src="{{asset('photos_house/'.$value['photos'][0])}}" alt="Image" class="img-fluid">
              </a>

              <div class="p-4 property-body">
    
                <h2 class="property-title">{{ Session::get('userInfo') }}</h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{ $value['type'] }}</span>
                <span class="property-location d-block mb-3"><strong class="property-price text-primary mb-3 d-block text-success"> {{ $value['ville'] }} , {{ $value['quartier'] }}</strong></span>
                <!-- <strong class="property-price text-primary mb-3 d-block text-success">FCFA {{ $value['prix'] }}</strong> -->
      
                <p>{{ $value['description'] }}</p>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Salon(s)</span>
                    <span class="property-specs-number">{{ $value['salon'] }}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Douche(s)</span>
                    <span class="property-specs-number">{{ $value['douche'] }}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Cuisine(s)</span>
                    <span class="property-specs-number">{{ $value['cuisine'] }}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Chambre(s)</span>
                    <span class="property-specs-number">{{ $value['chambre'] }}</span>
                    
                  </li>
                </ul>
                <!-- <a    href="{{route('getById-house-détails', $value['id'])}}"   class="btn btn-outline-primary waves-effect">voir en details</a> -->
              </div>

            </div>
          </div>
          
        </div>
            <!-- </div> -->
            <?php endforeach; ?>
            
            <!-- </div> -->
            
            </div>
      
           <!-- mes terrains  -->

    <div class="site-section site-section-sm bg-light">
     <center><h1><strong>TERRAINS</strong></h1></center> 
      <div class="container">
      
      <?php foreach(Session::get('allTerres') as $key=>$value): ?>
      <div class="row mb-4">
          <div class="col-md-12">
            <div class="property-entry horizontal d-lg-flex">

              <a  class="property-thumbnail h-100">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">{{ $value['nature'] }}</span>
                  
                </div>
                <img src="{{asset('photos_house/'.$value['photos'][0])}}" alt="Image" class="img-fluid">
              </a>

              <div class="p-4 property-body">
    
                <h2 class="property-title">{{ Session::get('userInfo') }}</h2>
  
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{ $value['ville'] }} , {{ $value['quartier'] }}</span>
                <!-- <strong class="property-price text-primary mb-3 d-block text-success">FCFA {{ $value['prix'] }}</strong> -->
                <strong class="property-price text-primary mb-3 d-block text-danger">{{ $value['superficie'] }} <var>m<sup>2</sup></var></strong>
                <p>{{ $value['description'] }}</p>
                <!-- <a    href="{{route('getById-terre-détails', $value['id'])}}"   class="btn btn-outline-primary waves-effect">voir en details</a> -->
              </div>

            </div>
          </div>
          </div>
          <?php endforeach; ?>
          </div>
          
        </div>

    
    <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>ils nous ont fait confiance parmi tant d'autres</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum pariatur labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio minima quibusdam, laboriosam.</p> -->
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>sur point de rencontre immobilier j'ai trouvé ma maison de location actuelle </p>
<!--                 <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p> -->
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>j'effectue depuis 2 ans deja tous mes achats immobilier  sur point de rencontre immobilier</p>
                <p>
<!--                   <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a> -->
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>point de rencontre immobilier en dehors des achats et recherches des immobiliers à louer , c'est aussi une opprtunités de faire des rencontres et c'est ainsi que j'ai renconté mon épouse c'est incroyable n'est ce pas ? </p>
<!--                 <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p> -->
              </div>

            </div>
          </div>

          

        </div>
    </div>
    </div>
    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">point de rencontre immobilier </h3>
              <p>la plus prestigeuse plateforme immobiliere , vivez une experience unique dans le monde de l'immobilier</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">nos contacts</h3>
              </div>
              <div style= "color: white" class="col-md-6 col-lg-6">
                696 31 03 82 <br>
                690 66 60 04
              </div>
              <div class="col-md-6 col-lg-6">
              </div>
            </div>


          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Suivez-nous sur</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>

            

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> tous droits reservés | conçu et réalisé  <i class="icon-heart text-danger" aria-hidden="true"></i> par <a href="https://Bixterprise.com" target="_blank" >Bixterprise</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>

  </div>
  <script>
infos() {
  alert("yep ");
}
var salon = document.getElementById('salon');
var douche = document.getElementById('douche');
var cuisine = document.getElementById('cuisine');
var chambre = document.getElementById('chambre');
console.log(chambre);
for(let i=1; i<201; i++) {
  var opt1 = document.createElement('option');
  var opt2 = document.createElement('option');
  var opt3 = document.createElement('option');
  var opt4 = document.createElement('option');

  opt1.appendChild( document.createTextNode(i) );
  opt1.value = i; 
  salon.appendChild(opt1);
  console.log(i);

  opt2.appendChild( document.createTextNode(i) );
  opt2.value = i; 
  douche.appendChild(opt2);

  opt3.appendChild( document.createTextNode(i) );
  opt3.value = i; 
  cuisine.appendChild(opt3);

  opt4.appendChild( document.createTextNode(i) );
  opt4.value = i; 
  chambre.appendChild(opt4);
}

function () {
  document.getElementById('envoyer').hidden = false;
  document.getElementById('suivant').hidden = true;
}

function activesubmitM() {
  document.getElementById('envoyer1').hidden = false;
  document.getElementById('suivant1').hidden = true;
}

function disable() {
  // alert(document.getElementById('type').value);
  if(document.getElementById('type').value == 'chambre') {
    // alert(document.getElementById('type').value);
    document.getElementById('salon').disabled= true;
    document.getElementById('douche').disabled= true;
    document.getElementById('cuisine').disabled= true;
    document.getElementById('chambre').disabled= true;
  } else {
    document.getElementById('salon').disabled= false;
    document.getElementById('douche').disabled= false;
    document.getElementById('cuisine').disabled= false;
    document.getElementById('chambre').disabled= false;
  }
  
}
   
}

</script>
  
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>