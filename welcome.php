<?php
// start de session
session_start();

// verifie si l'utilisateur est connecte s'il n'est pas on redirige le navigateur vers la page principale
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; background-color: #001530; color:#FFFFFF}
    </style>
</head>
<body>
    <h1 class="my-5">Bonjour, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue dans la boutique anticovid.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Réinitialiser le mot de passe</a>
        <a href="logout.php" class="btn btn-danger ml-3">Se déconnecter</a>
		<a href="index.php" class="btn btn-warning">Retour au menu principal</a>
    </p>
</body>
</html>
