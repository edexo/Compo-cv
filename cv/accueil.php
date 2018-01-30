<?php 
    session_start();
include('menu.php');     
?>
        <div class="container" style="opacity: 0.85; padding:10px; ">
            <div class="row-padding">
                <h2 class="text-primary border border-primary border-top-0 border-right-0 border-left-0">Nos offres</h2>

                <?php
                // Connexion à la base de données
                // une autre manière de se connecter à la base de données
                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=db_cvs;charset=utf8','root', '');
                    }
                    catch(Exception $se)
                    {
                            die('Erreur : '.$se->getMessage());
                    }

                    // On récupère les 3 derniers articles
                    $req = $bdd->query('SELECT id,nom,prenoms,datenais,photo,specialisation,email,mdp,telephone,resume FROM codeuses ORDER BY id, nom DESC LIMIT 0, 3');
                    while ($donnees=$req->fetch())

                    {?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        
<body>

    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-3">
            <div class="feature">
                <img src="upload/<?php echo $donnees['image'];?>" width="160px" height="130px" alt="Mon Image"/>
                <h3 style="color: black"><!-- htmlspecialchars : permet de proteger les textes -->
                    <?php echo htmlspecialchars($donnees['nom']); ?>
                </h3>
            </div><!-- <div class="col-sm-3"> -->
        </div> <!-- "row"-->

        <div class="col-sm-6">
            <div class="feature">
                <center>
                    <H3><p style="font-size:15px"><?php
                            // On affiche le contenu de l'article
                            // nl2br Elle permet  de convertir les  retours  à la ligne en balises  HTML  <br />
                    echo nl2br(htmlspecialchars($donnees['specialisation']));
                            ?>
                        </p></H3>
                    <h4>
                        <p style="font-size:15px"><?php
                            // On affiche le contenu de l'article
                            // nl2br Elle permet  de convertir les  retours  à la ligne en balises  HTML  <br />
                    echo nl2br(htmlspecialchars($donnees['resume']));
                            ?>
                        </p></P>
                    </h4>
                </center>
            </div><!-- "feature"-->
        </div><!-- <div class="col-sm-6"> -->

        <div class="col-sm-3">
            <div class="feature">
                <center>
                    <p class="text-right" style="font-size:15px">
                        <a href="accueil.php?accueil=<?php echo $donnees['id']; ?>"> Conculter le Cv</a></p>
                </center>
            </div><!--"feature"  -->
        </div>  <!-- "col-sm-3" -->
    </div>
    <?php
        } // Fin de la boucle des articles
        $req->closeCursor();
        ?>
</div><!-- <div class="container-fluid"> -->

<script src="js/jquery-3.2.1.js"></script>
        <!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
