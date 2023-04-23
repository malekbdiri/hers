<?php
include 'C:/xampp/htdocs/tache_livre/Controller/CommandeC.php';
require 'C:/xampp/htdocs/tache_livre/Views/front/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/tache_livre/Views/front/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/tache_livre/Views/front/PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/PHPMailerAutoload.php';
if (isset($_POST["submit"]))
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
    $mail->Subject = $_POST["adresse"];
    $mail->Body    = 'votre commande a été effectué avec succés et va etre livré sur votre adresse ';


    $mail->send();
    echo 'verifier votre mail pour la confirmation du commande';

}

?>