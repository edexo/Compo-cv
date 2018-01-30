<?php include('dashaccueil.php');
    $msg="";
	if (isset($_POST['btnValider'])){
		$sql= "INSERT INTO cv (facebook,twitter,github,id_codeuses)
			VALUES('".mysqli_real_escape_string($link,$_POST['facebook'])."',
			        '".mysqli_real_escape_string($link,$_POST['twitter'])."',
			        '".mysqli_real_escape_string($link,$_POST['github'])."',
			        '".mysqli_real_escape_string($link,$_POST['matricle'])."')";
			$result=mysqli_query($link ,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
			}
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

                    	<center><legend> Creer votre CV </legend></center>
						    <span> <?php echo $msg; ?> </span>

						    <div class="form-group">
							    <label for="">Facebook</label>
							    <input name="facebook" type="text" class="form-control" id="" placeholder="Adresse facebook">
						    </div>

						    <div class="form-group">
							    <label for="">Twitter</label>
							    <input name="twitter" type="text" class="form-control" id="" placeholder="Adresse twitter">
						    </div>

						    <div class="form-group">
							    <label for="">Github</label>
							    <input name="github" type="text" class="form-control" id="" placeholder="Adresse githb">
						    </div>
						    <div class="form-group">
							    <label for=""> ID codeuses</label>
							    <select name="matricule" class="form-control">
					            <?php
                            //recupere toutes les categories dans la bd
					        $sqlrecup= "SELECT * FROM codeuses";
					        //execute la requete et on la stock dans $repcategorie
					        $repcod= mysqli_query($link,$sqlrecup);
					        //mysqli_fetch_array = permet de transformer le resultat $repcat en variable de type tableau $datacat
					        // la boucle while nous permet de parcourir le tableau $datacat et de recuperer les valeurs de chaques elements du tableau $datacat
					         while ($datacod= mysqli_fetch_array($repcod)) {
						    ?>
						    <option value="<?php echo $datacod['id'];?>">
						        <?php echo $datacod['id'].'-'.$datacod['nom'];?>
						    </option>
						    <?php
					        }
					        ?>			
					            </select><!-- /select categories -->
				            </div><!-- /div form-group categories -->
						    <br>
						    <button name="btnValider" type="submit" class="btn btn-primary btn-sm btn-block">Valider</button>

                       </form>


</body>
</html>