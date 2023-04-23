
<?php

include 'C:/xampp/htdocs/tache_livre/Controller/ProduitC.php';
$err="";
$reference="";
	$name="";
	$price=0;
	$pd_img="";
	
	if(isset($_POST['submit']) )
	{
	$reference=$_POST['reference'];
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

                    $ProduitC = new ProduitC();
                
                    
                    

                        $ProduitC->ajouterProduit($Produit);
                    

                            header("Location:listProduit.php");
        }else
            $err="vous devez remplir tous les champs";     
          
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
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">ajout du produit</h3></div>
                                    <div class="card-body">
                                        <form method="POST"  class="env">
                                            <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputFirstName">Ref</label>
                                                            <input class="form-control py-4" id="reference" type="text" name="reference"  placeholder="Enter ref name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputLastName"> Nom</label>
                                                            <input class="form-control py-4" id="name" onkeyup="nameValidation()" type="text"name="name"  placeholder="Enter produit name" />
                                                            <p style="color: red" id="nameEr"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="inputLastName">prix</label>
                                                            <input class="form-control py-4" id="price" onkeyup="priceValidation()" type="text" name="price"  placeholder="Enter price" />
                                                            <p style="color: red" id="priceEr"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <label class="small mb-1" for="inputpd_imgAddress">image</label>
                                                    <input class="form-control py-4" id="pd_img" type="file"  name="pd_img" placeholder="Enter pd_img " />
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="form-group mt-4 mb-0">
                             
                                                <button type="submit"  onclick="nameValidation()" onclick="priceValidation()" class="btn btn-primary btn-block" name="submit">Save</button>
                                                <p id="error"></p>
                                                <?php echo $err ?>
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
