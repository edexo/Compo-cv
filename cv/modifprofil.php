<?php include('dashaccueil.php');
	$msg="";
	if (isset($_POST['btnModifier'])){
		if(move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$_FILES['image']['name'])) {
			$sql= "INSERT INTO codeuses (nom,prenoms,datenais,resume,email,specialisation,telephone,mdp,image)
			VALUES('".mysqli_real_escape_string($link,$_POST['nom'])."',
			        '".mysqli_real_escape_string($link,$_POST['prenoms'])."',
			        '".mysqli_real_escape_string($link,$_POST['datenais'])."',
			        '".mysqli_real_escape_string($link,$_POST['resume'])."',
		            '".mysqli_real_escape_string($link,$_POST['email'])."',
		            '".mysqli_real_escape_string($link,$_POST['specialisation'])."',
		            '".mysqli_real_escape_string($link,$_POST['telephone'])."',
		            '".mysqli_real_escape_string($link,$_POST['mdp'])."',
		            '".mysqli_real_escape_string($link,$_FILES['image']['name'])."')";
			$result=mysqli_query($link ,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
		    }
		}
	}	
	if (isset($_GET['id'])){
			$update="SELECT * FROM articles WHERE id=".$_GET['id'];
			$res=mysql_query($link,$update);
			 $dataU=mysql_fetch_array($res);
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
    <div class="container">
			    <div class="row">
				    <div class="col-md-2"></div>
				    <div class="col-md-8">
                       <form action="" method="POST" role="form" enctype="multipart/form-data">

						<center><legend> Modifier votre profil </legend></center>
						    <span> <?php echo $msg; ?> </span>

						    <div class="form-group">
							    <label for="">Nom</label>
							    <input name="nom" type="text" class="form-control" id="" placeholder="Nom">
						    </div>

						    <div class="form-group">
							    <label for="">Prenoms</label>
							    <input name="prenoms" type="text" class="form-control" id="" placeholder="Prenoms">
						    </div>

						    <div class="form-group">
							    <label for="">Date de naissance</label>
							    <input name="datenais" type="date" class="form-control" id="" placeholder="">
						    </div>

						    <div class="form-group">
							    <label for="">Resume</label>
							    <input name="resume" type="date" class="form-control" id="" placeholder="Resume">
						    </div>

						    <div class="form-group">
							    <label for="">Email</label>
							    <input name="email" type="email" class="form-control"s id="" placeholder="Email">
						    </div>
                           
                           <div class="form-group">
							    <label for="">Mot de passe</label>
							    <input name="mdp" type="password" class="form-control" id="" placeholder="mot de passe">
						    </div>

						    <div class="form-group">
							    <label for="">Telephone</label>
							    <input name="telephone" type="text" class="form-control" id="" placeholder="Telephone">
						    </div>

						    <div class="form-group">
							    <label for="">Photo</label>
							    <input name="image" type="file" class="form-control" id="" placeholder="">
						    </div>

						    <button name="btnModifier" type="submit" class="btn btn-primary btn-sm btn-block">Modifier</button>
				        </form>
				    </div ><!-- /div col-md-8 -->
				    <div class="col-md-2"></div>
			    </div><!-- row -->
			</div><br><br><!--/div container-->
		    <br>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>	
	</body>
</html>