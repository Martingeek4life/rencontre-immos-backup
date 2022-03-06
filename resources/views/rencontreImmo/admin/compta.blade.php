<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Admin RencontreImmo</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/immos/public/css/bootstrap.css">
        <link rel="stylesheet" href="/immos/public/vendors/linericon/style.css">
        <link rel="stylesheet" href="/immos/public/css/font-awesome.min.css">
        <link rel="stylesheet" href="/immos/public/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="/immos/public/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="/immos/public/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="/immos/public/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="/immos/public/vendors/flaticon/flaticon.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="/immos/public/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/immos/public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/immos/public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/immos/public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/immos/public/dist/css/skins/_all-skins.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="/immos/public/css/style.css">
        <link rel="stylesheet" href="/immos/public/css/responsive.css">
        <link rel="stylesheet" href="/immos/public/css/breadcrumb.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
        <style>
        .clignote {
          color:red;
          animation: clignote 0.7s linear infinite;
        }
        @keyframes clignote {  
          50% { opacity: 0; }
        }

        .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
}
.mailbox-widget .custom-tab .nav-item .nav-link {
    border: 0;
    color: #fff;
    border-bottom: 3px solid transparent;
}
.mailbox-widget .custom-tab .nav-item .nav-link.active {
    background: 0 0;
    color: #fff;
    border-bottom: 3px solid #2cd07e;
}
.no-wrap td, .no-wrap th {
    white-space: nowrap;
}
.table td, .table th {
    padding: .9375rem .4rem;
    vertical-align: top;
    border-top: 1px solid rgba(120,130,140,.13);
}
.font-light {
    font-weight: 300;
}
        </style>
    
    </head>
    <body style="background: url(/immos/public/img/banner/banner.jpg);">
        
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
						<a class="navbar-brand logo_h" href="index.html"><img src="/immos/public/img/index1.png" alt="" style="width: 200px;"><img src="/immos/public/img/index1.png" alt="" style="width: 200px;"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
					</div>
            	</nav>
            </div>
        </header>
        <br><br><br><br><br><br>

        <div class="container" style="background: #edf1f5;">
        <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="/immos/public/admin/louer" style="color: #dc3545;"><i class="fa fa-circle-o text-red"></i> maison à louer</a></li>&nbsp;&nbsp;&nbsp;
                <li><a href="/immos/public/admin/achat" style="color: #dc3545;"><i class="fa fa-circle-o text-yellow"></i> maison à acheter</a></li>&nbsp;&nbsp;&nbsp;
                <li><a href="/immos/public/admin/services" style="color: #dc3545;"><i class="fa fa-circle-o text-light-blue"></i>services du personnels</a></li>&nbsp;&nbsp;&nbsp;
                <li><a href="/immos/public/comptabilite" style="color: #dc3545;"><i class="fa fa-circle-o text-light-blue"></i>comptabilité</a></li>
              </ul>
            </div>
    <div class="row">
        <div class="col-md-12">
                <div class="card-body bg-primary text-white mailbox-widget pb-0">
                    <h2 class="text-white pb-3">Comptabilité</h2>
                </div>
        </div>
                <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div>
              <i style="color: orange; font-size: 100px;" class="ion-ios-chatbubble-outline font-large-2"></i>
              </div>
              <div class="media-body text-right">
                <h3> {{ count(Session::get('read')) + count(Session::get('unRead')) }}</h3>
                <span>Lettres au total</span>
              </div>
            </div>
          </div>
        </div>
      </div>
       </div><br>
       <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div>
              <i style="color: orange; font-size: 100px;" class="ion-ios-chatbubble-outline font-large-2"></i>
              </div>
              <div class="media-body text-right">
                <h3> {{ count(Session::get('unRead')) }}</h3>
                <span>Lettre(s) non lu(e)s</span>
              </div>
            </div>
          </div>
        </div>
      </div>
       </div><br>
       <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div>
              <i style="color: orange; font-size: 100px;" class="ion-ios-chatbubble-outline font-large-2"></i>
              </div>
              <div class="media-body text-right">
                <h3> {{ count(Session::get('read')) }}</h3>
                <span>Lettre(s) lu(e)s</span>
              </div>
            </div>
          </div>
        </div>
      </div>
       </div><br>
       <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="media d-flex">
              <div>
              <i style="color: orange; font-size: 100px;" class="ion ion-ios-cart-outline font-large-2"></i>
              </div>
              <div class="media-body text-right">
                <h3> {{ count(Session::get('read')) * 25 }} Fcfa</h3>
                <span>Montant encaissé</span>
              </div>
            </div>
          </div>
        </div>
      </div>
       </div><br>
    </div>
    
</div>
<script src="https://kit.fontawesome.com/50760d1597.js" crossorigin="anonymous"></script>
