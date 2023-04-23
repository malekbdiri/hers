<?php
include 'C:/xampp/htdocs/projet/Model/reponse.php';
include 'C:/xampp/htdocs/projet/Controller/reponseC.php';

$error = "";

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
        $reponseC->ajouter($reponse, $_POST["idreponse"]);
            header('Location:afficherReponse.php');
    } else
            $error = "Missing information";
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add</title>
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
                                    </section>
          <div class="row">
              <div class="col-lg-6">

                  <div class="card">
                      <div class="card-body">
                          <div class="container">
                              <center>
                                  <h2>Ajouter Reponse</h2>
                              </center>
                              <form method="post"  id="addForm" name="addForm" onsubmit="return validateFormP()">
                                  <div class="form-group">
                                      <label for="idreponse">Idreponse:</label>
                                      <input type="number" class="form-control" id="idreponse" placeholder="idreponse" name="idreponse">
                                  </div>
                                  <div class="form-group">
                                      <label for="idclient">IdClient:</label>
                                      <input type="text" class="form-control" id="idclient" placeholder="Idclient" name="idclient" >
                                  </div>
                                  <div class="form-group">
                                      <label for="reponse">Reponse:</label>
                                      <input type="text" class="form-control" id="reponse" placeholder="reponse" name="reponse"  onkeyup="reponseValidation()" required>
                                      <div>
                                     <p style="color :red" id="reponser"></p>
                                       </div>
                                      <h6 id="error" style=" color:#d11717"></h6S>
                                  </div>
              
                                            <div class="form-group mt-4 mb-0">
                             
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>
                    
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <button type="submit" class="small"><a href="afficherReponse.php">Cancel</a></button>
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

