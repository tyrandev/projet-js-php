<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Se connecter en tant qu'administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: auto; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Se connecter en tant qu'administrateur</h2>
        <p>Encodez vos identifiants d'administrateur pour vous connecter</p>
        <form  method="POST">
        <div>
          <label>Identifiant</label>
          <input type="text" name="idadmin" required>
          </br>
          <label>Mot de passe</label>
          <input type="password" name="mdpadmin">
        </div>

        <input type="submit" class="btn btn-primary" value="Valider">
        <a href="index.php">Retourner au menu principal</a>
      </form>


    </div>

<?php
$idadmin = "";
$mdpadmin = "";
if(isset($_POST['idadmin'])){
  $idadmin = $_POST['idadmin'];
  if(isset($_POST['mdpadmin'])){
    $mdpadmin = $_POST['mdpadmin'];
    if(($idadmin == "admin")&& ($mdpadmin=="admin")){
      header("location:../projettm/menuadmin.php");
    }

  }
}

?>
</body>
</html>
