<!DOCTYPE html>
<html lang="en">
<head>
    <title>rencontre immo</title>
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





<!-- debut Modal form terrain -->
<div class="modal fade" id="elegantModalFormT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>publiez votre Terrain</strong></h3>
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
  <input type="text" class="form-control" name="ville1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">Quartier</span>
  </div>
  <input type="text" name="quartier1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="md-form">
  <input type="number" name="achat1" id="inputMDEx" class="form-control">
  <label for="inputMDEx">prix d'achat</label>
</div>

<div class="custom-file">
  <input type="file" class="custom-file-input" accept="image/*" max= "5" name="photo1[]" multiple id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">Sélectionner des photos pour votre maison </label>
</div>
<br><br>
<div class="custom-file">
  <input type="file" class="custom-file-input" max= "1" accept="application/pdf" multiple name="loca1" id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">document decrivant son plan de localisation </label>
</div>

<div class="form-group purple-border">
  <label for="exampleFormControlTextarea4">breve description de votre maison</label>
  <textarea class="form-control" name="description1" id="exampleFormControlTextarea4" rows="3"></textarea>
</div>

<div class="text-center mb-3">
<a   data-toggle="modal" id="suivant" data-target="#centralModalInfo3" class="btn btn-outline-primary waves-effect"> Suivant </a>
          <button type="submit" id="envoyer" hidden class="btn blue-gradient btn-block btn-rounded z-depth-1a">envoyer</button>
        </div>

        </form>
      </div>
      
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- fin Modal form terrain -->






<!-- debut Modal form maison -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>publiez votre maison</strong></h3>
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

<select onchange="disable()" id="type" name="type"class="browser-default custom-select">
  <option selected>type de maison</option>
  <option value="Immeuble">Immeuble</option>
  <option value="Appartement">Appartement</option>
  <option value="chambre">chambre</option>
</select>
<br><br>

<div class="input-group input-group-sm mb-3">
<select id="douche" name="douche" class="browser-default custom-select">
  <option selected>nombre de douche(s)</option>
</select>
<select id="chambre" name="chambre" class="browser-default custom-select">
  <option selected>nombre de chambre(s)</option>
</select>
</div>

<div  class="input-group input-group-sm mb-3">
<select id="cuisine" name="cuisine" class="browser-default custom-select">
  <option selected>nombre de cuisine(s)</option>
</select>
<select id="salon" name="salon" class="browser-default custom-select">
  <option selected>nombre de salon(s)</option>
</select>
</div>

<div class="md-form">
  <input type="number" name="achat" id="inputMDEx" class="form-control">
  <label for="inputMDEx">prix d'achat</label>
</div>

<div class="custom-file">
  <input type="file" class="custom-file-input" accept="image/*" max= "5" name="photo[]" multiple id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">Sélectionner des photos pour votre maison </label>
</div>
<br><br>
<div class="custom-file">
  <input type="file" class="custom-file-input" max= "1" accept="application/pdf" multiple name="loca" id="customFileLang" lang="fr">
  <label class="custom-file-label" for="customFileLang">document decrivant son plan de localisation </label>
</div>

<div class="form-group purple-border">
  <label for="exampleFormControlTextarea4">breve description de votre maison</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea4" rows="3"></textarea>
</div>

<div class="text-center mb-3">
<a   data-toggle="modal" id="suivant1" data-target="#centralModalInfo4" class="btn btn-outline-primary waves-effect"> Suivant </a>
          <button type="submit" id="envoyer1" hidden class="btn blue-gradient btn-block btn-rounded z-depth-1a">envoyer</button>
        </div>

        </form>
      </div>
      
      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- fin Modal form maison -->




<div class="modal fade" id="centralModalInfo9"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Frais voir details</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method= "post" action= "{{ route('get-terre-détails') }}">
         @csrf
        <div class="md-form mb-5">
          <input type="text"  id="idprod9"  hidden name= "idprod9" class="form-control validate">
        </div>
        <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>accédez aux détails de cet immobilier en vous acquitant de vos frais de 100 FCFA ! vous aurez droit aux informations du propriétaire , plan de localisation de l'immobilier et d'autres renseignements afin que vous partez vous meme prendre connaissance de l'immobilier</p>
        <div class="text-center mb-3">
          <button type="submit"  class="btn btn-outline-primary waves-effect">ok je paye</button>
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





   <!-- Central Modal Medium Info paye terrain -->


   <div class="modal fade" id="centralModalInfo8"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Frais voir details</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <form method= "post" action= "{{ route('get-house-détails') }}">
         @csrf
        <div class="md-form mb-5">
          <input type="text"  id="idprod8"  hidden name= "idprod8" class="form-control validate">
        </div>
        <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>accédez aux détails de cet immobilier en vous acquitant de vos frais de 100 FCFA ! vous aurez droit aux informations du propriétaire , plan de localisation de l'immobilier et d'autres renseignements afin que vous partez vous meme prendre connaissance de l'immobilier</p>
        <div class="text-center mb-3">
          <button type="submit"  class="btn btn-outline-primary waves-effect">ok je paye</button>
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

   <!-- Central Modal Medium Info paye terrain -->
   <div class="modal fade" id="centralModalInfo4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-info" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">Etape finale</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>terminez la publication de votre immobilier en vous acquittant des frais s'élévant de 100 fcfa , pour booster votre publication <br>
           sinon votre maison ne sera pas visible sur la plateforme</p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
        <!--  <a type="button" class="btn btn-primary">Get it now <i class="far fa-gem ml-1 text-white"></i></a> -->
         <a   onclick="activesubmitM()"class="btn btn-outline-primary waves-effect" data-dismiss="modal">ok je paye</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Info-->




   <!-- Central Modal Medium Info -->
   <div class="modal fade" id="centralModalInfo3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-info" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">Etape finale</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>terminez la publication de votre immobilier en vous acquittant des frais s'élévant de 100 fcfa , pour booster votre publication <br>
           sinon votre maison ne sera pas visible sur la plateforme</p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
        <!--  <a type="button" class="btn btn-primary">Get it now <i class="far fa-gem ml-1 text-white"></i></a> -->
         <a   onclick="activesubmit()"class="btn btn-outline-primary waves-effect" data-dismiss="modal">ok je paye</a>
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
         <p class="heading lead">Que vbody vendre?</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>que voulez vous vendre ? une maison ?   un terrain ?</p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
        <!--  <a type="button" class="btn btn-primary">Get it now <i class="far fa-gem ml-1 text-white"></i></a> -->
         <a   data-toggle="modal" data-target="#elegantModalForm" class="btn btn-outline-primary waves-effect" data-dismiss="modal"> une maison </a>
         <a   data-toggle="modal" data-target="#elegantModalFormT" class="btn btn-outline-primary waves-effect" data-dismiss="modal"> un terrain </a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Info-->


    <!-- Central Modal Medium Info -->
 <div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-info" role="document">
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
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>point de rencontre immobilier met en relation les propriétaires immobiliers d'une part et des personnes à la recherche de location  ou  d'achats immobiliers <br> si jamais vous vous faites passer pour un propriétaire immobiliers , vos victimes ont la possibilité de signaler votre compte qui se verra immédiatement suprimé dans notre système et vous risquerez des poursuites judiciaires !!  <br> <br> <br> en utilisant ce site vous acceptez nos conditions d'utilisations ! et vous vous engagez à les respecter .<br> bonne suite !</p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
        <!--  <a type="button" class="btn btn-primary">Get it now <i class="far fa-gem ml-1 text-white"></i></a> -->
         <a  onclick="document.getElementById('search1').scrollIntoView();" class="btn btn-outline-primary waves-effect" data-dismiss="modal"> je veux acheter </a>
         <a   data-toggle="modal" data-target="#centralModalInfo2" class="btn btn-outline-primary waves-effect" data-dismiss="modal"> je veux vendre </a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Info-->



    <div class="site-navbar mt-4" style="background: rgba(31, 60, 136, 0.9);">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>point de rencontre Immobilier<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li >
                    <a href="{{ route('racine') }}">Accueil</a>
                  </li>
                  <li class="active"><a href="{{ route('vendre') }}" >Maisons</a></li>
                  <li><a href="{{ route('louer') }}">Terrains</a></li>
                  <li><a href="{{ route('mes-immobiliers') }}">Mes Immobiliers</a></li>
                  <!-- <li><a >deconnexion</a></li> -->
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
                  <!-- <li><a  data-toggle="modal" data-target="#elegantModalForm">Inscivez-vous</a></li>
                  <li><a data-toggle="modal" data-target="#elegantModalForm1">Connectez-nous</a></li> -->
                  
                </ul>
                <!-- <strong class="alert-success d-none d-md-block">{{ Session::get('userInfo') }}</strong> -->
              </nav>
            </div>
            @if(Session::get('hasBuy')== 1)        
<div class="alert alert-success alert-dismiss fade show" role="alert">
  <strong>Monsieur(Madame) {{ Session::get('userInfo') }}</strong> votre maison a été publiée avec succès !! point de rencontre immobilier vous remercie !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif 
<br>

@if(Session::get('hasBuyT')== 1)        
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Monsieur(Madame) {{ Session::get('userInfo') }}</strong> votre Terrain a été publié avec succès !! point de rencontre immobilier vous remercie !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

          </div>
        </div>
      </div>
    </div>

 

        <div class="row">
          <div class="col-md-12">
            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
<!--               <div class="mr-auto">
                <a href="index.html" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a>
                
              </div> -->
             
          
        </div>
       
      </div>
    </div>


    <br><br><br><br><br><br><br><br>
    <div class="site-section site-section-sm pb-0" id="search1">
      <div class="container">
        <div class="row">
          <form method= "get" action= "{{ route('search') }}" class="form-search col-md-12" style="margin-top: -100px;">
          @csrf
            <div class="row  align-items-end">
              <div class="col-md-2">
                <label for="list-types" style="color: white">Besoin</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="besoin" id="list-types" class="form-control d-block rounded-0">
                    <option value="Achat">Achat</option>
                    <option value="location">location</option>
                  </select>
                </div>
              </div>

              <div class="col-md-2">
                <label for="list-types" style="color: white">type maison</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="types" id="types" class="form-control d-block rounded-0">
                    <option value="chambre">chambre</option>
                    <option value="Appartement">appartement</option>
                    <option value="studio">studio</option>
                    <option value="Immeuble">immeuble</option>
                    
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <label for="offer-types" style="color: white">prix (Fcfa)</label>
                <div class="select-wrap">
                  
                  <input  type="number"  placeholder ="saisissez le prix" name="prix" class="form-control validate">
                </div>
              </div>
              <div class="col-md-2">
                <label for="select-city" style="color: white">ville</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="city" id="city" class="form-control d-block rounded-0" autocomplete="on">
<!--                     <option value="">New York</option>
                    <option value="">Brooklyn</option>
                    <option value="">London</option>
                    <option value="">Japan</option>
                    <option value="">Philippines</option> -->
                  </select>
                </div>
              </div>
              <div class="col-md-3" >
                <input type="submit" class="btn btn-success text-white btn-block rounded-0"  value="rechercher">
              </div>
            </div>
          </form>
        </div> 

    <div class="site-section site-section-sm bg-light">
    <!-- <center><h1><strong>MAISONS A VENDRE</strong></h1></center> -->
      <div class="container"> 
      @if(count(Session::get('allHouses')) == 0)        
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Aucun Resultat pour cette recherche </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
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
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{ $value['ville'] }} , {{ $value['quartier'] }}</span>
                <strong class="property-price text-primary mb-3 d-block text-success">FCFA {{ $value['prix'] }}</strong>
      
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
                <a  href="{{asset('house-détails/'.$value['id'])}}"  class="btn btn-outline-primary waves-effect">voir en details</a>
              </div>

            </div>
          </div>
          
        </div>
            <!-- </div> -->
            <?php endforeach; ?>
            
            <!-- </div> -->
            
            </div>

            
             
          

      
           <!-- mes terrains  -->
<!-- 
    <div class="site-section site $request->city,
     <center><h1><strong>TERRAINS $request->city, 
      <div class="container">
      
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
                <strong class="property-price text-primary mb-3 d-block text-success">FCFA {{ $value['prix'] }}</strong>
                <strong class="property-price text-primary mb-3 d-block text-danger">Validité: <?php $date=date_create($value['created_at']); date_add($date,date_interval_create_from_date_string("10 days")); echo date_format($date,"Y/m/d H:i:s"); ?></strong>
                <p>{{ $value['description'] }}</p>
                <a   data-toggle="modal" data-target="#centralModalInfo9" onclick="document.getElementById('idprod9').value = <?php echo $value['id'] ?>"  class="btn btn-outline-primary waves-effect">voir en details</a>
              </div>

            </div>
          </div>
          </div>
          </div>
          
        </div> -->
        

<!--         <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div> 
        </div> -->
        
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

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>


<script>

window.onload = function(){
console.log('enter');
$.get("cmr.json", function(data){
    console.log(data.length);
    var ville = document.getElementById('city');
    var objet = data.split("\n");
    for(let i=0; i<data.length - 1; i++) {
      var opt = document.createElement('option');
      opt.appendChild( document.createTextNode(objet[i].split(",")[0].replace('"', '').replace('"', '')) );
      opt.value = objet[i].split(",")[0].replace('"', '').replace('"', '');
      
      ville.appendChild(opt);
    }
    });
}

</script>

<script type="text/javascript">

var salon = document.getElementById('salon');
var douche = document.getElementById('douche');
var cuisine = document.getElementById('cuisine');
var chambre = document.getElementById('chambre');
for(let i=1; i<201; i++) {
  var opt1 = document.createElement('option');
  var opt2 = document.createElement('option');
  var opt3 = document.createElement('option');
  var opt4 = document.createElement('option');

  opt1.appendChild( document.createTextNode(i) );
  opt1.value = i; 
  salon.appendChild(opt1);

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