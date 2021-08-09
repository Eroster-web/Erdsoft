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
    <title>A birtok - Juliet Victor Winery</title>
    <!--Ion icons-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!--Navbar-->
    <header id="head">
        <div class="container" id="navbar">
            <nav>
                <div class="menu-icons">
                    <ion-icon class="ion-md-menu" name="menu-outline"></ion-icon>
                    <ion-icon class="ion-md-close" name="close"></ion-icon> <i class="icon-ion-md-close"></i>
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
                </ul>
                <div class="langu">
                    <ul class="lang">
                        <li><a href="#">
                                <ion-icon name="person"></ion-icon>BELÉPÉS
                            </a></li>
                        <li><a href="#">HU |</a></li>
                        <li><a href="#">EN |</a></li>
                        <li><a href="#">日本語</a></li>
                    </ul>
                    <p class="kos">Kosár<ion-icon name="cart"></ion-icon>
                    </p>
                </div>
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
                    Tokaji borvidék területén található – egy kivételesen gazdag terroir, amely különféle termőtalajok
                    találkozásából
                    keletkezett. A Juliet Victor sokrétű világa megteremti a tökéletes egyensúlyt történelmi és modern
                    között: nagy múltú terroir és csúcstechnológiát
                    alkalmazó előállítás. A Juliet Victor elegáns, száraz fehér és igazán egyedülálló, édes
                    desszertborokat alkot a bor szerelmeseinek.</p>
                <a href="#" class="next">Tovább<img class="read" src="{{ asset('img/readmore-arrow-white.png') }}"></a>
            </div>
        </div>
        <!--Fehér elem vége-->


        <!--Paralax háttér No.2.-->
        <div class="parallax2"></div>
    </section>
    <!--Paralax háttér vége-->



    <!--A borászat-->
    <section>
        <div class="split">
            <div class="kep"></div>
            <div class="text-split">
                <h2>A borászat</h2>
                <p>Mád, mint Tokaj-Hegyalja egyik jelentős történelmi települése, a borvidék meghatározó
                    szőlőterületeivel rendelkezik.
                    E területek változatos vulkanikus talaja, ideális fekvése és egyedi mikroklímája révén magas
                    minőségű, izgalmas borok megszületésének adnak lehetőséget.
                    A borok létrejöttének a szőlőterület, a szőlő és az ezeket kezelő, évszázadok alatt csiszolódott
                    emberi tudás mellett, egy fontos eleme még a borászati épület is.
                    Hegyaljára jellemző módon Mádon is e borászatok többségében nem kint a szőlőben, hanem a település
                    történelmi szerkezetében helyezkednek el, beleilleszkedve a település szövetébe,
                    lakó- és különféle középületek szomszédságában.</p>
                <a href="#" class="next2">Tovább<img class="read" src="{{ asset('img/readmore-arrow.png') }}"></a>
            </div>
        </div>
    </section>
    <!--A borászat vége-->


    <!--A terület-->
    <section class="no2">
        <div class="text">
            <h2>A terület</h2>
            <p>A Juliet Victor számára a világhírű Tokaji borvidék szívében található Mád történelmi községe tökéletes
                éghajlati feltételeket, termőtalajt és bortermelő területet biztosít, amely az egyedülálló erjesztési és
                érlelési folyamatok képességének, mesterségbeli tudásának is táptalajává válik.</p>
        </div>
        <div class="ter"></div>
    </section>
    <!--A terület vége-->



    <!--A view js-->
    <section>
        <div id="tabs" class="containerr">

            <div class="tabs">
                <a v-on:click="activetab=1" v-bind:class="[ activetab === 1 ? 'active' : '' ]">Betsek</a>
                <a v-on:click="activetab=2" v-bind:class="[ activetab === 2 ? 'active' : '' ]">HOLDVÖLGY</a>
                <a v-on:click="activetab=3" v-bind:class="[ activetab === 3 ? 'active' : '' ]">KIRÁLY</a>
                <a v-on:click="activetab=4" v-bind:class="[ activetab === 4 ? 'active' : '' ]">BOMBOLY</a>
                <a v-on:click="activetab=5" v-bind:class="[ activetab === 5 ? 'active' : '' ]">SZENT-TAMÁS</a>
                <a v-on:click="activetab=6" v-bind:class="[ activetab === 6 ? 'active' : '' ]">Veres</a>
                <a v-on:click="activetab=7" v-bind:class="[ activetab === 7 ? 'active' : '' ]">Úrágya</a>

            </div>
            <div class="content">
                <div v-if="activetab === 1" class="tabcontent">
                    <div class="vue">
                        <div class="carousel">
                            <div class="slides">
                                <img src="{{ asset('img/betsek3.jpg') }}" alt="betsek" class="slide">
                                <img src="{{ asset('img/betsek2.jpg') }}" alt="betsek" class="slide">
                                <img src="{{ asset('img/betsek4.jpg') }}" alt="betsek" class="slide">
                                <img src="{{ asset('img/betsek5.jpg') }}" alt="betsek" class="slide">
                                <img src="{{ asset('img/betsek6.jpg') }}" alt="betsek" class="slide">
                            </div>
                            <div class="controls">
                                <div class="control prev-slide"><img class="back"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                                <div class="control next-slide"><img class="next"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                            </div>
                        </div>
                        <div class="des">
                            <h2>Betsek</h2>
                            <p>A festői szépségű Holdvölgy dűlőben 3,2 hektáron 2,4 m x 0,9 m-es térállású szőlő
                                található – ezen a helyen több kis parcellából áll össze az ültetvény, ezért különböző
                                korú és a Furmint fajtáján belül is különböző alfajták termesztünk a területen, többek
                                közt a T 85-öset, a madárkást vagy a hólyagosat. Ennek a rendhagyó körülménynek
                                köszönhetően nagyon érdekes a Holdvölgy dűlőhöz köthető ízvilág és komplexitás. A talaj
                                vörösagyag és kvarc tartalmú kőzet keveréke – szőlősorok pedig egy lankás dombon, 300
                                méter hosszúságban terülnek el. Egyes helyeken hidrokvarcit képződés mutatkozik, amely
                                nagy mértékű hidrotermás vulkáni munkára utal.</p>
                        </div>
                    </div>
                </div>

                <div v-if="activetab === 2" class="tabcontent">
                    <div class="vue">
                        <div class="carousel">
                            <div class="slides">
                                <img src="{{ asset('img/holdvolgy02.jpg') }}" alt="holdvolgy" class="slide">
                                <img src="{{ asset('img/holdvolgy01.jpg') }}" alt="holdvolgy" class="slide">
                                <img src="{{ asset('img/holdvolgy03.jpg') }}" alt="holdvolgy" class="slide">
                                <img src="{{ asset('img/holdvolgy04.jpg') }}" alt="holdvolgy" class="slide">
                            </div>
                            <div class="controls">
                                <div class="control prev-slide"><img class="back"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                                <div class="control next-slide"><img class="next"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                            </div>
                        </div>
                        <div class="des">
                            <h2>Holdvölgy</h2>
                            <p>A Mád nyugati részén található Úrágya dűlő 0,6 hektáron 2,6 m x 1 m-es térállású
                                területen folytatunk szőlőtermesztést. Furmint és hárslevelű fajta összetétellel
                                rendelkezik az a térség, ahol ernyős művelésmódban termelünk a sűrű lombozat
                                kifejlődésének elkerüléséért. A talaj pincészetünk legkövesebb területe, vörösagyag és
                                riolittufa keveréke. Az egri Eszterházy Károly Egyetem fúrásokat végzett a területen,
                                melynek során - 20 m mélységig hatolva - 11 talajréteget érintettek. Mindez jól
                                példázza, milyen változatos az altalaj ebben az termő közegben, amelyet a szőlő a
                                gyökérzetén keresztül képes megjeleníteni a szőlőbogyóban. A belőle készülő bor
                                rendkívül testes és komplex, köszönhetően a gazdag ásványos termőtalajnak. A
                                szőlőterületet úgynevezett kőbástyák ölelik körül, így - hangulatán kívül - mikroklímája
                                is egyedülálló.</p>
                        </div>
                    </div>
                </div>



                <div v-if="activetab === 3" class="tabcontent">
                    <div class="vue">
                        <div class="carousel">
                            <div class="slides">
                                <img src="{{ asset('img/kiraly01.jpg') }}" alt="kiraly" class="slide">
                                <img src="{{ asset('img/kiraly02.jpg') }}" alt="kiraly" class="slide">
                                <img src="{{ asset('img/kiraly03.jpg') }}" alt="kiraly" class="slide">
                                <img src="{{ asset('img/kiraly05.jpg') }}" alt="kiraly" class="slide">
                                <img src="{{ asset('img/kiraly06.jpg') }}" alt="kiraly" class="slide">
                            </div>
                            <div class="controls">
                                <div class="control prev-slide"><img class="back"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                                <div class="control next-slide"><img class="next"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                            </div>
                        </div>
                        <div class="des">
                            <h2>Király</h2>
                            <p>A történelmi múltú Király dűlőben 3 hektáros összefüggő szőlőterület található, 2,4 m x
                                0,9 m-es térállással. A parcella 1 hektár furmint, 1 hektár hárslevelű és 1 hektár
                                sárgamuskotály szőlőfajtának ad otthont. Mád legmagasabb vulkanikus hegyének derekán
                                található az impozáns ültetvény, melynek talajában riolittufa és agyag keveréke
                                található. A 25 éves múltra visszatekintő szőlőtőkék gyökérzete az utóbbi időben kezdi
                                elérni azt az ideális nagyságot és mélységet, ahonnan a talajban megbújó ásványoknak
                                köszönhetően nagyon komplex szőlőbogyót tud érlelni.</p>
                        </div>
                    </div>
                </div>

                <div v-if="activetab === 4" class="tabcontent">
                    <div class="vue">
                        <div class="carousel">
                            <div class="slides">
                                <img src="{{ asset('img/bomboly01.jpg') }}" alt="bomboly" class="slide">
                                <img src="{{ asset('img/bomboly02.jpg') }}" alt="bomboly" class="slide">
                                <img src="{{ asset('img/bomboly03.jpg') }}" alt="bomboly" class="slide">
                                <img src="{{ asset('img/bomboly04.jpg') }}" alt="bomboly" class="slide">
                                <img src="{{ asset('img/bomboly05.jpg') }}" alt="bomboly" class="slide">
                                <img src="{{ asset('img/bomboly06.jpg') }}" alt="bomboly" class="slide">
                                <img src="{{ asset('img/bomboly07.jpg') }}" alt="bomboly" class="slide">
                                <img src="{{ asset('img/bomboly08.jpg') }}" alt="bomboly" class="slide">
                                <img src="{{ asset('img/bomboly09.jpg') }}" alt="bomboly" class="slide">
                            </div>
                            <div class="controls">
                                <div class="control prev-slide"><img class="back"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                                <div class="control next-slide"><img class="next"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                            </div>
                        </div>
                        <div class="des">
                            <h2>Bomboly</h2>
                            <p>A délnyugati fekvésű, szépséges Bomboly dűlőben 6 hektár 2,4 m x 1 m-es ültetvény
                                található. A fajta összetételeknek, a vulkanikus talajnak és a tőkék korának
                                köszönhetően az egyik legegyedibb területen találhatjuk magunkat. Mintegy 1,2 hektárt
                                2018-ban újra telepítettünk 100% furmint fajtával - a dűlőben található a legöregebb
                                ültetvényünk, maguk a 102 éves furmint tőkék. A rendkívül meredek, hosszan elnyúló 300
                                m-es sorok a hegy tetejétől, egészen a völgy aljáig húzódnak, ennek köszönhetően a völgy
                                párája minden évben nagyobb botritizálódást, aszútermést eredményez. Ebből az
                                adottságból következően születhetnek a területről származó száraz, édes szamorodni és
                                aszú boraink.</p>
                        </div>
                    </div>
                </div>

                <div v-if="activetab === 5" class="tabcontent">
                    <div class="vue">
                        <div class="carousel">
                            <div class="slides">
                                <img src="{{ asset('img/tamas04.jpg') }}" alt="Szent-Tamas" class="slide">
                                <img src="{{ asset('img/tamas01.jpg') }}" alt="Szent-Tamas" class="slide">
                                <img src="{{ asset('img/tamas02.jpg') }}" alt="Szent-Tamas" class="slide">
                                <img src="{{ asset('img/tamas03.jpg') }}" alt="Szent-Tamas" class="slide">
                                <img src="{{ asset('img/tamas05.jpg') }}" alt="Szent-Tamas" class="slide">
                            </div>
                            <div class="controls">
                                <div class="control prev-slide"><img class="back"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                                <div class="control next-slide"><img class="next"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                            </div>
                        </div>
                        <div class="des">
                            <h2>Szent-Tamás</h2>
                            <p>Mád egyik legkomplexebb ásványi anyag összetételű dűlőjében, a Szent Tamás Dűlőben 0,4
                                hektár 2,4 m x 1 m-es térállású ültetvényünk található. A régmúltba visszatekintő,
                                1962-es ültetés ellenére 98 %-ban eredeti furmint és hárslevelű tőkékkel rendelkezik a
                                terület. A talaj felső rétege vörösagyag, amely 3 m vastagságban helyezkedik el a
                                felszínen és az ezt követő altalaj pedig egybefüggő zeolit réteg. A sorokon végigsétálva
                                az öreg tőkékre jellemző nyugodtság hatása érzékelhető - apró laza fürtök, vékonyabb
                                hajtások jellemzőek ezen a különleges termőterületen.</p>
                        </div>
                    </div>
                </div>

                <div v-if="activetab === 6" class="tabcontent">
                    <div class="vue">
                        <div class="carousel">
                            <div class="slides">
                                <img src="{{ asset('img/veres01.jpg') }}" alt="veres" class="slide">
                                <img src="{{ asset('img/veres02-1200x800.jpg') }}" alt="veres" class="slide">
                                <img src="{{ asset('img/veres03.jpg') }}" alt="veres" class="slide">
                                <img src="{{ asset('img/veres04.jpg') }}" alt="veres" class="slide">
                                <img src="{{ asset('img/veres05.jpg') }}" alt="veres" class="slide">
                                <img src="{{ asset('img/veres06.jpg') }}" alt="veres" class="slide">
                            </div>
                            <div class="controls">
                                <div class="control prev-slide"><img class="back"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                                <div class="control next-slide"><img class="next"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                            </div>
                        </div>
                        <div class="des">
                            <h2>Veres</h2>
                            <p>A magas talajminőségű Veres dűlőben 1,4 hektáron 2,6 m x 1 m-es térállású szőlő
                                ültetvénnyel rendelkezünk. Tőkéink 35 évesek - furmint és hárslevelű fajtaösszetétellel
                                dolgozunk. A Veres dűlőt 100%-ban az édes szamorodni és aszú borok alapboraiba
                                használjuk ezért a madarak dézsmálása ellen hálózzuk a területet, így óvjuk az
                                egyedülálló termést. A szüretet novemberben kezdjük az ültetvényen, amelynek termése
                                kimagaslóan botritizálódik, aszúsodik a tufának és a vörösagyag vízmegtartó képességének
                                köszönhetően.</p>
                        </div>
                    </div>
                </div>

                <div v-if="activetab === 7" class="tabcontent">
                    <div class="vue">
                        <div class="carousel">
                            <div class="slides">
                                <img src="{{ asset('img/uragya01.jpg') }}" alt="uragya" class="slide">
                                <img src="{{ asset('img/uragya02.jpg') }}" alt="uragya" class="slide">
                                <img src="{{ asset('img/uragya03.jpg') }}" alt="uragya" class="slide">
                                <img src="{{ asset('img/uragya04.jpg') }}" alt="uragya" class="slide">
                                <img src="{{ asset('img/uragya05.jpg') }}" alt="uragya" class="slide">
                                <img src="{{ asset('img/uragya06.jpg') }}" alt="uragya" class="slide">
                            </div>
                            <div class="controls">
                                <div class="control prev-slide"><img class="back"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                                <div class="control next-slide"><img class="next"
                                        src="{{ asset('img/readmore-arrow-white.png') }}"></div>
                            </div>
                        </div>
                        <div class="des">
                            <h2>Úrágya</h2>
                            <p>A Mád nyugati részén található Úrágya dűlő 0,6 hektáron 2,6 m x 1 m-es térállású
                                területen folytatunk szőlőtermesztést. Furmint és hárslevelű fajta összetétellel
                                rendelkezik az a térség, ahol ernyős művelésmódban termelünk a sűrű lombozat
                                kifejlődésének elkerüléséért. A talaj pincészetünk legkövesebb területe, vörösagyag és
                                riolittufa keveréke. Az egri Eszterházy Károly Egyetem fúrásokat végzett a területen,
                                melynek során - 20 m mélységig hatolva - 11 talajréteget érintettek. Mindez jól
                                példázza, milyen változatos az altalaj ebben az termő közegben, amelyet a szőlő a
                                gyökérzetén keresztül képes megjeleníteni a szőlőbogyóban. A belőle készülő bor
                                rendkívül testes és komplex, köszönhetően a gazdag ásványos termőtalajnak. A
                                szőlőterületet úgynevezett kőbástyák ölelik körül, így - hangulatán kívül - mikroklímája
                                is egyedülálló.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--View js vége-->



    <!--Ajándék-->
    <section>
        <div class="gift">
            <h3>A kíváncsiságod megjutalmazzuk!!</h3>
            <p>Következő vásárlásod alkamával használd a <span>JVRULE007</span> kuponkódot </p>
        </div>
    </section>
    <!--Ajándék vége-->



    <!--A borok-->
    <section class="fl">
        <div class="leir">
            <img class="mad" src="{{ asset('img/valentinnapicsomag.png') }}">

            <img class="tropi" src="{{ asset('img/gold-decanter-2020.png') }}" alt="">
            <img class="tropi" src="{{ asset('img/international_trophy_2020-1.png') }}" alt="">

            <div class="inner-leir">
                <h3>Mád kincsei</h3>
                <p class="csom">A CSOMAG TARTALMA:</p>

                <p>1 PALACK BOMBOLY FURMINT 2017<br>
                    1 PALACK SZAMORODNI 2017</p>
                <a href="#">Bővebben<img class="read2" src="{{ asset('img/readmore-arrow.png') }}"></a>

                <form action="POST" targer="#">
                    <label for="bor1">15 990Ft</label><br>
                    <input type="number" id="bor1" value="1" name="bor1" min="1" max="100"><input class="add"
                        value="Vásrárlás">
                </form>
            </div>
        </div>

        <div class="leir2">
            <img class="mad2" src="{{ asset('img/bor2.png') }}">
            <img class="tropi2" src="{{ asset('img/international_trophy_2020-1.png') }}" alt="">
            <img class="tropi2" src="{{ asset('img/dub2020.png') }}" alt="">
            <img class="tropi2" src="{{ asset('img/grand.png') }}" alt="">
            <img class="tropi2" src="{{ asset('img/dec2019.png') }}" alt="">


            <div class="inner-leir2">
                <h3>Szamorodni 2017</h3>
                <p class="line">2017 / ÉDES</p>


                <p>HALVÁNY ARANY SZÍNŰ LÁGY MOZGÁSÚ ÉDES BOR.</p>
                <a href="#">Bővebben<img class="read3" src="{{ asset('img/readmore-arrow.png') }}"></a>

                <form action="POST" targer="#">
                    <label for="bor2">9990Ft</label><br>
                    <input type="number" id="bor2" value="1" name="bor2" min="1" max="100"><input class="add2"
                        value="Vásrárlás">
                </form>
            </div>
        </div>
    </section>
    <!--A borok vége-->




    <script src="{{asset('js/app.js')}}">
    </script>
</body>

</html>
