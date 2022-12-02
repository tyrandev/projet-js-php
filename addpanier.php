<?php
require '_header.php';
$json = array('error' => true);
if(isset($_GET['id'])){
  $produit =$DB->query('SELECT * FROM produits where id =:id', array('id' => $_GET['id']));
  if(empty($produit)){
    $json['message'] = "Ce produit n'existe pas";
  }
  $panier->add($produit[0]->id);
  $json['error'] = false;
  $json['total'] = number_format($panier->total());
  $json['count'] = $panier->count();
  $json['message'] = 'Le produit a bien été ajouté';
} else{
  $json['message'] = "Pas de produit sélectionné";
}
echo json_encode($json);
