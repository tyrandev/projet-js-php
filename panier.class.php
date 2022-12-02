<?php
class panier{

  private $DB;
  public function __construct($DB){
    if(!isset($_SESSION)){
      session_start();
    }
    if(!isset($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }
    $this->DB = $DB;
    if(isset($_GET['delPanier'])){
      $this->del($_GET['delPanier']);
    }
    if(isset($_POST['panier'])){
      $this->recalc();
    }
  }


  public function recalc(){
    foreach($_SESSION['panier'] as $produit_id => $quantity){
      if(isset($_POST['panier']['quantity'][$produit_id])){
        $_SESSION['panier'][$produit_id] = $_POST['panier']['quantity'][$produit_id];
      }
    }
  }

  public function total(){
    $total = 0;
    $ids=array_keys($_SESSION['panier']);
    if(empty($ids)){
      $produits = array();
    }else{
        $produits = $this->DB->query('SELECT * FROM produits where id in ('.implode(',',$ids).')');
    }
    foreach($produits as $produit){
      $total += $produit->prix * $_SESSION['panier'][$produit->id];
    }
    return $total;
  }

  public function count(){
    return array_sum($_SESSION['panier']);
  }


  public function add($produit_id){
    if(isset($_SESSION['panier'][$produit_id])){
      $_SESSION['panier'][$produit_id] ++;
    } else{
        $_SESSION['panier'][$produit_id] = 1;
    }

  }

  public function del($produit_id){
    unset($_SESSION['panier'][$produit_id]);
  }

}
?>
