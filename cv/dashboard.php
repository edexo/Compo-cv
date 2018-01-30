
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
    <div class="container-fluid">        

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
            // On récupère la derniere codeuse
            $req=$bdd->query('SELECT id,nom,prenoms,datenais,image,specialisation,email,mdp,telephone,resume FROM codeuses ORDER BY id, nom DESC LIMIT 0, 1');
            while ($donnees=$req->fetch())
            {?>
                <?php include('dashaccueil.php');
 ?>

            <div class="media-right">
                <div class="">
                    <h3 style="color: black"><!-- htmlspecialchars : permet de proteger les textes -->
                        <p>
                        <?php echo htmlspecialchars($donnees['nom']); ?></br>
                        Né le:<?php echo htmlspecialchars($donnees['datenais']); ?></br>
                        Telephone:<?php echo htmlspecialchars($donnees['telephone']); ?></br>
                        Email:<?php echo htmlspecialchars($donnees['email']); ?></br>
                        </p>
                    </h3>
                    </div><!-- col-sm-6 col-md-4" -->
            </div><!-- media-right -->

            <div class="media-body">
                <h3 class="media-heading" style="color: green"> Resume de la codeuse</h3>
            </div><!-- media-body-->

            <div class="media-right">
                <img src="upload/<?php echo $donnees['image'];?>" class="avatar-large" alt="Mon Image"/>

            </div><!--media-right-->
            <?php
            } // Fin de la boucle des articles
            $req->closeCursor();
            ?>

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="media-body">
                    <p>
                        <center>
                           <h3 class="media-heading">Mes Experiences</h3>
                           <h3 class="media-heading">Mes Diplomes</h3>
                           <h3 class="media-heading">Mes Centres d'interets</h3>
                    </center>
                   </p> 
                </div>
            </div>
        <div class="col-sm-4"></div>
        
    </div><!--  <div class="row"> -->
    </div><!-- container-fluid -->
    <!-- jQuery -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
    </body>
</html>