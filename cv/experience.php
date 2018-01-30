<?php include('dashaccueil.php');
	$msg="";
	if (isset($_POST['btnModifier'])){
	    $sql= "INSERT INTO experiences (titre_occupe,date_debut,date_fin,entreprise, id_codeues)
			VALUES('".mysqli_real_escape_string($link,$_POST['poste'])."',
			        '".mysqli_real_escape_string($link,$_POST['datedeb'])."',
			        '".mysqli_real_escape_string($link,$_POST['datefin'])."',
			        '".mysqli_real_escape_string($link,$_POST['entreprise'])."',
		            '".mysqli_real_escape_string($link,$_POST['matricule'])."')";
			$result=mysqli_query($link ,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
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
</head>
<body>
    <div class="container">
			    <div class="row">
				    <div class="col-md-2"></div>
				    <div class="col-md-8">

					    <form action="" method="POST" role="form">

						<legend> Ajouter une experience </legend>
						    <span> <?php echo $msg; ?> </span>

						    <div class="form-group">
							    <label for="">Organisation</label>
							    <input name="organisation" type="text" class="form-control" id="" placeholder="Entreprise">
						    </div>

						    <div class="form-group">
							    <label for="">Poste occupé</label>
							    <input name="poste" type="text" class="form-control" id="" placeholder="Poste occupe">
						    </div>

						    <div class="form-group">
							    <label for="">Date debut</label>
							    <input name="datedeb" type="date" class="form-control" id="" placeholder="Debut de notre fonction">
						    </div>

						    <div class="form-group">
							    <label for="">Date fin</label>
							    <input name="datefin" type="date" class="form-control" id="" placeholder="Fin de votre fonction">
						    </div>

						    <div class="form-group">
							    <label for="">ID codeuses</label>
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
						    <br><br>
						    <button name="btnEnregistrer" type="submit" class="btn btn-primary btn-sm btn-block">Valider</button>
				        </form>
				    </div ><!-- /div col-md-8 -->
				    <div class="col-md-2"></div>
			    </div><!-- row -->
			</div><br><br><!--/div container-->
		    <br>
            <!-- tableau d'affichage-->
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>Numero</th>
							<th>Organisation</th>
							<th>Poste</th>
							<th>Date debut</th>
							<th>Date fin</th>
							<th>ID codeuse</th>
							<th>Action</th>

						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							$list=" SELECT 
										organisation,
										poste,
										datedeb,
										datefin,
										codeuses.id
									FROM experiences
									INNER JOIN codeuses
									ON codeuses.id = experiences.id_codeuses;
									$res= mysqli_query($link,$list);
	                               while ($data = mysqli_fetch_array($res)){?>
						<tr>
							<td><?php echo $n;?></td>
							<td><?php echo $data['entreprise'];?></td>
							<td><?php echo $data['poste'];?></td>
							<td><img src="upload/<?php echo $data['image'];?>" width="30px" height="30px" alt=""></td>
							<td><?php echo $data['libelle'];?></td>
							<td></td>
						</tr>
						<?php $n++;
						 } ?>
					</tbody>
				</table>

			</div>
			

		</div>

</body>
</html>