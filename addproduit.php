<?php
require_once "config.php";

$nom = $nomErr = "";
$prix = $prixErr = "";
$categorie = $categorieErr = "";


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css%22%3E">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
        table{
          margin : auto;
          border:medium solid #001530;
        }

        th{
          text-align: center;
        }
        td, th{
          border:thin solid #001530;
          padding-top: 20px;
          padding-bottom: 20px;
          padding-left: 20px;
          padding-right: 20px;
        }
        .form-group{
          padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Ajouter un produit</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table>
              <tr>
                <td>
                  <label>Nom</label>
                </td>
                <td>
                  <input type="text" name="nom" class="form-control <?php echo (!empty($nomErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $nom; ?>">
                </td>
              </tr>
              <tr>
                <td>
                  <label>Prix</label>
                </td>
                <td>
                  <input type="text" name="prix" class="form-control <?php echo (!empty($prixErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $prix; ?>">

                </td>
              </tr>
              <tr>
                <td>
                  <label>Catégorie</label>
                </td>
                <td>
                  <input type="text" name="categorie" class="form-control <?php echo (!empty($categorieErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $categorie; ?>">

                </td>
              </tr>

            </table>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Valider">
                <input type="reset" class="btn btn-secondary ml-2" value="Réinitialiser">
                <a href="index.php">Retourner au menu principal</a>
            </div>
          </form>
    </div>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["nom"])){
  	$nomErr = "Nom est requis";
	}
	else {
		$nom = '"'.$_POST["nom"].'"';
	}

	if(empty($_POST["prix"])){
		$prixErr = "Prix est requis";
	}
	else {
		$prix = $_POST["prix"];
	}

	if(empty($_POST["categorie"])){
		$categorieErr = "Categorie est requis";
	}
	else {
		$categorie = $_POST["categorie"];
	}



		$sql = "INSERT INTO produits (nom, prix, prix_de_base, categorie, image, description) VALUES ($nom, $prix, $prix + 2, $categorie, 'images/default.png','')";
		if (mysqli_query($link, $sql)) {
			  echo "Produit ajouté";
		} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}

	mysqli_close($link);



}
?>
</body>
</html>
