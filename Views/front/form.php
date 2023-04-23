
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
    
    header('Location: email.php');

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WonderWoman</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-4">
            <a href="./index.html"><img src="images/logo.png" alt=""></a>
          </div>
          <div class="col-12 col-md-12 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html"><span>Home</span></a></li>
                <li class="has-children">
                  <a href="services.html"><span>Evenements</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">campagne de sensibilisation</a></li>
                    <li><a href="#">developpement personnel</a></li>
                    <li><a href="#">conférences</a></li>
                  </ul>
                </li>
                <li class="active"><a href="Produits.html"><span>Produits</span></a></li>
                <li><a href="about.html"><span>About</span></a></li>
                <li><a href="forum.html"><span>forum</span></a></li>
                <li ><a href="reclamation.html"><span>Réclamation</span></a></li>
                <li><a href="contact.html"><span>rendez vous</span></a></li>
                
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



  

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">Faites <span class="typed-words"></span></h1>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

    <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Ajout du commande</h3></div>
                                    <div class="card-body">
                                        <form method="POST"  class="env" >
                                            <div class="form-row">
                                                   
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="id_produit"> Id produit</label>
                                                            <input class="form-control py-4" id="id_produit" type="text"name="id_produit"  placeholder="entrez l'id du produit" />
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
                             
                                                <button type="submit" class="btn btn-primary btn-block" onkeyup="carteValidation()" name="submit">Submit</button>
                                                <!--button type="submit" class="btn btn-primary btn-block" name="save" action="send_mail.php" >Save</button-->
                    
                                            </div>
                                            
                                        </form>
                                    </div>
                                   
                                    <div class="card-footer text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    
        </div>
        <script src="./validation.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./../js/scripts.js"></script>
    </body>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            
            <div class="p-4 mb-3 bg-red">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">2081 Ariana Soghra</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+(216) 99 687 111</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">WonderWoman@hers.com</a></p>

            </div>

          </div>
        </div>
      </div>
    </div>
    

    <div class="mt-5 block-cta-1 primary-overlay" style="background-image: url('images/hero_bg_2.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white"> 30% pour les nouveaux clients</h2>
            <p class="mb-0 text-white lead">on est toujours disponible pour votre service</p>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="contact.html" class="btn btn-outline-white text-white btn-md btn-pill px-5 font-weight-bold btn-block">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">

              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Products</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <!--h2 class="footer-heading mb-4"></h2-->
            <ul>
              <li><i class="fa fa-clock-o"></i> Mon-Fri: 6:30 AM- 07:45 PM</li>
              <li><i class="fa fa-clock-o"></i> Sat-Sun: 8:30 AM- 05:45 PM</li>
            </ul>
            <form action="#" method="post" class="subscription">
              <div class="input-group mb-3  d-flex align-items-stretch">
                <input type="text" class="form-control bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>

  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["votre commande"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  
  </body>
</html>