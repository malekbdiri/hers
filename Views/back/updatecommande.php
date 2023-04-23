<?php

include 'C:/xampp/htdocs/tache_livre/Controller/CommandeC.php';

$id_commande=$_GET['updateid'];
$CommandeC = new CommandeC();
$liste=$CommandeC->affichermodif($id_commande);
foreach ($liste as $row){
    

        $id_commande=$row['id_commande'];
        $id_produit=$row['id_produit'];
        $id_user=$row['id_user'];
        $email=$row['email'];
        $id_user=$row['carte_bancaire'];
}
	if(isset($_POST['submit']) )
	{
	$id_commande=$_POST['updateid'];
	$id_produit=$_POST['id_produit'];
	$id_user=$_POST['id_user'];
    $email=$_POST['email'];
    $carte_bancaire=$_POST['carte_bancaire'];
    if (
        !empty($id_commande) && 
        !empty($id_produit) &&
        !empty($email) && 
        !empty($carte_bancaire) &&
        !empty($id_user)

    ){  
        $Commande = new Commande($id_commande,$id_produit,$id_user,$email,$carte_bancaire);
        $CommandeC->modifierCommande($Commande,$id_commande, $id_produit);

        header("Location:listCommande.php");
    } else {
        $CommandeC = new CommandeC();
        $liste=$CommandeC->affichermodif($id_commande);
        foreach ($liste as $row){
            $id_produit=$row['id_produit'];
            $id_commande=$row['id_commande'];
            $id_user=$row['id_user'];
            $email=$row['email'];
            $carte_bancaire=$row['carte_bancaire'];
        }
    }
    

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
        <title>Tache_commande</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update commande</h3></div>
                                    <div class="card-body">
                                        <form method="POST" class="env">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div  class="form-group">
                                                        <label class="small mb-1" for="updateid">id_commande</label>
                                                        <input class="form-control py-4" id="updateid" type="text" name="updateid" value="<?php echo $id_commande ?>" />
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="id_produit"> id_produit</label>
                                                        <input class="form-control py-4" id="id_produit" type="text"name="id_produit" value="<?php echo $id_produit ?>" placeholder="id_produit" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="id_user">id_user</label>
                                                        <input class="form-control py-4" id="id_user" type="text" name="id_user" value="<?php echo $id_user ?>" maxlength="8" placeholder="Enter id_user" />
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="email"> email</label>
                                                        <input class="form-control py-4" id="email" type="text"name="email" value="<?php echo $email ?>" placeholder="email" />
                                                        <span id="text"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="carte_bancaire">carte_bancaire</label>
                                                        <input class="form-control py-4" id="carte_bancaire" onkeyup="carteValidation()" type="text" name="carte_bancaire" value="<?php echo $carte_bancaire ?>" placeholder="Enter carte_bancaire" />
                                                        <p style="color: red" id="carteEr"></p>
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
                                        <div class="small"><a href="listCommande.php">Cancel</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script>
         let carteInput=document.getElementById("carte_bancaire");
var numbers = /^[0-9]+$/; 

function carteValidation() {
    
    if ( !carteInput.value.match(numbers)) {
        carteError2 = "Veuillez entrer un num de carte bancaire valide";
        carteValid2 = false;
        document.getElementById("carteEr").innerHTML = carteError2;
        return false;
    }
    document.getElementById("carteEr").innerHTML =
        "<p style='color:green'> Numéro du carte bancaire valide </p>";

    return true;
}

document.getElementById("email").addEventListener ('input',function(){
    var email = document.getElementById("email").value;
    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; // C'est dans la description 

    if (email.match(pattern)) {
        text.innerHTML ="Votre addresse Mail est valide";
        text.style.color ="#00ff00"
    }else {
        text.innerHTML ="Votre addresse Mail est invalide";
        text.style.color ="red"
    }
    if (email == "") {
        text.innerHTML ="";
        text.style.color ="red"
    }

 }) 

 document.forms["ajout"].addEventListener("submit", function (e) {
    var inputs = document.forms["ajout"];
    let ids = [
        "erreur",
        "userEr",
        "produitEr",
        "mailEr",
        "carteEr"
        
    ];

   // ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (!carteInput.value.match(numbers)) {
        errors = false;
        document.getElementById("carteEr").innerHTML =
            "Veuillez entrer un num de carte valid ! (seulement des nombres)";
    } else {
        errors = true;
    }  

    if (errors === false) {
        e.preventDefault();
    } else {
        alert("formulaire envoyé");
    }

}); 



     </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./../js/scripts.js"></script>
       
    </body>
</html>
