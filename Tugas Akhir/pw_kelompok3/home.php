<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/about-gunungPrau.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>explore beautiful destinations in Indonesia</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/pinkbeach.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/imgcb-1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <a href="mountain.php">
            <img src="images/icon-1.png" alt="">
            <h3>mountain</h3>
         </a>
      </div>

      <div class="box">
         <a href="beach.php">
            <img src="images/icon-7.png" alt="">
            <h3>beach</h3>
         </a>
      </div>

      <div class="box">
         <a href="historical.php">
            <img src="images/icon8.png" alt="">
            <h3>historical & culture</h3>
         </a>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/atuh_beach.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Travel Ini Adalah Layanan Yang Merekomendasikan Destinasi Wisata Di Berbagai Provinsi Di Indonesia. Dengan Layanan Travel Ini, Anda Dapat Mengunjungi Tempat Wisata Yang Ada Di Indonesia, Berupa Pantai, Laut, Pegunungan, Tempat Bersejarah, Dll.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title">favorite packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/imgpb-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Paket Wisata Bali</h3>
            <p>Paket Wisata ke Bali selama 1 Minggu dimana tiap hari akan mengunjungi 1 tempat wisata.</p>
            <a href="detailpaketbali.php" class="btn">See Details</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/nusapenida.jpg" alt="">
         </div>
         <div class="content">
            <h3>Paket wisata Nusa Penida</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">See Details</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/package-bromo.jpg" alt="">
         </div>
         <div class="content">
            <h3>Paket wisata bromo</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">See Details</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="faq.php"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="privacy.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="term.php"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> kelompok3@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Gowa, Indonesia - 90700 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/teknikunhas/?hl=en"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>KELOMPOK 3</span></div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>