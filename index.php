<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Himalaya Hotel</title>
    <link rel="stylesheet" href="_css/headerNfooterStyle.css">
    <link rel="stylesheet" href="_css/master.css">
    <link rel="stylesheet" href="_css/slider.css">
  </head>
  <body>
    <header class="header">

      <div class="headerContent">
        <ul id="headerList">

          <div class="logo">
            <a href="index.php">
              <img src="_images/logo.png" alt="logo" id="logo">
            </a>
          </div>

          <li><a href="index.php">Home</a></li>
          <li><a href="#">Cadastro</a></li>
          <li><a href="#">Quartos</a></li>
          <li><a href="#">Sobre</a></li>

        </ul>
      </div>

    </header>

    <div class="container">


      <div class="slider">

        <input type="radio" name="images" id="im1" checked>
        <input type="radio" name="images" id="im2">
        <input type="radio" name="images" id="im3">

        <div class="sliderImages" id="imgOne">
          <img src="_images/nepalHotel.jpg" alt="NepalHotel">
          <label for="im3" class="pre"></label>
          <label for="im2" class="next"></label>
        </div>

        <div class="sliderImages" id="imgTwo">
          <img src="_images/nepalMountain.jpg" alt="NepalMountain">
          <label for="im1" class="pre"></label>
          <label for="im3" class="next"></label>
        </div>

        <div class="sliderImages" id="imgThree">
          <img src="_images/nepalTown.jpg" alt="NepalTown">
          <label for="im2" class="pre"></label>
          <label for="im1" class="next"></label>
        </div>

        <div class="nav">
          <label class="dots" id="dot1" for="im1"></label>
          <label class="dots" id="dot2" for="im2"></label>
          <label class="dots" id="dot3" for="im3"></label>
        </div>
      </div>

    </div>

<footer class="footer">
<p>Website Developed by Marcos Motta</p>
</footer>
  </body>
</html>
