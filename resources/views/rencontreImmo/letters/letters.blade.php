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
    <body>
    @csrf
        
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
						<a class="navbar-brand logo_h" href="accueil"><img src="http://rencontre-immo-services.herokuapp.com/img/logo_immos.png" alt="" style="width: 200px;"><img src="http://rencontre-immo-services.herokuapp.com/img/logo_immos.png" alt="" style="width: 200px;"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.html">Accueil</a></li>
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
        <br><br><br><br><br><br>
        <div class="container" style="background: #edf1f5;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body bg-primary text-white mailbox-widget pb-0">
                    <h2 class="text-white pb-3">Votre Boite à lettres</h2>
                            <a class="nav-link" id="sent-tab" data-toggle="tab" aria-controls="sent" href="#sent" role="tab" aria-selected="false">
                                <span class="d-block d-md-none"><i class="ti-export"></i></span>
                                <span class="d-none d-md-block">Lettre(s) lue(s)</span>
                            </a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                        <div>
                            <div class="row p-4 no-gutters align-items-center">
                            <p style="color: red;">Dans le cadre de la promotion lancée par Rencontre-Immos-services, vous êtes exonéré  des frais y afférent. Soit 25 FCFA ou 0.038 Euro.</p>
                            @if(Session::get('new')== 1)
                                <div class="col-sm-12 col-md-6">
                                    <h3 class="font-light mb-0 clignote"><i class="ti-email mr-2"></i>Du nouveau dans votre boite à lettre</h3>
                                </div>
                                @else 
                                <div class="col-sm-12 col-md-6">
                                    <h3 class="font-light mb-0" style="color: black;"><i class="ti-email mr-2"></i>Vous n'avez pas reçu de nouvelles lettres</h3>
                                </div>
                                @endif
                                <div class="col-sm-12 col-md-6">
                                    <ul class="list-inline dl mb-0 float-left float-md-right">
                                        <li class="list-inline-item text-danger">
                                            <!-- <a href="#">
                                                <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <span class="ml-2 font-normal text-dark">Pour supprimer un message appuyez longuement sur ce message</span>
                                            </a> -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mail list-->
                            <div class="table-responsive" style="margin-top: -40px;">
                                <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                    <tbody>
                                    <?php foreach(Session::get('messages') as $key=>$value): ?>
                                        <tr>
                                            <!-- label -->
                                            <td class="pl-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cst2" />
                                                    <label class="custom-control-label" for="cst2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <!-- star -->
                                            <td><i class="fa fa-star"></i></td>
                                            <!-- User -->
                                            <td>
                                                <span class="" style="color: #007bff;">{{ $value['nomClient'] }}</span>
                                            </td>
                                            <!-- Message -->
<!--                                             <td>
                                                <a class="link" href="javascript: void(0)">
                                                    <span class="badge badge-pill text-white font-medium badge-danger mr-2">Business</span>
                                                    <span class="text-dark">Urgent je souhaite vous contacter</span>
                                                </a>
                                            </td> -->
                                            <!-- Attachment -->
                                           <!--  <td><i class="fa fa-paperclip text-muted"></i></td> -->
                                            <!-- Time -->
                                            <td class="text-muted"><a  href="{{asset('message-détails/'.$value['id'])}}" class="btn btn-primary" style="color: white;">Ouvrir</a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
      <a href="{{ route('mesPub') }}" style="color: #ffc107; float: right; font-size: 17px;">accéder à vos publications</a>
      </div>
    <div>
    <a href="{{ route('accueil') }}">retour à l'accueil</a>
      </div>
</div>
