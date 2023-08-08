<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include "common/common-links.php"; ?>
      <title>Movie Tickets</title>
   </head>
   <body>
      <!--header-->
      <?php include "common/header.php"; ?>
      <!--**************************************************Top Banner Start*******************************************-->
      <section class="mt-2">
         <!--Owl carousel start-->
         <div class="owl-carousel owl-theme">
            <div class="item"><img src="assets\images\HO00022815.jpg" style="width:100%" height="400px"></div>
            <div class="item"><img src="assets\images\Moviecation-eGift_Card__0798.webp" style="width:100%"
               height="400px"></div>
            <div class="item"><img src="assets\images\Disney_Film_Festival_6638.jpg" style="width:100%" height="400px">
            </div>
            <div class="item"><img src="assets\images\Macmerisepilot_9984 (1).webp" style="width:100%" height="400px">
            </div>
            <div class="item"><img src="assets\images\Paytm_Postpaid__3792.webp" style="width:100%" height="400px">
            </div>
            <div class="item"><img src="assets\images\AxisBankOffer__9219.webp" style="width:100%" height="400px">
            </div>
         </div>
         <!--Owl carousel end-->
      </section>
      <!--***************************************************Top Banner End*********************************************-->
      <!--***************************************************main section***********************************************-->
      <section class="container mt-4">
         <div class="row">
            <h3>Recommended Movies</h3>
            <div class="col-12 items">
               <div class="cover-section">
                  <div class="row" id="movieList">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--***************************************************main section***************************************************-->

      
      <!--****************************************************Bottom Banner Start*******************************************-->
      <section class="mb-5">
         <div class="container">
            <img src="assets\images\stream-leadin-web-collection-202210241242.avif" style="height: 100px; width: 100%;"" ></img>
         </div>
      </section>
      <!--****************************************************Bottom Banner End***********************************************-->
      l 
      <section class="mb-5">
         <div class="container">
            <img src="assets\images\Kotak-Welcome_back__8959.jpg" style="height: 400px; width: 100%;"" ></img>
         </div>
      </section>

      <!--Footer-->
      <?php include "common/footer.php"; ?>
      <script src="assets\js\jquery.min.js"></script>
      <script src="assets\js\script.js"></script>
      <script src="assets\js\bootstrap.bundle.min.js"></script>
      <script src="assets\js\owl.carousel.js"></script>
      <script src="assets\js\owl.carousel.min.js"></script>
      <script>
         $('.owl-carousel').owlCarousel({
             stagePadding: 100,
             loop: true,
             margin: 10,
             nav: true,
             autoplay: true,
             autoplayTimeout:2000,
             autoplayHoverPause: true,
             responsive: {
                 0: {
                     items: 1
                 },
                 600: {
                     items: 3
                 },
                 1000: {
                     items: 1
                 }
             }
         })
      </script>
   </body>
</html>