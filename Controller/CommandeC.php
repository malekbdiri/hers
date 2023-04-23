<?php
   include  'C:/xampp/htdocs/tache_livre/config.php';
   include  'C:/xampp/htdocs/tache_livre/Model/commande.php';
class commandeC{
    function afficherCommande() {
        $sql = "SELECT * FROM commande ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

             $liste = $query->fetchAll();
            return $liste;
        } catch(Exception $e){
            $e->getMessage();
        }
    }
    function ajoutercommande($id_produit,$id_user,$email,$carte_bancaire)
    {
                       
try {
    $sql = "INSERT INTO commande(id_produit,id_user,email,carte_bancaire)
    VALUES('$id_produit','$id_user','$email','$carte_bancaire')";
    
    $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute();
    } catch(Exception $e){
        $e->getMessage();
    }
}

function supprimercommande($id_commande){
    $db = config::getConnexion();
    $sql = "DELETE FROM commande where id_commande=:id_commande";

    try {
        $query = $db->prepare($sql);
        $query->execute(['id_commande'=>$id_commande]);
    }catch(Exception $e){
        $e->getMessage();
    }
}

public function modifierCommande($Commande,$id_commande, $id_produit)
{
    $sql="UPDATE commande SET id_produit=:id_produit,id_user=:id_user ,email=:email ,carte_bancaire=:carte_bancaire WHERE id_commande=:id_commande";
    $db = config::getConnexion();
    $query=$db->prepare($sql);

    $query->bindValue(':id_produit',$id_produit);
    $query->bindValue(':id_user',$Commande->getid_user());
    $query->bindValue(':email',$Commande->getemail());
    $query->bindValue(':carte_bancaire',$Commande->getcarte_bancaire());
    $query->bindValue(':id_commande',$id_commande);

    $query->execute();
}

function affichermodif($id_commande) {
    $sql = "SELECT * FROM commande where id_commande=:id_commande";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute(['id_commande'=>$id_commande]);

         $liste = $query->fetchAll();
        return $liste;
    } catch(Exception $e){
        $e->getMessage();
    }
}
public function tricommande(){
    $pdo = config::getConnexion();
    try {
    $query = $pdo->prepare(
        "SELECT * FROM commande ORDER BY id_produit asc"
    );
    $query->execute();
    $liste = $query->fetchAll();

    return $liste;
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
function sendmail()
{
    $mailto = "nour.farhat@esprit.tn";
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
    $mail->Username = "nour.farhat@esprit.tn";
    $mail->Password = "211JFT8987";
    $mail->SetFrom("nour.farhat@esprit.tn");
    $mail->Subject = $mailSub;
    $mail->Body = $mailMsg;
    $mail->AddAddress($mailto);
    
    if (!$mail->Send()) {
        echo "Mail Not Sent to ";
    } 
    else {
        header('Location: listcommande.php');
    }
}
}
?>