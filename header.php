<?php
require '_header.php';
?>
<!DOCTYPE html>


<script>
function changeText() {
 document.getElementById(button_id).innerHTML = 'Lock';
}
</script>


<html>

<head>
  <title>Anti-Covid Shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
<meta charset="UTF-8">
	<!--  <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>-->
  <script src="js/bootstrap.min.js"></script>

</head>

<body>
<!-- Barre du dessus avec les catégories-->
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container">
    <a href="/projettm/index.php" class="navbar-brand" id="text">Anti-Covid Shop</a>
    <ul class="nav navbar-nav">
      <?php $categories = $DB->query('SELECT * FROM categorie');
      foreach ($categories as $categorie): ?>
    <li class="cat"><a  id="text" href="categorie.php?id=<?php echo $categorie->id;?>"><?php echo $categorie->categorie ?></a></li>

<?php endforeach?>
  <li class="panier"><a href="panier.php" id="panier"><img src="images/panier.png" height="30px"></a></li>
  <li class="items">Nombre d'éléments :  <span id="count"><?php echo $panier->count();?></span></li>
<li class="tot">Total : <span><span id="total"><?php echo number_format($panier->total(),2,',',' ');?></span>€</span></li>

<?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  ?>
    <li><button class="btnLog"><a id="text" href="logout.php">Se déconnecter</a></button></li>

<?php  }else{?>
  <li><button class="btnLog"><a id="text" href="register.php">S'inscrire</a></button></li>
  <li><button class="btnLog"><a id="text" href="login.php">Se connecter</a></button></li>
<?php }?>
  <li><button class="btnLog"><a id="text" href="admin.php">Admin</a></button></li>


</ul>



    </div>

</nav>
