<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"&times;></span>
        </button>
        <?php
        if(isset($_GET['id'])){
          $produit =$DB->query('SELECT * FROM produits where id =:id', array('id' => $_GET['id']));
        foreach ($produits as $produit): ?>
        <h4 class="modal-title text-center" id= "text" name="nomp"><?php echo $produit->nom;?></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img src="<?php echo $produit->image;?>" class="details img-responsive" />
              </div>
            </div>
            <div class="col-sm-6">
              <h4>Détails</h4>
              <p><?php echo $produit->description;?></p>
              <hr/>
              <p>Prix : <?php echo $produit->prix; $prixp = $produit->prix;?> </p>
              <p>Catégorie : <?php if( $produit->categorie = 1) {echo "Masques";}
                                    elseif($produit->categorie = 2){echo "Gel hydroalcoolique";} else { echo "Autres";}?></p>
              <form action="add_cart.php" method="post">
                <div clas="form-group">
                  <div class="col-xs-3">
                    <label for="quantity" id="quantity-label">Quantité</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" required/>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php  endforeach;
  }else{
    echo "error";
  } ?>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>
      </div>
    </div>
  </div>
</div>
