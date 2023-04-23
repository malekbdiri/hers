<?php 

include "../Controller/UserC.php";


$clientC = new ClientC();

$clientC->blockclient($_GET['id']);

Header("Location: admin.php");

?>