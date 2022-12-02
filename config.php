<?php

//informations necessaires pour se connecter
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'anticovidshop');
 
/* Connexion a notre base des donnes*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//verification de connexion
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>