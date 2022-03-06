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

        <!-- style pour recherche des immobiliers -->
        <link rel="stylesheet" href="backup_style/fonts/icomoon/style.css">
        <link rel="stylesheet" href="backup_style/css/bootstrap.min.css">
        <link rel="stylesheet" href="backup_style/css/magnific-popup.css">
        <link rel="stylesheet" href="backup_style/css/jquery-ui.css">
        <link rel="stylesheet" href="backup_style/css/owl.carousel.min.css">
        <link rel="stylesheet" href="backup_style/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="backup_style/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="backup_style/css/mediaelementplayer.css">
        <link rel="stylesheet" href="backup_style/css/animate.css">
        <link rel="stylesheet" href="backup_style/fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="backup_style/css/fl-bigmug-line.css">
    

        <link rel="stylesheet" href="backup_style/css/aos.css">

        <link rel="stylesheet" href="backup_style/css/style.css">
    </head>
    <body>
    @csrf
        
        <!--================Header Menu Area =================-->
        <header class="header_area" style="background: url(/immos/public/img/banner/banner.jpg);">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">
           				<div class="float-left">
           					<a href="#" style="color: #fd7e14; font-weight: bold;">DETAILS</a>

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
						<a class="navbar-brand logo_h" href="index.html"><img src="/immos/public/img/index1.png" alt="" style="width: 200px;"><img src="/immos/public/img/index1.png" alt="" style="width: 200px;"></a>
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
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
              <?php foreach($details as $key=>$value): ?>
                <div class="col-md-6">
                  <strong class="text-success h4">{{ $value['profession'] }}</strong>
                </div>
				<div class="bg-white widget border rounded">
            <?php foreach($details as $key=>$value): ?>
              <h3 class="h4 text-black widget-title col-md-12">Description</h3>
              <p>{{ $value['description'] }}</p>
              <?php endforeach; ?>
            </div>
                <?php endforeach; ?>
              </div>
              <div class="row mb-5">
              <?php foreach($details as $key=>$value): ?>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="h4 text-black widget-title">lieu </span>
                  <strong class="d-block">{{ $value['localisation'] }}, {{ $value['ville'] }}</strong>
                </div>
                <?php endforeach; ?>
              </div>

              <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Gallerie</h2>
                </div>
                <?php foreach($details as $key=>$value): ?>
                <?php foreach($value['photos'] as $key=>$value): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                
                  <a href="{{asset('photos_house/'.$value)}}" class="image-popup gal-item"><img src="{{asset('photos_house/'.$value)}}" alt="Image" class="img-fluid"></a>
                </div>
                <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
			<div class="col-12">
                  <h2 class="h4 text-black mb-3">Vidéo de présentation</h2>
            </div>
			<div>
				  <?php foreach($details as $key=>$value): ?>
					<video controls width="250">
					<source src="{{asset('photos_house/'.$value['video'])}}">
					</video>
					<?php endforeach; ?>
              </div>
          </div>
        </div>
		<div class="col-lg-8">
		<h4 class="alert-heading">Votre annonce a été publiée avec succès! sa validité est de 30 jours. Passé ce delais vous etes tenu de la renouveller.</h4>
            <a href="accueil" style="color: #fd7e14;"><i class="fa fa-arrow-left" aria-hidden="true"></i>
            Retour à l'accueil</a>
            <div>
      </div>
    </div>
        </body>
      </html>
