<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="http://rencontre-immo-services.herokuapp.com/img/logo_immos.png" type="image/png">
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
    <style>
    .loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #db6d27;
      border-right: 16px solid #db6d27;
      border-bottom: 16px solid #db6d27;
      width: 120px;
      height: 120px;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    </style>
    </head>
    <body>
    @csrf
        
        <!--================Header Menu Area =================-->
        <header class="header_area" style="background: url(/immos/public/img/banner/banner.jpg);">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">
           				<div class="float-left">
           					<a href="#" style="color: #fd7e14; font-weight: bold;">ESPACE VENTE</a>

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
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <br><br><br><br><br><br><br>
      <div class="container">
      <h3 class="alert-heading" style="color:#6f42c1;">Mes publications</h3>
      
        @if(count(Session::get('hasBuyImmo'))== 0) 
      
      <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Aucune Publication Immobiliere</h4>
      <hr>
      </div>
      </div>
      @else
      <center id="load" hidden><br><div class="loader"></div></center>
        <section class="furniture_area p_120" style="background: white">
          <div class="container">
            <div class="furniture_inner row">
              <?php foreach(Session::get('hasBuyImmo') as $key=>$value): ?>
              <div class="col-lg-4">
                <div class="furniture_item">
                  <!-- <img class="img-fluid" src="{{asset('photos_house/'.$value['photos'][0])}}" alt="house"> -->
                  <h4> {{ $value['type'] }}, {{ $value['ville'] }}</h4>
                  <p></p><a class="main_btn" href="{{asset('immo-modif/'.$value['id'])}}">Modifier</a>
                </div>
               
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
      @endif

      @if(count(Session::get('hasBuyImmot'))== 0) 
      
      <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Aucune Publication service</h4>
      <hr>
      </div>
      </div>
      @else
      <center id="load" hidden><br><div class="loader"></div></center>
        <section class="furniture_area p_120" style="background: white">
          <div class="container">
            <div class="furniture_inner row">
              <?php foreach(Session::get('hasBuyImmot') as $key=>$value): ?>
              <div class="col-lg-4">
                <div class="furniture_item">
                  <!-- <img class="img-fluid" src="{{asset('photos_house/'.$value['photos'][0])}}" alt="house"> -->
                  <h4> {{ $value['profession'] }}, {{ $value['ville'] }}</h4>
                  <p></p><a class="main_btn" href="{{asset('immo-modift/'.$value['id'])}}">Modifier</a>
                </div>
               
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
      @endif
      <a href="accueil">retour ?? l'accueil</a>
      
      <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
      <script src="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>
      <script type="text/javascript">
        function show() {
          document.getElementById('load').hidden = false;
        }
      </script>
<script type="text/javascript">
$('#typeselect').editableSelect({ effects: 'default' });
$('#pays').editableSelect({ effects: 'default' });
$('#ville').editableSelect({ effects: 'default' });
$('#quartier').editableSelect({ effects: 'default' });
$('#rue').editableSelect({ effects: 'default' });
</script>


      </body>
      </html>

