<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>RencontreImmo</title>
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
           					<a href="#" style="color: #fd7e14; font-weight: bold;">ESPACE LOCATION</a>

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
						<a class="navbar-brand logo_h" href="index.html"><img src="img/index1.png" alt="" style="width: 200px;"><img src="img/index1.png" alt="" style="width: 200px;"></a>
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
        </header>
        <br><br><br><br><br><br><br>

       <br>
      <div class="container">
        <div class="row" style="">
          <form method= "get" action= "{{ route('search1') }}" onsubmit="show()" class="form-search col-md-12" style="margin-top: -100px;">
          @csrf
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types" style="color: white">type Immobilier</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="types" id="types" class="form-control d-block rounded-0">
                    <option>Tout</option>
                    <option>Immeuble</option>
                    <option>Appartement</option>
                    <option>Studio</option>
                    <option>Chambre</option>
                    <option>Terrain</option>
                    
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types" style="color: white">prix (Fcfa)</label>
                <div class="select-wrap">
                  
                  <input  type="number"  placeholder ="saisissez le prix" name="prix" class="form-control validate">
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types" style="color: white">Ville</label>
                <div class="select-wrap">
                  
                  <input  type="texer"  placeholder ="quelle ville ?" name="ville" class="form-control validate">
                </div>
              </div>
              <div class="col-md-3" >
                <input type="submit" class="btn text-white btn-block rounded-0" style="background: #db6d27"  value="rechercher">
              </div>
            </div>
          </form>

        </div>
       <center id="load" hidden><br><div class="loader"></div></center>
        <section class="furniture_area p_120" style="background: white">
          <div class="container">
            <div class="furniture_inner row">
              <?php foreach(Session::get('hasBuyImmo') as $key=>$value): ?>
              <div class="col-lg-4">
                <div class="furniture_item">
                  <img class="img-fluid" src="{{asset('photos_house/'.$value['photos'][0])}}" alt="house">
                  <h4> {{ $value['type'] }}, {{ $value['ville'] }} , {{ $value['quartier'] }}, {{ $value['superficie'] }} <var>m<sup style="color: black">2</sup></var></h4>
                  <p>{{ $value['description'] }}</p><p style="font-weight: bold;">Propriétaire: {{ $value['nom'] }}</p><a class="main_btn" href="{{asset('immo-détails1/'.$value['id'])}}">Voir en Details</a>
                </div>
               
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
        @if(count(Session::get('hasBuyImmo'))== 0) 
      
      <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Aucun Resultat</h4>
      <p>nous n'avons trouvé aucun resultat correspondant à votre requete</p>
      <hr>
      <a href="buy-immo">OK</a>
      </div>
      </div>
      @endif
      <script type="text/javascript">
        function show() {
          document.getElementById('load').hidden = false;
        }
      </script>

      </body>
      </html>

