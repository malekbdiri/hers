<?php
include 'C:\xampp\htdocs\panier_product\config\backend\focus-main\theme\controller\CategoryC.php';
$CategoryC = new CategoryC();
$listeCategory = $CategoryC->afficherCategory();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>GalacTech: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
  
  
  <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
      <div class="nano-content">
        <div class="logo"><a href="index.html"><!-- <img src="images/logo.png" alt="" /> --><span></span></a></div>
        <ul>
          <li class="label">Main</li>
          <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="badge badge-primary">1</span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
            <ul>
              <li><a href="index.html">Dashboard 1</a></li>
            </ul>
          </li>
    
              <li class="label">Apps</li>
              <li>
                <a href="Valid/View/admin.php">
                  <i class="ti-user"></i>Admin</a>
              </li>
              <li>
                <a href="backcategories.php">
                  <i class="ti-files"></i>Categorie</a>   
              </li>
              <li>
                <a href="backproducts.php">
                  <i class="ti-shopping-cart"></i>Produit</a>
              </li>
              <li>
                <a href="commande.php">
                  <i class="ti-bag"></i>Commande</a>
              </li>
              <li>
                <a href="cart.php">
                  <i class="ti-shopping-cart"></i>cart-item</a>
              </li>
              <li>
                <a href="livreurs.php">
                  <i class="ti-truck"></i>Livreurs</a>
              </li>
              <li>
                  <a href="reclamation.php">
                  <i class="ti-thumb-up "></i>Reclamation</a>
              </li>
              <li>
                <a href="app-event-calender.html">
                  <i class="ti-calendar"></i> Calender </a>
              </li>
              <li>
                <a href="app-email.html">
                  <i class="ti-email"></i> Email</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="content-wrap">
        <div class="main">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                  <div class="page-title">
                    <h1>Hello, <span>Welcome Here</span></h1>
                  </div>
                </div>
              </div>
              <!-- /# column -->
              <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                  <div class="page-title">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                      <li class="breadcrumb-item active">App-Email</li>
                    </ol>
                  </div>
                </div>
              </div>
              
              <!-- /# column -->
            </div>
            <!-- /# row -->
          </div>
        </div>
      </div>

    
    <center>
    <button><a href="addcategory.php">Add a Category</a></button>
        <h1>Categories </h1>
   
    <table border="1" align="center">
        <tr>
            <th>identifiant </th>
            <th> Category name</th>
            <th>date Added</th>
            <th>expiration date</th>
            <th>description</th>
            <th>status</th>
            <th>category number</th>
            <th>category type</th>
        </tr>
        <?php
		foreach ($listeCategory as $Category) {
		?>
        <tr>
            <td><?php echo $Category['idC']; ?></td>
            <td><?php echo $Category['nomCategory']; ?></td>
            <td><?php echo $Category['date_ajout']; ?></td>
            <td><?php echo $Category['date_expiration']; ?></td>
            <td><?php echo $Category['description']; ?></td>
            <td><?php echo $Category['status']; ?></td>
            <td><?php echo $Category['nbr_category']; ?></td>
            <td><?php echo $Category['typeCategory']; ?></td>
            <td>
                <form method="POST" action="updatecategory.php">
                    <input type="submit" name="Modifier" value="Modifier">
                    <input type="hidden" value=<?PHP echo $Category['idC']; ?> name="idC">
                    
                </form>
            </td>
            
            <td>
                <a href="deletecategory.php?idC=<?php echo $Category['idC'] ; ?>"><img src="delete-icon.png" witdh='25px' height='25px'></a>
            </td>
        </tr>
        <?php
		}
		?>
        </table>

    <!--<p>Translate this page in your preferred language:</p>-->
    <div id="google_translate_element"></div> 
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'fr'},'google_translate_element'); 
    } 
    </script> 
    <script type="text/javascript"src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
   <!--   <p>Vous pouvez traduire le contenu de cette page en sélectionnant une langue dans le menu déroulant.</p>-->
   </center>
</body>

</html>
<?php
/*---------------------------------------------------------------*/
/*
    Titre : Affiche date et heure dynamiquement                                                                           
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=664
    Date édition     : 16 Sept 2012                                                                                       
    Date mise à jour : 16 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/

    define('DS', DIRECTORY_SEPARATOR);
    define('BASE_PATH', dirname(__FILE__).DS);
    define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER[
'SCRIPT_NAME']).'/');
?>
    <!DOCTYPE HTML>
    <html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>AJAX refresh example</title>
        <script
 src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>
            $(function(){
                setInterval(function(){
                    $('#ajax-refresh').load('<?php echo BASE_URL;?>chat.php');
                }, 1000);
            });
        </script>
    </head>
    <body>
      <center>
        <div id="ajax-refresh">
            <?php include(BASE_PATH.'chat.php');?>
        </div>
          </center>
    </body>
    </html>

    <script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>


