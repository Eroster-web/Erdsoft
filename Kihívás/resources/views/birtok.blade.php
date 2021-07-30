<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
      <!--Logó-->
      <a href="#" class="logo"> <img src="{{ asset('img/logo.png') }}"></a>
      <!--Logó vége-->
      <ul class="nav-list">
        <li><a href="#">NYITÓLAP</a></li>
        <li><a href="#">A BIRTOK</a></li>
        <li><a href="#">WEBSHOP</a></li>
        <li><a href="#">BORKÓSTOLÓ </a>
        <!--Legördülő menü-->
               <ul class="sub-menu">
                  <li><a href="#">EXKLUZÍV BORKÓSTOLÓ MÁDON</a></li>
                  <li><a href="#">CÉGES ÉS MAGÁNRENDEZVÉNYEK MÁDON</a></li>
                  <li><a href="#">BORKÓSTOLÁS CÉGES ÉS MAGÁN RENDEZVÉNYEKEN MÁDON KÍVÜL</a></li>
                </ul>
        </li>
        <!--Legördülő menü vége-->
        <li><a href="#">HÍREK</a></li>
        <li><a href="#">KAPCSOLAT</a></li>
        <li class="move-right btn">
          <div class="language">    <!--Hiányzió rész..-->     </div>
          <a href="#" class="kosar">kosár<ion-icon name="cart"></ion-icon><span class="badge">1</span></a>
        </li>
      </ul>
      </nav>
    </div>
  </header>
 <!--Navbar vége-->

  <!--main-->
  <section class="hero">
 <!--Paralax háttér No.1.-->
   <div class="parallax">
     <h1>A birtok</h1>
   </div>
   <!--Paralax vége-->
   <!--Fehér elem ami tartalmazza fekete hátteres szöveget-->
   <div class="white">
   <div class="contex">
                      <h1>Történet</h1>
                        <h3>Magyarország elsőrangú és kivételes borainak legjava.</h3>
                          <p>A Váradi család vaxco birtoka Mádon, az UNESCO világörökség részévé nyilváníitott, történelmi, 
                              Tokaji borvidék területén található – egy kivételesen gazdag terroir, amely különféle termőtalajok találkozásából 
                                keletkezett. A Juliet Victor sokrétű világa megteremti a tökéletes egyensúlyt történelmi és modern között: nagy múltú terroir és csúcstechnológiát 
                                  alkalmazó előállítás. A Juliet Victor elegáns, száraz fehér és igazán egyedülálló, édes desszertborokat alkot a bor szerelmeseinek.</p>
                                    <a href="#" class="next">Tovább<img class="read" src="{{ asset('img/readmore-arrow-white.png') }}"></a>
   </div>
   </div>
   <!--Fehér elem vége-->

   <!--Paralax háttér No.2.-->
   <div class="parallax2"></div>
  <!--Paralax háttér vége-->

  </section>
  <section>
       <div class="split">
          <div class="kep"></div>
          <div class="text-split">
            <h2>A borászat</h2>
          <p>Mád, mint Tokaj-Hegyalja egyik jelentős történelmi települése, a borvidék meghatározó szőlőterületeivel rendelkezik. 
            E területek változatos vulkanikus talaja, ideális fekvése és egyedi mikroklímája révén magas minőségű, izgalmas borok megszületésének adnak lehetőséget.
             A borok létrejöttének a szőlőterület, a szőlő és az ezeket kezelő, évszázadok alatt csiszolódott emberi tudás mellett, egy fontos eleme még a borászati épület is.
              Hegyaljára jellemző módon Mádon is e borászatok többségében nem kint a szőlőben, hanem a település történelmi szerkezetében helyezkednek el, beleilleszkedve a település szövetébe,
               lakó- és különféle középületek szomszédságában.</p>
          <a href="#" class="next2">Tovább<img class="read" src="{{ asset('img/readmore-arrow.png') }}"></a> 
</div>
       </div>
     </section>
     <section class="no2">
          <div class="text">
            <h2>A terület</h2>
          <p>A Juliet Victor számára a világhírű Tokaji borvidék szívében található Mád történelmi községe tökéletes éghajlati feltételeket, termőtalajt és bortermelő területet biztosít, amely az egyedülálló erjesztési és érlelési folyamatok képességének, mesterségbeli tudásának is táptalajává válik.</p>
        </div>
        <div class="ter"></div>
     </section>
     <section>
   <div class="gif">
     <h3>A kíváncsiságod megjutalmazzuk!!</h3>
     <p>Következő vásárlásod alkamával használd a <span>JVRULE007</span> kuponkódot </p>
   </div>
 </section>
     <section>
       <div class="leir">
       <img class="mad" src="{{ asset('img/valentinnapicsomag.png') }}">
       <div class="madki">
         <img class="tropi" src="{{ asset('img/gold-decanter-2020.png') }}" alt="">
         <img class="tropi" src="{{ asset('img/international_trophy_2020-1.png') }}" alt="">
                          </div>
                                              <div class="inner-leir">
                                              <h3>Mád kincsei</h3>
                                              <p class="csom">A CSOMAG TARTALMA:</p>

                                      <p>1 PALACK BOMBOLY FURMINT 2017<br>
                                      1 PALACK SZAMORODNI 2017</p>
                                      <a href="#">Bővebben<img class="read2" src="{{ asset('img/readmore-arrow.png') }}"></a>

                                      <form action="POST" targer="#">
                                            <label for="bor1">15 990Ft</label><br>
                                      <input type="number" id="bor1" value="1" name="bor1"
                                            min="1" max="100"><input class="add" value="Vásrárlás">
                                            </form>
                                            </div>
       </div>
     </section>
     <section>
       <div class="leir2">
       <img class="mad2" src="{{ asset('img/bor2.png') }}">
       <div class="madki2">
         <img class="tropi2" src="{{ asset('img/international_trophy_2020-1.png') }}" alt="">
         <img class="tropi2" src="{{ asset('img/dub2020.png') }}" alt="">
         <img class="tropi2" src="{{ asset('img/grand.png') }}" alt="">
         <img class="tropi2" src="{{ asset('img/dec2019.png') }}" alt="">
        
                          </div>
                                              <div class="inner-leir2">
                                              <h3>Szamorodni 2017</h3>
                                              <p class="line">2017 / ÉDES</p>
                                           

                                      <p>HALVÁNY ARANY SZÍNŰ LÁGY MOZGÁSÚ ÉDES BOR.</p>
                                      <a href="#">Bővebben<img class="read3" src="{{ asset('img/readmore-arrow.png') }}"></a>

                                      <form action="POST" targer="#">
                                            <label for="bor2">9990Ft</label><br>
                                      <input type="number" id="bor2" value="1" name="bor2"
                                            min="1" max="100"><input class="add2" value="Vásrárlás">
                                            </form>
                                            </div>
       </div>
     </section>
     
  
<script src="{{asset('js/app.js')}}">
</script>
</body>
</html>
