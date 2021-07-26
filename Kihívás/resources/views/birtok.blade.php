<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('img/icon.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Ion icons-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
  <!--Navbar-->
  <header>
    <div class="container" id="navbar">
      <nav>
      <div class="menu-icons">
    
      <ion-icon class="ion-md-menu" name="menu-outline"></ion-icon>
      <ion-icon class="ion-md-close" name="close"></ion-icon>  <i class="icon-ion-md-close"></i>
      </div>
      <a href="#" class="logo"> <img src="{{ asset('img/logo.png') }}"></a>

      <ul class="nav-list">
        <li>
          <a href="#">NYITÓLAP</a>
        </li>
        <li>
          <a href="#">A BIRTOK</a>
        </li>
        <li>
          <a href="#">WEBSHOP</a>
        </li>
        <li>
          <a href="#">BORKÓSTOLÓ </a>
          <ul class="sub-menu">
            <li>
              <a href="#">EXKLUZÍV BORKÓSTOLÓ MÁDON</a>
            </li>
            <li>
              <a href="#">CÉGES ÉS MAGÁNRENDEZVÉNYEK MÁDON</a>
            </li>
            <li>
              <a href="#">BORKÓSTOLÁS CÉGES ÉS MAGÁN RENDEZVÉNYEKEN MÁDON KÍVÜL</a>
            </li>
            
          </ul>
        </li>
        <li>
          <a href="#">HÍREK
 
 </a>
        </li>
        <li>
          <a href="#">KAPCSOLAT
</a>
        </li>
        <li class="move-right btn">
          <div class="language">

          </div>
          <a href="#" class="kosar">kosár<ion-icon name="cart"></ion-icon><span class="badge">1</span>
</a>
        </li>
        
        
      </ul>
      </nav>
    </div>
  </header>
 <!--Navbar vége-->
  <!--main-->
  <section class="hero">
<div class="first">
  <img src="{{ asset('img/estate-header.jpg') }}" alt="" class="cropped1">
    <h1>A birtok</h1>
    </div>
  </section>
   <!--main vége-->
  
<script src="{{asset('js/app.js')}}">


</script>
</body>
</html>