
<?PHP
if (isset($_POST['submit']))
{
    include 'C:/xampp/htdocs/tache_livre/Controller/commandeC.php';
    //include '../Model/commande.php';
        
   // $id_commande = $_POST['id_commande'];
    $id_produit = $_POST['id_produit'];
    $id_user = $_POST['id_user'];
    $email = $_POST['email'];
    $carte_bancaire = $_POST['carte_bancaire'];

    $commande= new commande($id_produit, $id_user,$email,$carte_bancaire);
    $commandeC=new commandeC();
    $commandeC->ajoutercommande($id_produit, $id_user,$email,$carte_bancaire);
    
    header('Location: listCommande.php');

}

/*
if (isset($_POST['id_produit']) && isset($_POST['id_user'])&& isset($_POST['email'])&& isset($_POST['carte_bancaire'])) {


	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    $id_produit = $_POST['id_produit'];
    $id_user = $_POST['id_user'];
    $email = $_POST['email'];
    $carte_bancaire = $_POST['carte_bancaire'];

	if (empty($id_produit) || empty($id_user)||($email) || empty($carte_bancaire)) {
		header("Location: listcommande.php");
	}else {

		$sql = "INSERT INTO commande(id_produit, id_user,email,carte_bancaire) VALUES('$id_produit', '$id_user','$email','$carte_bancaire')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: listcommande.php");
}
*/
?>
<!--!DOCTYPE html>
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
                                        <form method="POST"  class="env">
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
                                                            <label class="small mb-1" for="id_user">id_user</label>
                                                            <input class="form-control py-4" id="id_user" type="text" name="id_user"  placeholder="enter user id" />
                                                        </div>
                                                    </div>
                                                     <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="text" class="form-control" name="email" id="email" placeholder="email" data-rule="minlen:4" data-msg="Please enter a valid email" >
                    <div class="validate"></div>
                  
                  </div>
                </div>
  
  
                <div class="col-md-12">
                    <label class="text-black" for="carte_bancaire">carte_bancaire</label> 
                    <input type="text" class="form-control" name="carte_bancaire" id="carte_bancaire" placeholder="carte_bancaire" data-rule="minlen:4" data-msg="Please enter a valid bank account">
                    <div class="validate"></div>
                   
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
</html-->


