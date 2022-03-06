<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Web Hotel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vend-login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vend-login/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vend-login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vend-login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vend-login/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vend-login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
      @if(Session::has('hasError'))

<div class="alert alert-danger">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	{{ $error ?? ''}}

</div>

@endif
				<form method= "get" action="{{ route('login') }}" class="login100-form validate-form">
       
					<span class="login100-form-title p-b-43">
						Connectez-vous !
					</span>
          
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username">
						<span class="label-input100">votre login</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="label-input100">votre mot de passe </span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Connexion
						</button>
					</div>
					
					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							Mot de passe oublié ?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vend-login/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vend-login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vend-login/bootstrap/js/popper.js"></script>
	<script src="vend-login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vend-login/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vend-login/daterangepicker/moment.min.js"></script>
	<script src="vend-login/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vend-login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>