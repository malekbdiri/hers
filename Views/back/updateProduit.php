<?php

include 'C:/xampp/htdocs/tache_livre/Controller/ProduitC.php';

$ref=$_GET['updateid'];
$ProduitC = new ProduitC();
$liste=$ProduitC->affichermodif($ref);
foreach ($liste as $row){
    
        $reference=$row['reference'];
        $name=$row['name'];
        $price=$row['price'];
        $pd_img=$row['pd_img'];
        
}
	if(isset($_POST['submit']) )
	{
	$reference=$_POST['updateid'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$pd_img=$_POST['pd_img'];
    if (
        !empty($reference) && 
            !empty($name) &&
        !empty($price) &&
        !empty($pd_img) 
    ){  
            $Produit = new Produit($reference,$name,$price,$pd_img);


                    $ProduitC->modifierProduit($Produit,$ref);
                    header("Location:listProduit.php");
           
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
        <title>Tache_produit</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Mise à jour produit</h3></div>
                                    <div class="card-body">
                                        <form method="POST" class="env">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div  class="form-group">
                                                        <label class="small mb-1" for="updateid">reference</label>
                                                        <input class="form-control py-4" id="updateid" type="text" name="updateid" value="<?php echo $ref ?>" />
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName"> Nom</label>
                                                        <input class="form-control py-4" id="name"onkeyup="nameValidation()" type="text"name="name" value="<?php echo $name ?>" placeholder="Enter  name" />
                                                        <p style="color: red" id="nameEr"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">prix</label>
                                                        <input class="form-control py-4" id="price" onkeyup="priceValidation()" type="text" name="price" value="<?php echo $price ?>" placeholder="Enter price" />
                                                        <p style="color: red" id="priceEr"></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <label class="small mb-1" for="inputpd_imgAddress">pd_img</label>
                                                <input class="form-control py-4" id="inputpd_imgAddress" type="text" aria-describedby="pd_imgHelp" name="pd_img"value="<?php echo $pd_img ?>" placeholder="Enter pd_img address" />
                                            </div>
                                            
                                               
                                            </div>
                                          
                                            <div class="form-group mt-4 mb-0">
                                                <!-- <a class="btn btn-primary btn-block" name="add">Create Account

                                                </a> -->
                                                <button type="submit" onclick="nameValidation()" onclick="priceValidation()" class="btn btn-primary btn-block" name="submit">Save</button>

                                                <p id="error"></p>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="listProduit.php">Cancel</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="validation1.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./../js/scripts.js"></script>
       
    </body>
</html>
