<?php
  
   include  'C:/xampp/htdocs/tache_livre/Controller/CommandeC.php';
  class mailc{
    function recuperercommande($id_user){
        $sql="SELECT * from commande where id_user=:id_user ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }


  }
}
$mail=new mailc();
$liste=$mail->recuperercommande($_POST['id_user']);
foreach($liste as $row){

    $email=$row['email'];


}
$mailto = $email;
$mailSub = 'commande';
$mailMsg = 'votre commande a été effectué avec succés un livreur va vous contacter';
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 465
$mail->IsHTML(true);
$mail->addAttachment('images/img_1.jpg');
$mail->Username = "nour.farhat@esprit.tn";
$mail->Password = "nour1010";
$mail->SetFrom("nour.farhat@esprit.tn");
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress($mailto);

if (!$mail->Send()) {
    echo "Mail Not Sent to ";
} else {
    header('Location: listcommande.php');
}
?>