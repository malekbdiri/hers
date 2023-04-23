<?php
include 'C:/xampp/htdocs/projet/Controller/ReclamationC.php';
$reclamationC = new ReclamationC();
$reclamationC->supprimerReclamation($_GET["idclient"]);
header('Location:afficherListeReclamation.php');

?>