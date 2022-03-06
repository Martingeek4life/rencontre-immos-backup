<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="http://rencontre-immo-services.herokuapp.com/img/favicon.png" type="image/png">
        <title>Rencontre-immo-services</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/css/bootstrap.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/vendors/linericon/style.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/css/style.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/css/responsive.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/css/breadcrumb.css">

        <!-- style pour recherche des immobiliers -->
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/fonts/icomoon/style.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/magnific-popup.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/jquery-ui.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/owl.carousel.min.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/mediaelementplayer.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/animate.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/fl-bigmug-line.css">
        <link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
  
  
    <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/aos.css">

    <link rel="stylesheet" href="http://rencontre-immo-services.herokuapp.com/backup_style/css/style.css">
    </head>
    <body>
    @csrf
        
        <!--================Header Menu Area =================-->
        <header class="header_area" style="background: url(/immos/public/img/banner/banner.jpg);">

            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="accueil"><img src="http://rencontre-immo-services.herokuapp.com/img/logo_immos.png" alt="" style="width: 200px;"><img src="http://rencontre-immo-services.herokuapp.com/img/logo_immos.png" alt="" style="width: 200px;"></a>
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
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
									</ul>
								</li> -->
								<li class="nav-item"><a class="nav-link" href="contact.html">Contactez-nous</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header><br><br><br><br><br>
      <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
         <h4><strong>conditions générales de la plateforme Rencontre-Immo-services</strong></h4><br>
         <p>Ce document soumis à votre appréciation représente les conditions générales d'utilisation de notre plateforme "Rencontre-Immo-services". <br> L'accès à cette plateforme est un quitus d'acceptations des présentes conditions qui vous lient à Rencontre-Immo-services. <br> Rencontre-Immo-services est une plateforme de marché virtuel. un lieu d'échange qui met en contact direct des personnes propriétaires des offres à d'éventuels acquereurs. Plus d'intermédiaire. <br> Il s'agit ici des offres de services, des ventes ou de locations de tous biens meubles et immeubles. <br> 
         Rencontre-Immo-services ne vous met en contact qu'avec ceux qui sont intéréssées par vos offres.
         <h4><strong>1- conditions d'utilisation de la plateforme</strong></h4><br> 
         L'utilisation de la plateforme est gratuite. Nous attendons par utilisation de la plateforme la visite du site, la publication des biens et services donnant lieu à l'ouverture d'un compte avec mot de passe. <br> Le compte représente votre boites à lettres que vous pouvez visitez gratuitement pour avoir accès à vos messages, Biens et services publiés. <br> C'est à partir de votre compte que vous etes saisis par des éventuels clients ou co-contractants, employeurs etc ... ceci par messages. <br>
         L'annonce des méssages est gratuite. Toutefois Rencontre-Immo-services se reserve le droit de vous mettre en contact avec vos partenaires après acquitement des frais d'un montant de 25 FCFA soit 0.038 Euro payable via orange money, Momo money etc .. <br> Rencontre-Immo-services qui est une plateforme de marché n'offre que son espace pour des rencontres. Il n'est en aucun cas responsable des différentes transactions éffectuées sur le site ou hors du site entre partenaires. <br>
         <h4><strong>2- Transactions interdites sur la plateforme</strong></h4><br> Ne sont pas admises sur la plateforme toutes les transactions sur les armes, explosifs ou tout autre produit interdit par la loi. <br>
         <h4><strong>2- Engagements de tous les utilisateurs sur la plateforme</strong></h4>  <br> - Ne tenir aucun propos à caractère diffamatoire. <br>
         - Ne pas porter atteinte aux droits et à l'image de Rencontre-Immo-services <br>
         - Vous rassurer que les contacts téléphoniques, e-mails etc ... sont fiables. <br>
         <h4><strong>2- Données personnelles et confidentialité sur la plateforme</strong></h4>  <br>
         Rencontre-Immo-services s'engage à utiliser, garder et protéger vos données personnelles dans le strict respects des lois en vigeur.
         </p>
            </div>
            
    </div>
    </div>
        </body>
      </html>