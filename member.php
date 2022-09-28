

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bumdes Bangun Mandiri Website</title>

  <!---- OWN CSS ---->

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

 <!-- navbar -->
 <div id="navbar">
  <a href="" id="logo">BumdesBangunMandiri</a>
  <div id="navbar-right">
   <a href="" style="
   background-color: black;
   margin-right:10px;

   
   ">Log In</a>
   <a href="" style="background-color: black;">Sign Up</a>
   
   
  </div>
</div>

<div class="topnav">
  <a href="index.html">Home</a>
  <a href="berita.php">News</a>
  <a href="shop.php">Shop</a>
  <a href="bumdes.php">Bumdes</a>
  <a href="bekiung.php">Bekiung</a>
  <input type="text" placeholder="Search..">
</div>

<!-- Slide Show Open -->
<section>
  <img class="mySlides" src="img/banner6.png"
  style="width:100%">
  <img class="mySlides" src="img/banner5.png"
  style="width:100%">
  <img class="mySlides" src="img/seminar.png"
  style="width:100%">
</section>

<script>
  // Automatic Slideshow - change image every 3 seconds
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
  }
  </script>
  <!-- Slide Show Close -->

    <!-- Visi Misi Section -->
  
    <div class="w3-row w3-padding-64" id="about">
        <h1 class="w3-center">Our Visi & Misi</h1><br>
      <div class="w3-col m6 w3-padding-large w3-hide-small">
       <img src="img/bumdesbanner1.png" mclass="w3-round w3-image w3-opacity-min" alt="Table Setting" width="750" height="550"  >
      </div>

      <div class="w3-col m6 w3-padding-large">
        <p style="padding-bottom: 20px; padding-top:20px; "><b>Visi:</b></p>
        <p class="w3-large">Visi BUM Desa BANGUN MANDIRI BEKIUNG mewujudkan kesejahteraan masyarakat Desa 
          BEKIUNG melalui pengembangan usaha ekonomi dan pelayanan sosial, dengan motto MARI 
          MEMBANGUN DESA MANDIRI.</span> ingredients.</p>
          <br>
          <p style="padding-bottom: 20px; padding-top:20px;"><b>Misi:</b></p>
        <p class="w3-large w3-hide-medium">
          1 Pengembangan usaha ekonomi melalui usaha simpan pinjam dan usaha di sektor riil.
          <br>
          2 Pembangunan layanan social melalui system jaminan social bagi rumah tangga miskin.
          <br>
          3 Pembangunan sumber daya manusia di Desa untuk mendukung perekonomian 
          masyarakat Desa Bekiung.
          <br>
          4 Mengembangkan jaringan kerjasama ekonomi dengan berbagai pihak.
          <br>
          5 Mengelola dana program yang masuk ke Desa bersifat dana bergulir/Hibah terutama 
          dalam rangka pengentasan kemiskinan dan pengembangan usaha ekonomi di Desa 
          Bekiung.</p>
      </div>
    </div>
    

  <!------------ Facilities ----------->

  <section class="facilities">
    <h1>Our Facilities</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    <div class="row">
        <div class="facilities-col">
            <img src="img/spu.jpeg">
            <h3>Simpan & Pinjam Uang</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aliquid repudiandae minus hic? Rem
                nulla consequuntur ipsa tempore dolorem ipsum exercitationem, dolor harum aperiam hic,
                reprehenderit, culpa reiciendis possimus! Consequatur.</p>
        </div>

        <div class="facilities-col">
            <img src="img/ekonomi.webp">
            <h3>Perekonomian & Perdagangan</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quam accusamus obcaecati laborum
                ducimus quaerat, rerum perferendis qui voluptate placeat. Delectus nulla quasi ea alias tempore non
                error eius enim.</p>
        </div>

        <div class="facilities-col">
            <img src="img/peternakan.jpeg">
            <h3>Pertanian dan Peternakan</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ad dolorem incidunt reiciendis earum,
                ipsam aut quisquam sit a sunt temporibus officiis cupiditate laborum aperiam adipisci soluta cumque
                dolor ab!</p>
        </div>
    </div>
</section>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">OUR TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="./img/suponost.png" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Supono, ST</h3>
          <p class="w3-opacity">CEO Bumdes Bangun Mandiri</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="./img/suriadisurbakti.png" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Suriadi Surbakti</h3>
          <p class="w3-opacity">Advisor</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="./img/bpkwiyono.png" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Wiyono</h3>
          <p class="w3-opacity">SuperVisor</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="./img/sans.png" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Ahsan Nasution</h3>
          <p class="w3-opacity">IT Support</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>


<section class="footer">
  <h2>Bumdes Bangun Mandiri Bekiung.</h2>
  <p>Marilah menjaga, merawat, dan membangun Desa Bekiung Lebih Maju bersama Kami Bumdes Bangun Mandiri Bekiung!</p>
  <div class="icons">
    <a href=""><i class="fa fa-facebook"></i></a> 
    <a href="https://www.instagram.com/bumdesa_bekiung/"><i class="fa fa-instagram"></i></a> 
    <a href="https://www.linkedin.com/in/akhsan-nasution-a62564218/"><i class="fa fa-linkedin"></i></a> 
    <a href="https://wa.me/6289626105445/?text=Hello"><i class="fa fa-twitter"></i></a> 
    <a href="https://youtu.be/Lh6F8WTWUDc"><i class="fa fa-youtube"></i></a> 
  </div>
  <p>Made by Bumdes Bangun Mandiri IT SUPPORT.</p>
</section>

  <script src="./script.js"></script> 

</body>

</html>

<?php
session_start();

echo "Welcome ".$_SESSION['member'];

?>