<?php
include_once 'C:/xampp/htdocs/projet/Controller/reponseC.php';
$reclamationC=new reponseC();
$reclamationC->supprimerReponse($_GET["idreponse"]);
header('Location:afficherReponse.php');//bech nbqach nmchy f page vide (yaamel suppresion w yarjaae directement ll page )