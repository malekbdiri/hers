<?php 
include 'C:/xampp/htdocs/tache_livre/Controller/CommandeC.php';
$CommandeC = new CommandeC();
    $CommandeC->supprimercommande( $_GET['deleteid']);
   

        header("Location: listCommande.php");
   

    

?>