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
            <div class="card">
                <div class="card-body bg-primary text-white mailbox-widget pb-0">
                    <h2 class="text-white pb-3">Boite à lettres générale</h2>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                        <div>
                            <div class="row p-4 no-gutters align-items-center">
                                <div class="col-sm-12 col-md-6">
                                    <ul class="list-inline dl mb-0 float-left float-md-right">
                                        <li class="list-inline-item text-danger">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Mail list-->
                            <div class="table-responsive">
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
                                            <td class="text-muted"><a  href="{{asset('message-détailsAdmin/'.$value['id'])}}" class="btn btn-primary" style="color: white;">Ouvrir</a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
