<?php

include "../Controller/UserC.php";
$Users_uid=$_POST["users_uid"];
$Email=$_POST["email"];
$Users_pwd=$_POST["users_pwd"];
$Users_id=$_POST["users_id"];
if((!isset($Users_uid) || empty($Users_uid))
    || (!isset($Email) || empty($Email))
    || (!isset($Users_pwd) || empty($Users_pwd)))
    
    {
        echo("FILL ALL THE FIELDS !!!");
    }
    else
    {
        $client = new Client($Users_uid,$Email,$Users_pwd);
        $clientC = new ClientC();
        $clientC->updateClient($Users_id,$client);
        Header('Location: admin.php');
        exit();
    }

?>