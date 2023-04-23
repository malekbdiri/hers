<?php
include 'C:/xampp/htdocs/projet/Model/reponse.php';
include 'C:/xampp/htdocs/projet/Controller/reponseC.php';


// create adherent
$reponse = null;

$reponseC = new ReponseC();
if (
    isset($_POST["idreponse"]) &&
    isset($_POST["idclient"]) &&
    isset($_POST["reponse"]) 
    
) {
    if (
            !empty($_POST["idreponse"]) &&
            !empty($_POST["idclient"]) &&
            !empty($_POST["reponse"])
            
    ) {
        $reponse = new Reponse(
            $_POST['idreponse'],
            $_POST['idclient'],
            $_POST['reponse']
            
        );
        $reponseC->modifierReponse($reponse, $_POST["idreponse"]);
            header('Location:afficherReponse.php');
    } else
            $error = "Missing information";
}
?>

<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tache Reponse</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modifier Reponse</h3></div>
                                    <div class="card-body">
                                    <?php
                                  if (isset($_POST['idreponse'])) {
                               $reponse = $reponseC->recupererReponse($_POST['idreponse']);

                                   ?>

                                        <form action="" method="POST" >
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div  class="form-group">
                                                    <label for="idreponse">idReponse</label>
                                                <input type="text" name="idreponse" id="idreponse"  value="<?php echo $reponse['idreponse']; ?>" maxlength="20"></td>
                                                    </div>  
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="idclient"> idClient</label>
                                                        <input class="form-control py-4" id="idclient" type="number"name="idclient" value="<?php echo $reponse['idclient'] ?>" placeholder="idClient" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="reponse">reponse</label>
                                                        <input class="form-control py-4" id="reponse" type="text" name="reponse" value="<?php echo $reponse['reponse'] ?>" placeholder="Enter Reponse" />
                                                    </div>
                                            
                                               
                                            </div>
                                          
                                            <div class="form-group mt-4 mb-0">
                                                <!-- <a class="btn btn-primary btn-block" name="add">Create Account

                                                </a> -->
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>

                                                <p id="error"></p>
                                            </div>
                                        </form>
   
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="afficherReponse.php">Cancel</a></div>
                                        
                                        <?php
    }
    ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./../js/scripts.js"></script>
       
    </body>
</html>

