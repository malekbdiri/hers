<?php
$page="Produits";
require "layouts/header.php";
?>
<div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">Joignez nous pour aiser votre  <span class="typed-words"></span></h1>

                <p data-aos="fade-up" data-aos-delay="100"><a href="#" class="btn btn-primary btn-pill">log in</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-center font-secondary">Nos offres </h2>
          </div>
        </div>
      </div>
      <?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

try {
    // Create PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Select data from table
    $stmt = $conn->prepare("SELECT * FROM produit");
    $stmt->execute();

    // Fetch all data and iterate through it
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row) {
        ?>
        <div class="container">
            <div class="d-block d-lg-flex">
                <div class="half-wrap d-block d-md-flex">
                    <div class="text">
                        <h2><?php echo $row["name"];?></h2>
                        <p><?php echo $row['price'];?>$</p>
                        <p><a href="form.php" class="btn btn-primary btn-sm btn-pill">Acheter</a></p>
                    </div>
                </div>
                <img src="<?php echo $row["pd_img"]; ?>" height="200" width="200">
            </div>
        </div>
        <?php
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
          </div>
    </div>
    </div>
   
    <div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 

    <?php require "layouts/footer.php";?>  
   