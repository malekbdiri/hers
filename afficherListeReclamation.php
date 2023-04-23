<?php
include 'C:/xampp/htdocs/projet/Controller/ReclamationC.php';
$reclamationC = new ReclamationC();
$listeReclamation = $reclamationC->afficherReclamation();
?>

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tache_Reclamation</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
<div style="width:1450px;"id="layoutSidenav_content">
                <main>
                
                       <div class="container-fluid">
                        <h1 class="mt-4">Table Reclamation</h1>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <!--button class="btn btn-primary m-1 float-right"><a href="./addProduit.php"
                        class="text-light"><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;</i>Add New Produit</a>
                    </button--><br>
                                 Reclamation
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>idclient</th>
                                            <th>reference</th>
                                            <th>message</th>
                                            <th>email</th>
                                            <th>date</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                   
                                    <?php    foreach ($listeReclamation as $reclamation)  { ?>
                                        <tr>
                                            <td> <?php    echo $reclamation['idclient'] ?></td>
                                            <td> <?php    echo $reclamation['reference'] ?></td>
                                            <td> <?php    echo $reclamation['message'] ?></td>
                                            <td> <?php    echo $reclamation['email'] ?></td>
                                            <td> <?php    echo $reclamation['dob'] ?></td>
                                         

                                            <td>
  <form method="POST" action="modifierReclamation.php">
     
      <input type="submit" name="Modifier" value="Modifier">
      <input type="hidden" value=<?PHP echo $reclamation['idclient']; ?> name="idclient">
  </form>

</td>
<td>
  <a href="supprimerReclamation.php?idclient=<?php echo $reclamation['idclient']; ?>">Supprimer</a>
  
</td>

                                            </td>
                                        </tr>
                                        <?php     } ?>
                                          
                                            
                                        </tbody>
                                    </table>

                                    <?php
               if (ISSET($_POST['sort'])){ ?>




            <div class="container-fluid pt-5 px-4">
                <div class="row g-10">
                    <div class="col-sm-16 col-xl-15">
                        <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">liste reclamation</h6>
                           
                            
                <table class="table">
                <thead>
                        <tr>
                                            <th>idclient</th>
                                            <th>reference</th>
                                            <th>message</th>
                                            <th>email</th>
                                            <th>date</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                        </tr>
                </thead>
                <tbody>
                    
                        <?php
                        $pdo=config::getConnexion();
                            $query = $pdo->prepare("SELECT * FROM reclamation ORDER BY idclient ASC");
                            $query->execute();
                            while($row = $query->fetch()){
                        ?>
                        <?php
                    
                       
       
        ?>
                        <tr>
                            <td><?php echo $row['idclient']?></td>
                            <td><?php echo $row['reference']?></td>
                            <td><?php echo $row['message']?></td>
                            <td><?php echo $row['mail']?></td>
                            <td><?php echo $row['dob']?></td>

                            <td align="center">
                    <form method="POST" action="ajouterReclamation.php">
                        
                        <input type="submit" name="Modifier" value="Modifier">
                        <input type="hidden" value=<?PHP echo $row['idclient']; ?> name="idclient">
                    </form>
                </td>
                <td>
                    <a href="supprimerReclamation.php?idclient=<?php echo $row['idclient']; ?>">Delete</a>
                </td>

                        </tr>
                        
                        
                        <?php
                            }
                        ?> 

                        
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                        </div>
                        </div>
                        </div>
                        </div>
                      
                            <div id="google_translate_element"></div> 
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element'); 
    } 
    </script> 
    <script type="text/javascript"src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!--button class="btn btn-primary m-1 float-right" onclick="generatePDF()">pdf</button-->
    </div> <!--button class="btn btn-primary m-1 float-right" onclick="window.print()">Print this page</button-->
    <button onclick="window.print()" value='PDF' class="btn btn-default btn-primary"  >  PDF </button>
    


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

