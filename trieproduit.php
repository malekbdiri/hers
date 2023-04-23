<?php
require_once "./../Controller/ProduitC.php";

$produitC = new ProduitC();

/*$liste = $produitC->triProd();

if ($liste != null) {
    foreach ($liste as $produit) {
        // code for displaying each product
    }
} else {
    echo "No products found.";
}
*/

?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables</title>
        <link href="./../css/styles.css" rel="stylesheet" />
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
                        class="text-light"><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;</i>Add New produit</a>
                    </button>
                    <button class="btn btn-primary m-1 float-right" onclick="generatePDF()">pdf</button>
                   
                    <br>
                                 Produit
                            </div>
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="rechercher" title="Type in a name" >
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Prix</th>
                                            <th>Image</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                   
                                    <?php  
                                    foreach ($liste as $row)  { ?>
                                        <tr>
                                            <td> <?php    echo $row['reference'] ?></td>
                                            <td> <?php    echo $row['name'] ?></td>
                                            <td id="prix">  <?php    echo $row['price'] ?></td>
                                            <!-- <td><img style="widht:5px ; hight:5px;" src=" <"></td> -->
                                             <td> <img style="width:50px;"src="image/<?php echo $row['pd_img']; ?>" alt=""> </td>

                                            <td>
                                                <?php echo'
                                            <button class="btn btn-primary"><a href="./updateProduit.php?updateid=' . $row['reference'] . '" class="text-light"> <i class="fa fas fa-edit style=font-size:36px" ></i></a></button>
                                            <button class="btn btn-danger"><a href="./removeProduit.php?deleteid=' . $row['reference'] . '" class="text-light"> <i class="fa fa-trash"></i>'

                                            ?>

                                            </td>
                                        </tr>
                                        <?php   
                                      } 
                                      ?>
                                          
                                            
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


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <div class="mode">
    Dark mode:
    <span class="change">OFF</span>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
        <script type="text/javascript">

  $(document).ready(function(){
    $("table").DataTable();
  });
</script>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value;
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue =td.innerText;
                if (txtValue.indexOf(filter)==0) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>


        <script>
                function generatePDF() {
				// Choose the element that your content will be rendered to.
				const element = document.getElementById('dataTable');
				// Choose the element and save the PDF for your user.
				html2pdf().from(element).save();
			}
    </script>
    </body>
</html>