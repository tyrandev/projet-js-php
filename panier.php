<?php require 'header.php'?>

<div class="checkout">
	<div class="title">
		<div class="wrap">
			<h2 class="first">Liste des articles se trouvant dans le panier</h2>
		</div>
	</div>
	<form method="post" action="panier.php">
		<table>
			<tr>
				<th>Produit</th>
				<th>Nom du produit</th>
				<th>Prix</th>
				<th>Quantité</th>
				<th>Action</th>
			</tr>

			<?php
			$ids=array_keys($_SESSION['panier']);
			if(empty($ids)){
				$produits = array();
			}else{
					$produits = $DB->query('SELECT * FROM produits where id in ('.implode(',',$ids).')');
			}
			foreach($produits as $produit):
			?>
			<tr>
				<td><img src="<?php echo $produit->image; ?>" width="90"></td>
				<td><?php echo $produit->nom; ?></td>
				<td><?php echo $produit->prix; ?></td>
				<td><span><input type = "text" name="panier[quantity][<?php echo $produit->id;?>]" value="<?php echo $_SESSION['panier'][$produit->id];?>"></span></td>
				<td><a href="panier.php?delPanier=<?php echo $produit->id;?>" class="del"> <img src="images/delete.png" height="30px"></a></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<input class="btn" type="submit" value="Recalculer">
		<div class="total">Total : <span class="total"><?php echo number_format($panier->total(),2,',',' ');?>€</span></div>


	</form>
</div>
<?php require 'footer.php'?>
