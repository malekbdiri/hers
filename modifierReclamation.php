
<?php
include_once 'C:/xampp/htdocs/projet/Model/Reclamation.php';
include_once 'C:/xampp/htdocs/projet/Controller/ReclamationC.php';
$error = "";

// create adherent
$reclamation = null; 

$reclamationC = new ReclamationC();
if (
    isset($_POST["idclient"]) &&
    isset($_POST["reference"]) &&
    isset($_POST["message"])&&
    isset($_POST["email"])&&
    isset($_POST["dob"]) 
) {
    if (
            !empty($_POST["idclient"]) &&
            !empty($_POST["reference"]) &&
            !empty($_POST["message"])&&
            !empty($_POST["email"])&&
            !empty($_POST["dob"]) 
    ) {
        $reclamation = new Reclamation(
            $_POST['idclient'],
            $_POST['reference'],
            $_POST['message'],
            $_POST['email'],
            new DateTime($_POST['dob'])
        );
        $reclamationC->modifierReclamation($reclamation, $_POST["idClient"]);
            header('Location:afficherListeReclamation.php');
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
        <title>Tache_Reclamation</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                        <?php
                        if (isset($_POST['idclient'])) {
                        $reclamation = $reclamationC->recupererReclamation($_POST['idclient']);
                       ?>
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modifier Reclamation</h3></div>
                                    <div class="card-body">
                

            <form action="" method="POST">

        <table border="1" align="center">
            <tr>
                <td>
                    <label for="idclient">id Client :
                    </label>
                </td>
                <td><input type="number" name="idclient" id="idclient"
                        value="<?php echo $reclamation['idclient']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="reference">reference:
                    </label>
                </td>
                <td><input type="number" name="reference" id="reference" value="<?php echo $reclamation['reference']; ?>" maxlength="20"></td>
            </tr>

            <tr>
                <td>
                    <label for="message">message:
                    </label>
                </td>
                <td>
                    <input type="text" name="message" value="<?php echo $reclamation['message']; ?>" id="message">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email"> email:
                    </label>
                </td>
                <td>
                    <input type="text" name="email" id="type" value="<?php echo $reclamation['email']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="date">date:
                    </label>
                </td>
                <td>
                    <input type="date" name="dob" id="dob" value="<?php echo $reclamation['dob']; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>

                                                <!-- <a class="btn btn-primary btn-block" name="add">Create Account

                                                </a> -->
                                                <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>

                                                <p id="error"></p>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="afficherListeReclamation.php">Cancel</a></div>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            </table>
    </form>



        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./../js/scripts.js"></script>
       
    </body>
    <?php
    }
    ?>

</html>


