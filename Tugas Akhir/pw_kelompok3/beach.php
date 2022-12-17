<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beach</title>

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

<section class="beach">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/header-bg-beach.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>beach</h3>
            </div>
         </div>
         
      </div>
   </div>

</section>

<!-- home section ends -->


<!-- home packages section starts  -->

<section class="beach-packages">

   <h1 class="heading-title"> beach packages </h1>

   <div class="box-container">

    <div class="box">
        <div class="image">
           <img src="images/nusapenida.jpg" alt="">
        </div>
        <div class="content">
           <h3>Nusa Penida</h3>
           <span>
               <svg width="14" height="14" class="ywnoU" viewBox="0 0 32 32" version="1.1" aria-hidden="false"><desc lang="en-US">A map marker</desc><path d="M16 2.66669C9.99998 2.66669 5.33331 7.06669 5.33331 12.6667C5.33331 19.8667 12.9333 27.0667 15.3333 29.0667C15.7333 29.4267 16.2666 29.4267 16.6666 29.0667C19.0666 27.0667 26.6666 19.8667 26.6666 12.6667C26.6666 7.06669 22 2.66669 16 2.66669ZM16 18.6667C13.0666 18.6667 10.6666 16.2667 10.6666 13.3334C10.6666 10.4 13.0666 8.00002 16 8.00002C18.9333 8.00002 21.3333 10.4 21.3333 13.3334C21.3333 16.2667 18.9333 18.6667 16 18.6667Z"></path></svg>
               <span class="alamat">Nusa Penida, Klungkung Regency, Bali, Indonesia</span>
           </span>
           <p>“The Blue Paradise Island” Adalah Tagline Untuk Nusa Penida Sebagai Salah Satu Kawasan Pariwisata Yang Ada Di Kabupaten Klungkung...</p>

           <a href="nusapenida.php" class="btn">reed more</a>
        </div>
     </div>

    <div class="box">
         <div class="image">
            <img src="images/rajaampat.jpg" alt="">
         </div>
         <div class="content">
            <h3>Raja Ampat</h3>
            <span>
                <svg width="14" height="14" class="ywnoU" viewBox="0 0 32 32" version="1.1" aria-hidden="false"><desc lang="en-US">A map marker</desc><path d="M16 2.66669C9.99998 2.66669 5.33331 7.06669 5.33331 12.6667C5.33331 19.8667 12.9333 27.0667 15.3333 29.0667C15.7333 29.4267 16.2666 29.4267 16.6666 29.0667C19.0666 27.0667 26.6666 19.8667 26.6666 12.6667C26.6666 7.06669 22 2.66669 16 2.66669ZM16 18.6667C13.0666 18.6667 10.6666 16.2667 10.6666 13.3334C10.6666 10.4 13.0666 8.00002 16 8.00002C18.9333 8.00002 21.3333 10.4 21.3333 13.3334C21.3333 16.2667 18.9333 18.6667 16 18.6667Z"></path></svg>
                <span class="alamat">Raja Ampat, West Papua, Indonesia</span>
            </span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">reed more</a>
         </div>
      </div>


   </div>

   <div class="box-container">

    <div class="box">
       <div class="image">
          <img src="images/padar.jpg" alt="">
       </div>
       <div class="content">
          <h3>Pulau Padar</h3>
          <span>
            <svg width="14" height="14" class="ywnoU" viewBox="0 0 32 32" version="1.1" aria-hidden="false"><desc lang="en-US">A map marker</desc><path d="M16 2.66669C9.99998 2.66669 5.33331 7.06669 5.33331 12.6667C5.33331 19.8667 12.9333 27.0667 15.3333 29.0667C15.7333 29.4267 16.2666 29.4267 16.6666 29.0667C19.0666 27.0667 26.6666 19.8667 26.6666 12.6667C26.6666 7.06669 22 2.66669 16 2.66669ZM16 18.6667C13.0666 18.6667 10.6666 16.2667 10.6666 13.3334C10.6666 10.4 13.0666 8.00002 16 8.00002C18.9333 8.00002 21.3333 10.4 21.3333 13.3334C21.3333 16.2667 18.9333 18.6667 16 18.6667Z"></path></svg>
            <span class="alamat">Komodo, West Manggarai Regency, East Nusa Tenggara, Indonesia</span>
          </span>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
          <a href="book.php" class="btn">reed more</a>
       </div>
    </div>
    
    <div class="box">
       <div class="image">
          <img src="images/pinkbeach.jpg" alt="">
       </div>
       <div class="content">
          <h3>Pink Beach</h3>
          <span>
            <svg width="14" height="14" class="ywnoU" viewBox="0 0 32 32" version="1.1" aria-hidden="false"><desc lang="en-US">A map marker</desc><path d="M16 2.66669C9.99998 2.66669 5.33331 7.06669 5.33331 12.6667C5.33331 19.8667 12.9333 27.0667 15.3333 29.0667C15.7333 29.4267 16.2666 29.4267 16.6666 29.0667C19.0666 27.0667 26.6666 19.8667 26.6666 12.6667C26.6666 7.06669 22 2.66669 16 2.66669ZM16 18.6667C13.0666 18.6667 10.6666 16.2667 10.6666 13.3334C10.6666 10.4 13.0666 8.00002 16 8.00002C18.9333 8.00002 21.3333 10.4 21.3333 13.3334C21.3333 16.2667 18.9333 18.6667 16 18.6667Z"></path></svg>
            <span class="alamat">Lombok, Sekaroh, East Lombok Regency, West Nusa Tenggara, Indonesia</span>
          </span>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
          <p></p>
          <a href="book.php" class="btn">reed more</a>
       </div>
    </div>

 </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="beach-offer">
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
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
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
