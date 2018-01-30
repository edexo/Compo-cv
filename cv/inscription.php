<?php include('connexion.php');
      include('menu.php'); // la barre de menu

  	$msg="";
	if (isset($_POST['btnValider'])){
		/*echo '<pre>';
		print_r($_FILES);
		die();*/
		if(move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$_FILES['image']['name'])) {
		    $sql= "INSERT INTO codeuses (nom,prenoms,datenais,resume,email,specialisation, telephone,mdp,photo)
		     VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."',
		             '".mysqli_real_escape_string($link,$_POST['prenoms'])."',
		             '".mysqli_real_escape_string($link,$_POST['datenais'])."',
		             '".mysqli_real_escape_string($link,$_POST['resume'])."',
		             '".mysqli_real_escape_string($link,$_POST['email'])."',
		             '".mysqli_real_escape_string($link,$_POST['specialisation'])."',
		             '".mysqli_real_escape_string($link,$_POST['telephone'])."',
		             '".mysqli_real_escape_string($link,$_POST['mdp'])."',
		             '".mysqli_real_escape_string($link,$_FILES['image']['name'])."')";
		             //die($sql);
		    $result=mysqli_query($link,$sql);
		    //die('tyuiopù');
		    if($result) {
			$msg='Isnsertion reussie';
		    }else{
			   $msg=mysqli_error($link);
		    }
		}
	}
	
?>
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
		<strong><center>Inscrivez-vous</center></strong>
        </h1><br>

					<form  action="" method="POST" role="form" enctype="multipart/form-data">
						<div class="col-sm-6 col-sm-offset-3">
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control" required="" name="nom" placeholder="Entrez votre nom">
						</div>

						<div class="form-group">
							<label>Prenoms</label>
							<input type="text" class="form-control" name="prenoms" placeholder="Entrez vos prenoms">
						</div>

						<div class="form-group">
							<label>Date de naissance</label>
							<input type="date" class="form-control" name="datenais" placeholder="date de naissance">
						</div>

						<div class="form-group">
							<label>Resume</label>
							<input type="textarea" class="form-control" required="" name="resume" placeholder="laisser un resume">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required="" name="email" placeholder="Entrez votre email">
						</div>

						<div class="form-group">
							<label>Specialisation</label>
							<input type="text" class="form-control" required="" name="specialisation" placeholder="Entrez votre email">
						</div>
						
					    <div class="form-group">
						    <label>Telephone</label>
						    <input type="text" class="form-control" name="telephone" placeholder="Entreez votre numero de telephone">
					    </div>	

					    <div class="form-group">
						    <label>Mot de passe</label>
						    <input type="password" class="form-control" required="" name="mdp" placeholder="Entrez votre mot de passe">
					    </div>

					    <div class="form-group">
						    <label>Photo</label>
						    <input type="file" class="form-control" name="image"  id="" placeholder="choisisvotre image">
					    </div>

					    <button class=" btn btn-primary btn-block btn-signin" name="btnValider" type="submit">Valider
					    </button>
					</form>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>