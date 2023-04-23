<?php 

include "../Controller/UserC.php";


$clientC = new ClientC();

$clientC->deblockclient($_GET['id']);

Header("Location: admin.php");

?>