<?php 
class commande {
    private $id_commande;
    private $id_produit;
    private $id_user;
    private $email;
    private $carte_bancaire;
  

   function __construct($id_produit,$id_user,$email,$carte_bancaire){
        $this->id_produit=$id_produit;
        $this->id_user=$id_user;
        $this->email=$email;
        $this->carte_bancaire=$carte_bancaire;
        

    }

    //GE0T000000000000TERS
    function getid_produit(){
        return $this->id_produit;
    }
    function getid_user(){
        return $this->id_user;
    }
   
    function getemail(){
        return $this->email;
    }
    function getcarte_bancaire(){
        return $this->carte_bancaire;
    }
  

    //SETTERS
    function setid_produit(int $id_produit){
        $this->id_produit=$id_produit;
    }
    function setid_user(int $id_user){
        $this->id_user=$id_user;
    }
    function setemail(string $email){
        $this->id_user=$id_user;
    }
    function setcarte_bancaire(string $carte_bancaire){
        $this->carte_bancaire=$carte_bancaire;
    }
   
  
}
?>