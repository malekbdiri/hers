
<?PHP
/*if (isset($_POST['submit']))
{
    include 'C:/xampp/htdocs/tache_livre/Controller/commandeC.php';
    //include '../Model/commande.php';
        
    $id_produit = $_POST['id_produit'];
    $id_user = $_POST['id_user'];
    $email = $_POST['email'];
    $carte_bancaire = $_POST['carte_bancaire'];
    
    $commande= new commande($id_produit, $id_user,$email,$carte_bancaire);
    $commandeC=new commandeC();
    $commandeC->ajoutercommande($id_produit, $id_user,$email,$carte_bancaire);
   
    header('Location: listCommande.php');

}
*/

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
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">ajout du commande</h3></div>
                                    <div class="card-body">
                                        <form method="POST"  class="env" action="send_mail.php">
                                            <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="id_commande">id_commande</label>
                                                            <input class="form-control py-4" id="id_commande" type="text" name="id_commande"  placeholder="Enter id_commande" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="id_produit"> id_produit</label>
                                                            <input class="form-control py-4" id="id_produit" type="text"name="id_produit"  placeholder="Enter produit id " />
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="id_user">Id client</label>
                                                            <input class="form-control py-4" id="id_user" type="text" name="id_user"  placeholder="entez votre id" maxlength="8" required />
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                     <div class="col-md-12">
                                                     <div class="col-md-6">
                                                      
                                                            <label class="small mb-1" for="email">Email</label>
                                                            <input class="form-control py-4" type="text" id="email" name="email" placeholder="Entrez Votre adresse mail" />
                                                            <span id="text"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="carte_bancaire">Carte bancaire</label>
                                                            <input class="form-control py-4" id="carte_bancaire" onkeyup="carteValidation()" type="text" name="carte_bancaire" placeholder="enter vote numéro du carte" />
                                                            <p style="color: red" id="carteEr"></p>
                                                          </div>
                                                    </div>
  
                                                    
                                            </div>
                                           
                                            
                                            <div class="form-group mt-4 mb-0">
                             
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>
                    
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="listCommande.php">Cancel</a></div>
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


