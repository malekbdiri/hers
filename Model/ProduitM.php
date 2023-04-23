<?php 
class Produit {
    private $reference;
    private $name;
    private $price;
    private $pd_img;
  

    function __construct($reference,$name,$price,$pd_img){
        $this->reference=$reference;
        $this->name=$name;
        $this->price=$price;
        $this->pd_img=$pd_img;
        

    }

    //GE0T000000000000TERS
    function getreference(){
        return $this->reference;
    }
    function getname(){
        return $this->name;
    }
   
    function getprice(){
        return $this->price;
    }
    function getpd_img(){
        return $this->pd_img;
    }
  

    //SETTERS
    function setreference(int $reference){
        $this->reference=$reference;
    }
    function setname(string $name){
        $this->name=$name;
    }
   
   function setprice(int $price){
       $this->price=$price;
   }
    
    function setpd_img(int $pd_img){
        $this->pd_img=$pd_img;
    }
    
}
?>