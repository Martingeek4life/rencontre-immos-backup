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
        <link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
  
  
    <link rel="stylesheet" href="backup_style/css/aos.css">

    <link rel="stylesheet" href="backup_style/css/style.css">
        <link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
        <style>
#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    border-radius: 10px
}

#register {
    color: #6A1B9A
}

h1 {
    text-align: center
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    border-radius: 10px;
    -webkit-appearance: none
}

.tab input:focus {
    border: 1px solid #6a1b9a !important;
    outline: none
}

input.invalid {
    border: 1px solid #e03a0666
}


button {
    background-color: #6A1B9A;
    color: #ffffff;
    border: none;
    border-radius: 50%;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}

button:hover {
    opacity: 0.8
}

button:focus {
    outline: none !important
}

#prevBtn {
    background-color: #bbbbbb
}

.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
    width: 100%;
    display: inline-flex;
    justify-content: center
}

.step {
    height: 40px;
    width: 40px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    color: #6a1b9a;
    opacity: 0.5
}

.step.active {
    opacity: 1
}

.step.finish {
    color: #fff;
    background: #6a1b9a;
    opacity: 1
}

.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}

.thanks-message {
    display: none
}  
        
        </style>
    </head>
    <body>
        
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
								<li class="nav-item"><a class="nav-link" href="contact.html">Contactez-nous</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
	 	<br><br><br><br><br>

<form method= "post" action= "{{ route('addImmo') }}" enctype="multipart/form-data">
@csrf
<div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <form id="regForm">
            @csrf
                <h1 id="register">Faites connaitre votre immobilier</h1>
                <!-- <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i class="fa fa-shopping-bag"></i></span> <span class="step"><i class="fa fa-car"></i></span> <span class="step"><i class="fa fa-spotify"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> </div> -->
                <div class="tab">
                    <h4>Entrez votre nom</h4>
                    <p> <input placeholder="Votre Nom..." oninput="this.className = ''" name="nom" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez votre prenom</h4>
                    <p><input placeholder="votre prenom" oninput="this.className = ''" name="prenom" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez le Pays où se trouve l'immobilier</h4>
                    <p><input placeholder="le Pays" oninput="this.className = ''" name="pays" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez la ville où se trouve l'immobilier</h4>
                    <p><input placeholder="la ville" oninput="this.className = ''" name="ville" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez le Quartier où se trouve l'immobilier</h4>
                    <p><input placeholder="le quartier" oninput="this.className = ''" name="quartier" required  id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez la  Rue où se trouve l'immobilier</h4>
                    <p><input placeholder="la Rue" oninput="this.className = ''" name="rue" id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez le  telephone</h4>
                    <p><input type= "number" placeholder="Votre telephone" oninput="this.className = ''" name="phone" required></p>
                </div>
                <div class="tab">
                    <h4>Entrez votre e-mail</h4>
                    <p><input placeholder="Votre e-mail" oninput="this.className = ''" name="email" required id="desc" onkeyup="onlyNumber();"></p>
                </div>
                <div class="tab">
                    <h4>Entrez le type d'immobilier</h4>
                    <p>
                      <select class="form-control" id="typeselect" name="type" required>
                          <option value="Appartement">Appartement</option>
                          <option value="Chambre">Chambre</option>
                          <option value="Immeuble">Immeuble</option>
                          <option value="Terrain">Terrain</option>
                      </select>
                    </p>
                </div>
                <div class="tab">
                    <h4>Entrez la superficie en metre carré</h4>
                    <p><input type= "number" placeholder="la superficie" oninput="this.className = ''" name="superficie" required></p>
                </div>
                <div class="tab">
                    <h4>Entrez le  prix (au mettre carré si c'est un terrain sinon entrer le loyer ou le prix de vente)</h4>
                    <p><input type= "number" placeholder="le prix" oninput="this.className = ''" name="prix" required></p>
                </div>

                <div class="tab">
                    <h4>objet</h4>
                    <p>
                      <select class="form-control" id="typeselect" name="objet" required>
                          <option value="pour vente">pour vente</option>
                          <option value="pour location">pour location</option>
                      </select>
                    </p>
                </div>
                <div class="tab">
                    <h4>faites une description de votre immobilier</h4>
                    <p><textarea class="form-control" id="desc" name="description" placeholder="Decrivez votre immobilier" required id="Description" onkeyup="onlyNumber();"></textarea></p>
                </div>
                <div class="tab">
                    <h4>Entrez les photos de votre immobilier</h4>
                    <p><input type="file" required placeholder="votre immobilier en photos" oninput="this.className = ''" max= "5" name="photo[]" accept="image/*" multiple></p>
                </div>
                <div class="tab">
                    <h4>Entrez une vidéo de votre immobilier(la video doit avoir une taille de 2 mega)</h4>
                    <p><input type="file" max-size="2000" required placeholder="votre immobilier en videos" oninput="this.className = ''"  name="video" accept="video/*"></p>
                </div>
                <div class="tab">
                <h4>Entrez votre mot de passe</h4>
                  <div class="input-group" id="show_hide_password">
                    <input class="form-control" type="password" name="passe" required>
                    <div class="input-group-addon">
                      <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div><br>
              <center>
              <button type="submit" class="btn btn-primary">Valider votre publication</button><br><br>
                <a href="accueil" class="btn btn-secondary">Annuler votre publication</a>
                
                <br><br><br>
              </center>
            </form>
        </div>
    </div>
</div>
</div>
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.js"></script>
<script type="text/javascript">
$('#typeselect').editableSelect({ effects: 'default' });
$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});

function onlyNumber()
{
    var champ=document.getElementById('desc');
    champ.value=champ.value.replace(/[^A-Za-z]/,' ');
}
</script>
    </body>
</html>
