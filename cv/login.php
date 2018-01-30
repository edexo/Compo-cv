<?php
session_start();
include('menu.php');
  if (isset($_POST['btnValider']) ){

	$sql="SELECT * FROM codeuses WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."' AND mdp='".mysqli_real_escape_string($link,md5($_POST['mdp']))."' LIMIT 0,1";
	   $req= mysqli_query($link,$sql);
		if (mysqli_num_rows($req)>0) {
		$data= mysqli_fetch_array($req);
		$_SESSION['variable']=$data['id'];
		header('location:accueil.php');
	    }else{
		echo "identifiants incorrects";
		}
	    } ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Login </title>
		<link rel="stylesheet" type="text/css" href="css/avatar.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	

		

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 style="color: green">
		<strong><center>Connectez-vous</center></strong>
        </h1><br>

	<div class="container">
		<div class="row">
		    <div class="col-md-4"></div>
				<div class="col-md-4">
                    <form class="form-signin" method="POST" role="form">
                        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                        <input type="password" id="inputPassword" name="mdp" class="form-control" placeholder="Password" required>
                        <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Se souvenir 
                        </label>
                        <button class=" btn btn-primary btn-block btn-signin" name="btnValider" type="submit">
                            <a href="dashboard.php" class="">Valider</a>
                        </button>
                        <a href="inscription.php" class="forgot-password">
                          Créer un compte
                        </a>
                    </form>
                </div><!-- col-md-8 -->
            <div class="col-md-4"></div>

            
        </div><!-- /card-container -->
    </div>						
						
						
					
</body>		

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>