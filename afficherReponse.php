<?php
include_once 'C:/xampp/htdocs/projet/Controller/reponseC.php';
$reponseC = new ReponseC();
$listeReponse = $reponseC->afficherReponse();
?>


<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tache_Reponse</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
<div style="width:1450px;"id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Table Reponse</h1>
                        
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <button class="btn btn-primary m-1 float-right"><a href="./ajouterReponse.php"
                        class="text-light"><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;</i>Add New Reponse</a>
                    </button><br>
                                 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>idreponse</th>
                                            <th>idClient</th>
                                            <th>reponse</th>
                                            
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                   
                                    <?php    foreach ($listeReponse as $reponse)  { ?>
                                        <tr>
                                            <td> <?php    echo $reponse['idreponse'] ?></td>
                                            <td> <?php    echo $reponse['idclient'] ?></td>
                                            <td> <?php    echo $reponse['reponse'] ?></td>
                                            <!-- <td><img style="widht:5px ; hight:5px;" src=" <"></td> -->

           
            
            <td>
                <form method="POST" action="modifierReponse.php">
                    <input type="submit" name="Modifier" value="Modifier">
                    <input type="hidden" value=<?PHP echo $reponse['idreponse']; ?> name="idreponse">
                   
                    
                </form>
            </td>
            <td>
                <a href="supprimerReponse.php?idreponse=<?php echo $reponse['idreponse']; ?>">Supprimer</a>
            </td>
        </tr>
        <?php
		}
		?>

                                        </tbody>
                                    </table>

   <div id="google_translate_element"></div> 
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element'); 
    } 
    </script> 
    <script type="text/javascript"src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div> <button> <a onclick="window.print()">Print this page</a></button>
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


    </body>
</html>