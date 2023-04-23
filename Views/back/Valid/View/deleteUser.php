<?php 

include "../Controller/UserC.php";


$clientC = new ClientC();

$clientC->deleteclient($_GET['id']);

Header("Location: admin.php");

?>