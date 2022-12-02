
<?php require 'header.php' ?>

<div id="background-image">
</div>

<div class="col-md-2"></div>


<!-- Liste des produits-->
<div class="col-md-8">
  <div class="row">
    <h2 class"text-center" id="tousnosproduits">Tous nos produits</h2>

    <?php  $produits = $DB->query('SELECT * FROM produits');
    foreach ($produits as $produit): ?>
    <div class="col-md-3">
      <h4><?php echo $produit->nom; ?></h4>
      <img src="<?php echo $produit->image; ?>" alt=$"<?php echo $produit->nom;?>" id="images"/ />

      <p class="list-price text-danger">Prix de base : <s><?php echo $produit->prix_de_base; ?>€</s></p>
      <p class="prix">Notre prix : <?php echo $produit->prix; ?>€</p>
      <button class="add addPanier" href="addpanier.php?id=<?php echo $produit->id;?>" type="button" ><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>
    </div>
    <?php endforeach?>




</div>
<?php require 'footer.php'?>
<?php include 'details-modal.php';
?>
</div>
