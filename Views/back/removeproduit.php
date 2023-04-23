<?php 
include 'C:/xampp/htdocs/tache_livre/Controller/ProduitC.php';
$ProduitC = new ProduitC();
    $ProduitC->supprimerproduit( $_GET['deleteid']);
   

        header("Location: listProduit.php");
   

    

?>