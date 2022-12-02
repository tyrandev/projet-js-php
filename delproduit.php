<?php
require_once "config.php";
require "_header.php"

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css%22%3E">
    <style>
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Supprimer un produit</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <select name="nom" size="1">
            <?php  $produits = $DB->query('SELECT * FROM produits');
            foreach ($produits as $produit): ?>
            <option><?php echo $produit->nom; ?>
            <?php endforeach?>
          </select>

            <div class="form-group">
              </br>
                <input type="submit" class="btn btn-primary" value="Valider">
                <input type="reset" class="btn btn-secondary ml-2" value="Réinitialiser">
              </br><a href="index.php">Retourner au menu principal</a>
            </div>
          </form>
    </div>
<?php
$nom ="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["nom"])){
  	echo "Nom est requis";
	}
	else {
		$nom = $_POST["nom"];
	}

		$sql = "DELETE FROM produits where nom='$nom'";
		if (mysqli_query($link, $sql)) {
			  echo "Produit supprimé";
		} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}


	mysqli_close($link);

}


?>
</body>
</html>
