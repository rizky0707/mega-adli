<?php
// Create database connection using config file
ob_start();
include_once("config.php");
// Fetch all users data from database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding | Mega & Adli</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <style>

    body, html {
    overflow-x: hidden;
    }
    
      body{
        margin: 0px;
        padding: 0px;
        overflow-x: hidden;
      }

header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;        
  /* font-family: 'Playball', cursive; */
  /* font-size: 100px; */
  
}

.text-font-header {
  font-family: 'Playball', cursive;
  font-size: 80px;
}

h4, h3 {
  font-family: 'Playball', cursive;
  font-size: 30px;
}

h2{
  font-family: serif;
}


header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

/* Media Query for devices withi coarse pointers and no hover functionality */

/* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

/* @media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }

  header video {
    display: none;
  }
} */


    
.nav-ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  z-index: 1;
}


.nav-li {
  float: left;
}

.nav-li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10px 11px;
  text-decoration: none;
}

.nav-li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

/* section reservation  */

.bg-reservation{
  /* background-image: url("https://sherlyarfan.me/wp-content/uploads/2022/09/Peach-and-Pink-Floral-Watercolor-Wedding-Invitation-1536x1167.png"); */
  background-image: linear-gradient(to right, #4343438e 0%, rgba(172, 156, 156, 0.356) 100%),  url('images/bg-form.png');
  background-repeat: no-repeat;
 
}

.reservation {
  padding-bottom: 0;
}

.bg-arrum{
  /* background-image: url("https://sherlyarfan.me/wp-content/uploads/2022/09/Peach-and-Pink-Floral-Watercolor-Wedding-Invitation-1536x1167.png"); */
  background-image: linear-gradient(to right, #4343438e 0%, rgba(0, 0, 0, 0.356) 100%),  url('images/bg-arrum.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  
}

.arrum-spasing
{
  padding-top: 150px;
  padding-right: 80px;
  padding-bottom: 150px;
  padding-left: 80px;
  text-align: center;
}

footer{
  padding-top: 30px;
  padding-right: 80px;
  padding-bottom: 30px;
  padding-left: 80px;
  background-color: #111;
  text-align: center;
}

/* section img gallery */

.example-image {
    width: 100%;
    box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.432);
}

.example-image:hover {
    width: 100%;
    box-shadow: 0px 5px 4px rgba(247, 247, 247, 0.432);
   border-radius: 10px;
}
.bg_bunga_atas_kiri{
  /* z-index:-1;  */
  float: left;
  /* overflow-x: hidden; */

}

.bg_bunga_atas_kanan{
  /* z-index:-1;  */
  float: right;
  /* overflow-x: hidden; */

}

.bg_bunga_bawah_kiri{
 margin-top: -155px; 
  float: left;
  /* overflow-x: hidden; */

}

.bg_bunga_bawah_kanan{
 margin-top: -375px; 
  float: right;
  /* overflow-x: hidden; */

}


.bg_profile_atas_kiri{
  /* z-index:-1;  */
  float: left;
  /* overflow-x: hidden; */

}

.bg_profile_atas_kanan{
  /* z-index:-1;  */
  float: right;
  /* overflow-x: hidden; */

}

.bg_profile_bawah_kiri{
 margin-top: -150px;
  float: left;
  /* overflow-x: hidden; */

}

.bg_profile_bawah_kanan{
 margin-top: -320px; 
  float: right;
  /* overflow-x: hidden; */

}
tr, td {
  color: white;
}

@media (min-width: 320px) and (max-width: 768px) { 
 .arrum-spasing {
  
  padding-top: 150px;
  padding-right: 10px;
  padding-bottom: 150px;
  padding-left: 10px;
  text-align: center;
 }
  
 .bg-arrum{
  /* background-image: url("https://sherlyarfan.me/wp-content/uploads/2022/09/Peach-and-Pink-Floral-Watercolor-Wedding-Invitation-1536x1167.png"); */
  background-image: linear-gradient(to right, #4343438e 0%, rgba(0, 0, 0, 0.356) 100%),  url('images/bg-arrum.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  
}

  ul, li {
    font-size: 13px;
    overflow-x: hidden;
  }

  .bg_bunga_atas_kiri, .bg_bunga_atas_kanan, .bg_bunga_bawah_kiri, .bg_bunga_bawah_kanan {
    width: 100px;
  }

  .bg_bunga_bawah_kiri {
    margin-top: -50px; 
    float: left;
  }

  .bg_bunga_bawah_kanan {
    margin-top: -125px; 
  }

  .bg_profile_atas_kiri, .bg_profile_atas_kanan, .bg_profile_bawah_kiri, .bg_profile_bawah_kanan {
    width: 70px;
  } 

  .bg_profile_atas_kiri, .bg_profile_atas_kanan {
    margin-top: 3;
    margin-bottom: 3;


  }

  .bg_profile_bawah_kiri {
    margin-top: -40px; 
    float: left;


  }

  .bg_profile_bawah_kanan {
    margin-top: -90px; 
  }

  .text-font-header {
    font-size: 50px;
  }
  
  .txt-event {
    font-size: 30px;
    padding-left: 60px;
    padding-right: 80px;
  }

  .ayat {
    font-size: 20px;
    text-align: justify;
  }

  .quran {
    font-size: 20px;
  }

  .btn-p {
    margin-bottom: 10px;
  }

}

    </style>
    <script>
    //check for Navigation Timing API support
if (window.performance) {
  console.info("window.performance works fine on this browser");
}

if (performance.navigation.type == 1) {
 console.info( "This page is reloaded" );
 window.location.reload()
 window.location = "index.php"; // The url you want
} else {
 console.info( "This page is not reloaded");
}
    </script>
</head>
<body>
  
  <header>
   
  <audio autoplay loop>
    <source src="music/backsound.mp3" type="audio/mp3">
</audio>
    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
  
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="video/Footage.mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100" id="home">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <p>We are getting Married</p>
          <h1 class="display-3 text-font-header animate__animated animate__slideInDown">Mega & Adli</h1>
          <p class="lead mb-0">Save The Date</p>
         <h6 class="pt-3 pb-3"><u>Menikah</u></h6>
         <h4 class="animate__animated animate__slideInDown">14 Mei 2023</h4>
         <a target="_blank" href="https://calendar.google.com/calendar/event?action=TEMPLATE&amp;tmeid=NGljY25uODM2NnA1c2JqaXFxNzk3djI2Nm0gcmV6ZWtpbTUyM0Bt&amp;tmsrc=rezekim523%40gmail.com" style="
         padding-left: 22px;
         padding-right: 22px;
         padding-bottom: 10px;
         padding-top: 10px;
     " class="btn btn-outline-success text-light text-uppercase">Tambah Ke Kalender</a>
        
        </div>
      </div>
    </div>
  </header>
 
  <ul class="nav-ul row justify-content-center">
    <li class="nav-li col-2"><a href="#home">Home</a></li>
    <li class="nav-li col-2"><a href="#event">Lokasi</a></li>
    <li class="nav-li col-2"><a href="#rsvp">RSVP</a></li>
    <li class="nav-li col-2"><a href="#about">Tentang</a></li>
    <li class="nav-li col-2"><a href="#deliver">Kirim</a></li>
  </ul>
  
  <section class="arrum bg-arrum">
    <div class="container">
      <div class="arrum-spasing text-light wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
        <h3 class="ayat">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang.
        </h3>
        <br>
        <h4 class="quran">Qur’an Ar-Ruum 30:21</h4>
      </div>
    </div>
  </section>

  <img src="images/bunga01.png" class="bg_profile_atas_kiri wow animate__fadeInTopLeft" data-wow-duration="2s" data-wow-delay="0.5s"  width="250px" alt="" srcset="">
  <img src="images/bunga02.png" class="bg_profile_atas_kanan wow animate__fadeInTopRight" data-wow-duration="2s" data-wow-delay="0.5s" width="250px" alt="" srcset="">

  <section class="calon" id="about">
  
      <div class="container pt-5">
        <center>
          <!-- <img src="https://sherlyarfan.me/wp-content/uploads/2020/06/rose-icon-01-2.png" alt=""> -->
        <h3 class="wow animate__fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">Know More About Us</h3>
      </center>
      <div class="row pb-5">
          <div class="col-md-6 wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <center>
            <img src="images/mega.png" class="img-calon" alt="">
            <div class="txt-name-calon">
              <h3>Mega Rangga Wulan, S.M</h3>
              <p>Putri dari Bapak Emon Sutisna, S.Pd dan Ibu Sopiah</p>
              <a href="https://instagram.com/megaarw?igshid=ZDdkNTZiNTM=">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg>
            </a>
            </div>
          </center>
          </div>
          <div class="col-md-6 wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <center>
            <img src="images/ahmad.png" alt="">
            <div class="txt-name-calon">
              <h3>Ahmad Adli, S.Kom</h3>
              <p>Putra dari Bapak Husin Syah (Alm.) dan Ibu Dra. Lisna Harun</p>
              <a href="https://instagram.com/_ahmadli?igshid=ZDdkNTZiNTM=">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
              </svg>
            </a>
            </div>
          </center>
          </div>
      </div>
      <!-- <div class="gallery text-center pt-5 pb-5">
        <div class="pb-4">
        <h3>Gallery</h3>
        </div>
    <div class="row justify-content-center wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.4s">
        
      <div class="col-lg-4">
      <a class="example-image-link" href="images/gallery02.png" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/gallery02.png" alt=""/></a>
    </div>
    <div class="col-lg-4">
      <a class="example-image-link" href="images/gallery01.png" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image" src="images/gallery01.png" alt="" /></a>
      </div>
      <div class="col-lg-4">
      <a class="example-image-link" href="images/gallery03.png" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image" src="images/gallery03.png" alt="" /></a>
      </div>
    </div>
  </div> -->
  </section>
  <img src="images/bunga03.png" class="bg_profile_bawah_kiri wow animate__fadeInBottomLeft" data-wow-duration="2s" data-wow-delay="0.5s"  width="250px" alt="" srcset="">
  <img src="images/bunga04.png" class="bg_profile_bawah_kanan wow animate__fadeInBottomRight" data-wow-duration="2s" data-wow-delay="0.5s" width="250px" alt="" srcset="">


    
  <img src="images/bunga01.png" class="bg_bunga_atas_kiri wow animate__fadeInTopLeft" data-wow-duration="2s" data-wow-delay="0.5s" width="300px" alt="" srcset="">
  <img src="images/bunga02.png" class="bg_bunga_atas_kanan wow animate__fadeInTopRight" data-wow-duration="2s" data-wow-delay="0.5s" width="300px" alt="" srcset="">

  <section class="when" id="event">
      <div class="container pt-4">
          
        
          <center><img src="images/roses.gif" width="70px" alt="" srcset=""></center>
        <center><h3 class="txt-event wow animate__fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">When & Where</h3></center>
        <center><p>We love to see you soon</p></center>
        <!-- <img src="images/rose_user.png" alt=""> -->
     
      
        <div class="col-md-12">
        <div class="shadow p-3 mb-5 bg-white text-center wow animate__fadeInLeft" data-wow-duration="2s" data-wow-delay="0.5s">
          <div class="row">
          <div class="col-md-6">
          <div class="icon pt-4">
            <img src="images/ring.gif" width="60" height="60" alt="" srcset="">
          </div>
          <h4 class="txt-judul pt-4">Akad Nikah</h4>
          <p class="pg-1 pt-3">Minggu, 14 Mei 2023<br>07.00 - 09.00</p>
          </div>
          <div class="col-md-6">
            <div class="icon pt-4">
              <img src="images/wedding-date.gif" width="60" height="60" alt="" srcset="">
            </div>
            <h4 class="txt-judul pt-4">Resepsi</h4>
            <p class="pg-1 pt-3">Minggu, 14 Mei 2023<br>09.00 - 13.00</p>
          </div>
          
          </div>
          <div class="">
            <b>Ponyo Resto & Wedding</b> <br>
Jl. Raya Cinunuk No.186, Cinunuk, Kec. Cileunyi, Kabupaten Bandung, Jawa Barat 40624

          </div>
          <div class="container maps pt-4">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=450&amp;height=300&amp;hl=en&amp;q=Jl. Raya Cinunuk No.186, Cinunuk, Kec. Cileunyi, Kabupaten Bandung, Jawa Barat 40624, Indonesia&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdf download">Pdf download</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
          </div>
          </div>
    </div>
    <div class="txt-4 text-center">
    <!-- <h2>Lihat undangan kami!</h2> -->
    <div class="pt-3 pb-4">
    <!-- <a href="https://sherlyarfan.me/wp-content/uploads/2022/10/ISA.png" target="_blank" class="btn btn-outline-success">DOWNLOAD HERE</a> -->
    
  </div>
  </div>
  </div>

  </section>

  
  <img src="images/bunga03.png" class="bg_bunga_bawah_kiri wow animate__fadeInBottomLeft" data-wow-duration="2s" data-wow-delay="0.5s"  width="300px" alt="" srcset="">
  <img src="images/bunga04.png" class="bg_bunga_bawah_kanan wow animate__fadeInBottomRight" data-wow-duration="2s" data-wow-delay="0.5s" width="300px" alt="" srcset="">

  
  <section class="reservation bg-reservation" id="rsvp">
    <div class="overlay-reservation"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center pt-5 pb-5 text-light wow animate__slideInDown" data-wow-duration="2s" data-wow-delay="0.5s">
          <h3>Deliver Your Present Here</h3>
        </div>
        <div class="col-md-6">
          <div class="row">
          <div class="col-md-2">
            <img src="https://kartinisugih.com/wp-content/uploads/2022/11/Copy-of-Kiara-Austen-Studios-sampel-get-asset-another-1-1.png" width="50px" alt="">
          </div>
          <div class="col-md-10 text-light pb-4">
          <h5>
            Name: MEGA & ADLI <br>

          </h5>
          <p class="pt-2">
            Bagi yang berkeinginan memberikan kado pernikahan atau tanda kasih, kami juga menyediakan wedding gift pada link di bawah ini.
          </p>
          <button type="button" data-toggle="modal" data-target="#exampleModalgift" class="btn btn-outline-light btn-p" >SEND YOUR GIFT</button>
          <button type="button" data-toggle="modal" data-target="#exampleModaltransfer" class="btn btn-outline-light">SEND YOUR HAPPINESS</button>

         <!-- Modal -->
<div class="modal fade" id="exampleModalgift" tabindex="-1" role="dialog" aria-labelledby="exampleModalgift" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalgift">SEND YOUR GIFT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        <div class="row text-center">
        <div class="col-md-12">
          
          <p class="pt-2">
            Alamat <br>
          
              <div class="input-group">
                <input type="text" class="form-control form-control-sm" id="text-copy-address" value="Komplek Ciwastra Indah Blok E no. 30, Margasari, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286">
                <span class="input-group-btn">
                <button class="btn btn-outline-success btn-sm copy-btn-address" type="button">
                    Copy
                </button>
                </span>
            </div> 
          </div> 
          </p>
      </div>
      </div>
    </div>
  </div>
</div>
        </div>
        
        <div class="col-md-2">
            <img src="https://kartinisugih.com/wp-content/uploads/2022/11/Copy-of-Kiara-Austen-Studios-sampel-get-asset-another-2.png" width="50px" alt="">
          </div>
          <!-- <div class="col-md-10 text-light">
            <h5>
              Name: MEGA & ADLI <br>
  
            </h5>
            <p class="pt-2">
              Bagi yang berkeinginan memberikan kado pernikahan atau tanda kasih, kami juga menyediakan wedding gift pada link di bawah ini.
            </p>
          <button type="button" data-toggle="modal" data-target="#exampleModaltransfer" class="btn btn-outline-light">SEND YOUR HAPPINESS</button>
        </div> -->
        
      <!-- Modal -->
<div class="modal fade" id="exampleModaltransfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLongTitle">Send your happiness</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        <div class="row text-center">
        <div class="col-md-6">
          <img src="images/bca.png" width="50%" alt="">
          <p class="pt-2">
            Bank BCA a.n. Mega Rangga Wulan <br>
          
              <div class="input-group">
                <input type="text" class="form-control form-control-sm col-md-6" id="text-copy" value="7751286094" style="
    margin-left: 38px;
">
                <span class="input-group-btn">
                <button class="btn btn-outline-success btn-sm copy-btn" type="button">
                    Copy
                </button>
                </span>
            </div> 
          </div> 
          </p>
          
        <div class="col-md-6">
          <img src="images/mandiri.png" width="50%" srcset="">
          <p class="pt-2">
            Mandiri a.n. Ahmad Adli
            <div class="input-group">
              <input type="text" class="form-control form-control-sm col-md-6" id="text-copy-dana" value="1310019772500" style="
  margin-left: 38px;
">
              <span class="input-group-btn">
              <button class="btn btn-outline-success btn-sm copy-btn-dana" type="button">
                  Copy
              </button>
              </span>
          </div> 
          </p>
        </div>

        <div class="col-md-6 pt-2">
          <img src="images/linkaja.png" width="50%" srcset="">
          <p class="pt-2">
            Link Aja a.n. Ahmad Adli
            <div class="input-group">
              <input type="text" class="form-control form-control-sm col-md-6" id="text-copy-dana" value="082386143678" style="
  margin-left: 38px;
">
              <span class="input-group-btn">
              <button class="btn btn-outline-success btn-sm copy-btn-dana" type="button">
                  Copy
              </button>
              </span>
          </div> 
          </p>
        </div>

      </div>
      </div>
    </div>
  </div>
</div>

      </div>
        </div>

        <div class="col-md-6">
          <div class="row">
          <div class="col-md-2">
            <img src="https://kartinisugih.com/wp-content/uploads/2022/11/Copy-of-Kiara-Austen-Studios-sampel-get-asset-another-3.png" width="50px" alt="">
          </div>
          <div class="col-md-10 text-light pb-4" id="post">
            <form method="POST" action="">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Konfirmasi Kehadiran</label>
                <select name="keterangan" class="form-control" id="exampleFormControlSelect1" required>
                  <option value="Hadir">Hadir</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Message</label>
                <textarea name="pesan" class="form-control" id="" rows="4" cols="50" placeholder="Message" required></textarea>
              </div>
             
              
              <button type="submit" name="btn_simpan" class="btn btn-primary" onclick="return mess();">Send Your Message</button>
            </form>
            <?php 
            if(isset($_POST['btn_simpan'])){
            $nama = $_POST['nama'];
            $keterangan = $_POST['keterangan'];
            $pesan = $_POST['pesan'];
             
            // menginput data ke database
            if(!empty($nama) && !empty($keterangan) && !empty($pesan)){
            mysqli_query($config,"insert into mega_adli values('','$nama','$keterangan','$pesan')");
            }
            // mengalihkan halaman kembali ke index.php
        //     echo "<div class='row justify-content-center mt-5'>
        //     <div class='col-md-12'>
        //         <div class='alert alert-success' role='alert'>
        //         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        //         <strong>Success!</strong> Terima Kasih Atas Ucapannya!
        //       </div>
        //     </div>
        // </div>";
            header('location: invit.php#table');
            exit();
            
            }
            ?>
        </div>
        
      </div>
          
        </div>
    </div>
    
    <!-- tabel  -->
    <table class="table g-0" id="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody>
      <?php 
				$batas = 5;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$Previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($config,"select * from mega_adli");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);

				$data_undangan = mysqli_query($config,"select * from mega_adli order by id DESC limit $halaman_awal, $batas");
				$nomor = $halaman_awal+1;
			  while($d = mysqli_fetch_array($data_undangan)){
					?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['pesan']; ?></td>
            <td><?php echo $d['keterangan']; ?></td>

					</tr>
					<?php
				
      }
				?>
      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center pb-4 pt-4">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous#table'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>#table"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next#table'"; } ?>>Next</a>
				</li>
			</ul>
      <!-- <ul class="pagination justify-content-center pb-4 pt-4">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul> -->
    </nav>
    <center><img src="images/underline.png" width="40px" alt="" srcset="">
    </center>
    </div>
    
    
  </section>
  
 
  
  
  <footer id="deliver">
    <div class="text-center">
      <img src="images/home.png" width="40px" alt="" srcset="">
    <p class="text-light pt-2">Komplek Ciwastra Indah Blok E no. 30, Margasari, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286</p>
  </div>
  </footer>

  <script type="text/javascript">
      function mess () 
      {
        // document.write(`"<div class='row justify-content-center mt-5'>
        // <div class='col-md-12'>
        // <div class='alert alert-success' role='alert'>
        // <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        // <strong>Success!</strong> Terima Kasih Atas Ucapannya!
        // </div>
        // </div>
        // </div>"`);
        alert ("Terima Kasih Atas Ucapannya!");
        return true;
      }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script></body>
    <script src="dist/js/lightbox-plus-jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script src="js/wow.min.js"></script>
    
   

    <script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 4000);
    });    
</script>

    <script>
      new WOW().init();
     </script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('.copy-btn').on("click", function(){
              $("#text-copy").select();
              document.execCommand("copy");
              alert('text copied...');
          })
      })
  </script>

<script type="text/javascript">
  $(document).ready(function(){
      $('.copy-btn-dana').on("click", function(){
          $("#text-copy-dana").select();
          document.execCommand("copy");
          alert('text copied...');
      })
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){
      $('.copy-btn-address').on("click", function(){
          $("#text-copy-address").select();
          document.execCommand("copy");
          alert('text copied...');
      })
  })
</script>

    
    </html>