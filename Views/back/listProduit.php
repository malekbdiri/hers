<?php 
    include 'C:/xampp/htdocs/tache_livre/Controller/ProduitC.php';
    $ProduitC = new ProduitC();
    $list = $ProduitC->afficherproduit();
  
?>
<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tache_prod</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
   
<div style="width:1450px;"id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Table produit</h1>                      
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <button class="btn btn-primary m-1 float-right"><a href="./addProduit.php"
                        class="text-light"><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;</i>ajouter nouveau produit</a>
                    </button>
                    <a href="trieproduit.php" class="btn pull-right" > Trier la liste </a>
                    <br>
                                 Produit
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>reference</th>
                                            <th>Nom</th>
                                            <th>Prix</th>
                                            <th>Imag</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                   
                                    <?php    foreach ($list as $row)  { ?>
                                        <tr>
                                            <td> <?php    echo $row['reference'] ?></td>
                                            <td> <?php    echo $row['name'] ?></td>
                                            <td> <?php    echo $row['price'] ?></td>
                                            <!-- <td><img style="widht:5px ; hight:5px;" src=" <"></td> -->
                                             <td> <img style="width:50px;"src="<?php echo $row['pd_img']; ?>" alt=""> </td>

                                            <td>
                                                <?php echo'
                                            <button class="btn btn-primary"><a href="./updateProduit.php?updateid=' . $row['reference'] . '" class="text-light"> <i class="fa fas fa-edit style=font-size:36px" ></i></a></button>
                                            <button class="btn btn-danger"><a href="./removeProduit.php?deleteid=' . $row['reference'] . '" class="text-light"> <i class="fa fa-trash"></i>'

                                            ?>

                                            </td>
                                        </tr>
                                        <?php     } ?>
                                          
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
            </div>
        </div>

        </div>
        
        
        
      </div>
    </div>
  </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
  $(document).ready(function(){
    $("table").DataTable();
  });
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <div class="mode">
    Dark mode:
    <span class="change">OFF</span>
</div>
<style>

.mode {
    float:right;
}
.change {
    cursor: pointer;
    border: 1px solid #555;
    border-radius: 40%;
    width: 20px;
    text-align: center;
    padding: 5px;
    margin-left: 8px;
}
.dark{
    background-color: #222;
    color: #737373;
}
</style>
<script>
$( ".change" ).on("click", function() {
    if( $( "body" ).hasClass( "dark" )) {
        $( "body" ).removeClass( "dark" );
        $( ".change" ).text( "OFF" );
    } else {
        $( "body" ).addClass( "dark" );
        $( ".change" ).text( "ON" );
    }
});
</script>

    </body>
</html>