<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/logo_immos.png" type="image/png" style="width: 180px;">
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
        <style>
        @media screen  and (min-width: 992px){
            .responsiveText {
                color: white;
                font-style: italic;
                font-size: 17px;
                font-weight: bold;
                letter-spacing: 1px;
                text-shadow: black 1px 0 10px;
                top: 140px;
            } 
            .fleche {
                margin-left: 90px;
                color: white;
                font-size: 18px;
                font-weight: bold; 
            }
            .home_banner_area .home_right_box {
                background: rgba(255, 255, 255, 0.1);
                padding: 30px;
                display: flex;
                flex-wrap: wrap;
                margin-top: 110px;
                margin-bottom: 210px;
                border: 1px solid 
                rgba(255, 255, 255, 0.1);
                border-radius: 10px;
                background: #245391; 
                width: 500px;
                float: right;
                margin-right: -510px;
            }
        }

        @media screen and (max-width: 992px) {
            .responsiveText { 
                color: white; 
                font-style: italic;
                font-size: 17px; 
                font-weight: bold; 
                letter-spacing: 1px;
                text-shadow: black 1px 0 10px;
                margin-top: -16px;
            }
            .fleche {
                margin-left: 50px;
                color: white;
                font-size: 18px;
                font-weight: bold; 
            }
            .home_banner_area .home_right_box {
                background: rgba(255, 255, 255, 0.1);
                padding: 30px;
                display: flex;
                flex-wrap: wrap;
                margin-top: 210px;
                margin-bottom: 210px;
                border: 1px solid 
                rgba(255, 255, 255, 0.1);
                border-radius: 10px;
                background: #245391; 
                width: 400px; 
                margin-left: -40px;
                margin-top: 10px;
            }
        }

        </style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">
           				<div class="float-left">
           					<a href="#" style="color: #fd7e14; font-weight: bold;">ACCUEIL</a>
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
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
									</ul>
								</li> -->
								<!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contactez-nous</a></li> -->
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="loginModal">Ouvrez votre boite aux lettres</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label  class="col-md-4 col-form-label text-md-right">Entrez votre telephone</label>
						<div class="col-md-6">
							<input id="password" type="number" class="form-control" name="login" required>
						</div>
					
					</div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Entre votre mot de Passe</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                        </div>
                    </div>
					<center>
					<button type="submit" class="btn btn-primary">
                        Ouvrir
                    </button>
					</center>
                </form>
            </div>
        </div>
    </div>
</div>
        <!--================Home Banner Area =================-->
        <section class="home_banner_area" id="home_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 responsiveText" >
							<div>
                                Ce site est un marché virtuel qui met en contact direct des propriétaires des biens et services avec des potentiels acquereurs.
							</div>
						</div>
						<div class="col-lg-8">

							<div class="home_right_box" >
							<center> <div class="fleche">Que voulez-vous ? cliquez ici <br> <br><img src="img/fleche.png" alt="" style="width: 20px; height: 35px; "></div> </center>
								<div class="home_item">
                                    <center>
                                    <a class="banner_btn" href="form-vente" style="background: #db6d27; color: white;font-size: 12px;">Pour Vendre ou faire louer un bien immobilier</a></center>
								</div> 
								<div class="home_item">
                                    <center>
									<a class="banner_btn" href="buy-immo" style="background: #db6d27; color: white;font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pour acheter un bien immobilier&nbsp;&nbsp;&nbsp;&nbsp;</a></center>
								</div>

                                <div class="home_item">
									<a class="banner_btn" href="register-tech" style="background: #db6d27; color: white;font-size: 12px;">Pour offrir ses services/emplois/Business</a>
								</div>
								<div class="home_item">
									<a class="banner_btn" href="techni-immo" style="background: #db6d27; color: white;font-size: 12px;">Pour besoin de services/emplois/Business</a>
								</div>
								<div class="home_item">
									<a class="banner_btn" href="rent-immo" style="background: #db6d27; color: white;font-size: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pour louer un bien immobilier&nbsp;&nbsp;&nbsp;&nbsp;</a>
								</div>
                                <div class="home_item">
                                    <a class="banner_btn" href="" style="background: #db6d27; color: white;font-size: 12px;"     style="cursor: pointer" 
									style="cursor: pointer" 
									data-toggle="modal" 
									data-target="#loginModal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ouvir sa boite aux lettres</a>
                                </div>
                                <div class="home_item">
                                    <a class="banner_btn" href="contact" style="background: #db6d27; color: white;font-size: 12px;">Pour contacter rencontre-immo</a>
                                </div>
                                <div class="home_item">
									<a class="banner_btn" href="conditions" style="background: #db6d27; color: white;font-size: 12px;">Conditions d'utilisations&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>

        
        <!--================End Footer Area =================-->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
		<script>
		</script>
    </body>
</html>