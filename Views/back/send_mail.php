<?php
include 'C:/xampp/htdocs/tache_livre/Controller/CommandeC.php';
require 'C:/xampp/htdocs/tache_livre/Views/back/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/tache_livre/Views/back/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/tache_livre/Views/back/PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/PHPMailerAutoload.php';
if (isset($_POST["save"]))
{
$mail = new PHPMailer(true);

    //Server settings                    // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.gmail.com";                 // Set the SMTP server to send through                                 // Enable SMTP authentication
    $mail->Username   = 'nour.farhat@esprit.tn';                     // SMTP username
    $mail->Password   = 'mpclvdcbqiovplrd';                               // SMTP password                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('nour.farhat@esprit.tn');
    $mail->addAddress($_POST["email"]);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'commande';
    $mail->Body    = 'Votre commande a été effectué avec succés ';

    $mail->send();
    echo 'check your e mail for confirmation';

}

?>