<?php
include "../Controller/UserC";
?>
<html>
  <head>
  </head>
  <body>
<?php
try {
$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}

     if(isset($_POST['search_box']) OR isset($_POST['search_btn'])){
     $search_box = $_POST['search_box'];
     $select_products =$dbo->prepare("SELECT * FROM users WHERE users_id LIKE '%{$search_box}%'"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="empty">
      <input type="hidden" name="pid" value="<?= $fetch_product['users_uid']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['users_id']; ?>">
      <div class="name"><?= $fetch_product['users_pwd']; ?>  exists</div>
     
      
   </form>
   <?php
         }
      }else{
         echo '<p class="empty">no reclamation found!</p>';
      }
   }
   ?>
   </body>
</html>
