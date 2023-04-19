<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" src="logom.ico"/>
    <link href="admin.css" rel="stylesheet" id="bootstrap-css">
    <script type="text/javascript" src="admin.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap.min.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title> Gestion des utilisateurs </title>
</head>

<header>
<nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="pageadmin.php"><img src="logom.png" alt="Logo MW" style="height:50px;float:inline-start;display:inline-block;margin-right:10px;"></a>                   

                <a class="navbar-brand" >
                   Connecté en tant  qu'Administrateur
                </a>


                <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                    MENU
                </button>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
           
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" target="_blank">
                
                <?php

                       /* echo(`.$ID_utilisateur.`);

                            $db = new PDO('mysql:host=localhost;dbname=projetannuel;charset=utf8mb4', 'root', 'root');
                            $stmt = $db->prepare("SELECT ID_role FROM utilisateur WHERE ID_utilisateur = $ID_utilisateur");

                            $stmt->bindParam(':ID_utilisateur', $ID_utilisateur);
                            $stmt->execute();



                        */
                        ?> 

                        </a>
                    </li>
                    <li><a href="pagelogin.php"><B>Se déconnecter</B></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<body>
    <div class="container-fluid main-container">
        <div class="col-md-2 sidebar">
            <div class="row">
                <!-- uncomment code for absolute positioning tweek see top comment in css -->
                <div class="absolute-wrapper"> </div>
                <!-- Menu -->
                <div class="side-menu">
                    <nav class="navbar navbar-default" role="navigation">
                        <!-- Main Menu -->
                        <div class="side-menu-container">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="pageadmin.php"><span class="glyphicon glyphicon-user"></span> Utilisateurs</a></li>
                                <li><a href="pageadminrole.php"><span class="glyphicon glyphicon-briefcase"></span> Rôles</a></li>
                                <li><a href="pageadminfrais.php"><span class="glyphicon glyphicon-usd"></span> Frais</a></li>

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>

                </div>
            </div>
        </div>

        <div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Gestion des utilisateurs
                </div>
                <body>
<div class="container">
<h3>Enregistrer un utilisateur</h3>
    <div class="row">
        <form action="pageadmin.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="mot_de_passe" class="form-label">Mot de passe</label>
                <input name="mot_de_passe" type="text" class="form-control" id="mot_de_passe">
            </div>

            <div class="mb-3">
                <label for="IDRole" class="form-label">Numéro de Rôle</label>
                <input type="text" name="ID_Role" class="form-control" id="IDRole">
            </div>

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="Nom" class="form-control" id="nom">
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" name="Prenom" class="form-control" id="prenom">
            </div>


            <input type="submit" class="btn btn-primary" value="Enregistrer"></input>

<?php
    if (isset($_POST['email']) && isset($_POST['mot_de_passe']) && isset($_POST['ID_Role']) && isset($_POST['Nom']) && isset($_POST['Prenom'])){
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];
        $ID_Role = $_POST['ID_Role'];
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];

        $db = new PDO('mysql:host=localhost;dbname=projetannuel;charset=utf8', 'root', 'root');

        $stmt = $db->prepare("INSERT INTO utilisateur (email, mot_de_passe, Nom, Prenom,ID_Role) VALUES (:email, :mot_de_passe, :Nom, :Prenom, :ID_Role)");
        $stmt->bindParam(':mot_de_passe', $mot_de_passe);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':Prenom', $Prenom);
        $stmt->bindParam(':Nom', $Nom);
        $stmt->bindParam(':ID_Role', $ID_Role);

        $stmt->execute();

        echo "<script> alert('Utilisateur bien ajoute') </script>";

}
?>


</form>

<br>

                <div class="panel-body">
                </form>
                <section id="content">
<div class="container autumn-text  ">
            <h3>Utilisateurs enregistré récemments</h3>
        <table id="table1" class="autumn-text1 tableuser" style="width: 100%">
            <thead>
                <tr class="tableuser">
                    <th scope="col">Email</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Rôle</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
            <?php

$base = new PDO ('mysql:host=localhost;dbname=projetannuel;charset=utf8mb4', 'root', 'root');

$donnees = $base->query("SELECT email ,  Nom, Prenom, ID_Role FROM utilisateur")->fetchAll();



    foreach ($donnees as $row) {
        if ($row['email'] != NULL) {
    ?>
            <tr>
                <td><h5><?=$row['email'];?></h5></td>
                <td><h5><?=$row['Nom']?></h5></td>
                <td><h5><?=$row['Prenom']?></h5></td>
                <td><h5><?=$row['ID_Role']?></h5></td>
                <td>
                    <form method="post" action="modifier_utilisateur.php">
                        <input type="hidden" name="email" value="<?=$row['email']?>">
                        <button type="submit border-none" class="glyphicon glyphicon-pencil"></button>
                    </form>
                </td>
                <td>
                    <form method="post" action="supprimer_utilisateur.php">
                        <input type="hidden" name="email" value="<?=$row['email']?>">
                        <button type="submit border-none" class="glyphicon glyphicon-trash"></button>
                    </form>
                </td>
            </tr>
    <?php
        }
    }
    ?>

                    </section>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.6.3.min.js"integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready( function () {
    $('#table1').DataTable( {
        "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    } );
} );
</script>

</body>

</html>