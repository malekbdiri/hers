<?php
  class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=projet', 'root', '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
    function select($table,$query="1"){
      global $conn;
      $sql="SELECT *FROM".$table."WHERE".$query.";";
      $res=$pdo->query($sql);
      if($res)
      {
        if(PDO_num_rows($res)>0)
        {
          $data=[];
          while($x=PDO_fetch_assoc($res)){
            $data[]=$x;
          }
          return $data;
        }
      }
      return[];
    }
  }
?>
