<?php 
    include  'C:/xampp/htdocs/tache_livre/config.php';
    include  'C:/xampp/htdocs/tache_livre/Model/ProduitM.php';

    class ProduitC {


        function afficherProduit() {
            $sql = "SELECT * FROM produit ";
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


        function ajouterproduit($produit){
                            
            $reference=$produit->getreference();
            $name=$produit->getname();
            $price=$produit->getprice();
            $pd_img=$produit->getpd_img();
    try {
        $sql = "INSERT INTO produit (reference,name,price,pd_img)
        VALUES('$reference','$name','$price','$pd_img')";

        $db = config::getConnexion();
            $query = $db->prepare($sql);
            $query->execute();
        } catch(Exception $e){
            $e->getMessage();
        }
    }

    function supprimerproduit($reference){
        $db = config::getConnexion();
        $sql = "DELETE FROM produit where reference=:reference";

        try {
            $query = $db->prepare($sql);
            $query->execute(['reference'=>$reference]);
        }catch(Exception $e){
            $e->getMessage();
        }
    }

    function modifierProduit($produit,$reference){
            
           
        $name=$produit->getname();
        $price=$produit->getprice();
        $pd_img=$produit->getpd_img();
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
            "UPDATE produit SET
             name = '$name',  price= '$price',pd_img= '$pd_img'
            WHERE reference = '$reference'");
            $query->execute();
            echo"succ";
        } catch (PDOException $e) {
            $e->getMessage();

        }
    }
    function affichermodif($ref) {
        $sql = "SELECT * FROM produit where reference=:ref";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['ref'=>$ref]);

             $liste = $query->fetchAll();
            return $liste;
        } catch(Exception $e){
            $e->getMessage();
        }
    }
    public function triProd(){
        $pdo = config::getConnexion();
        try {
        $query = $pdo->prepare(
            "SELECT * FROM produit ORDER BY price asc"
        );
        $query->execute();
        $liste = $query->fetchAll();
    
        return $liste;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
  

    function calculate_stats($produit_table) {
        $sql = "SELECT MIN(price) AS min_price, MAX(price) AS max_price, AVG(price) AS avg_price, SUM(price) AS total_price FROM $produit_table";
        return $sql;
    }
    }       