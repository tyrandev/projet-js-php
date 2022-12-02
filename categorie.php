<?php require 'header.php' ?>

<?php if(isset($_GET['id'])){
  $produits =$DB->query('SELECT * FROM produits where categorie =:id', array('id' => $_GET['id']));?>

</br>
<div class="col-md-8">
  <div class="row">

    <?php
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
<?php }?>

<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<?php include 'details-modal.php';
?>
</div>
