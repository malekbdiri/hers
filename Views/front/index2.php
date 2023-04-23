<?php
require "layouts/header.php";
?>

<div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
                
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">We do our services to ease your <span class="typed-words"></span></h1>

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
      $conn = mysqli_connect("localhost", "root", "", "projet");

      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      
      $result = mysqli_query($conn, "SELECT * FROM produit");
      while ($row = mysqli_fetch_array($result)) {
      ?>
      <div class="container">
      <div class="d-block d-lg-flex">
      <div class="half-wrap d-block d-md-flex">
        <div class="half bg-white d-block d-md-flex arrow-left order-md-2">
          <div class="text">
                <h2><?php  echo $row["name"];?></h2>
             
                <p><?php echo $row['price'];?>$</p>
                <p><a href="course-details.html" class="btn btn-primary btn-sm btn-pill">Acheter</a></p>
                </div>
    </div>          
                <img src="<?php echo $row["pd_img"]; ?>"height="100" width="100"></div>
            <?php } ?>
          </div>
    </div>
    </div>
    <?php //require "layouts/footer.php";?>  
   