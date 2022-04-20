<!DOCTYPE html>
<html lang="pl">

<head>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Newtool</title>

  <?php
  wp_head();

  ?>
</head>

<body>
  <div id="background_wrap"></div>
  <div class="container-fluid main">



    <!-- NAWIGACJA -->
    <div class="navigation container-fluid sticky-top">
      <!-- SIDEBAR -->
      <div id="mySidebar" class="sidebar hiden-side">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <br>

        <a href="#onas" class="side-links">O nas</a>
        <a href="#oferta" class="side-links">Nasza oferta</a>
        <a href="#uslugi" class="side-links">Oferowane usługi</a>
        <a href="#sklepy" class="side-links">Nasze strony</a>
        <a href="#kontakt" class="side-links">Kontakt</a>
      </div>

      <div id="main">
        <button class="openbtn hiden-side" onclick="openNav()">☰</button>

      </div>
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-2 col-img ">
          <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/logonewtool.png'; ?>" alt="logo newtool" class="" /></a>
        </div>

        <div class="col-sm-12 col-md-10 ">
          <div class="col-sm-12 nav-kontakt">
            <ul class="d-flex flex-row justify-content-around">
              <li class="pr-5 ml-5 hidden">Adres: 80-278 Gdańsk, ul.Chrzanowskiego 36B</li>
              <li class=""><a href="tel:+48585334349" style="text-decoration:none ; color:white"> Nr telefonu: +48 58 533 43 49</a></li>

            </ul>
          </div>
          <div class=" col-sm-12 hidden">
            <ul class="nav d-flex justify-content-around">
              <li class="nav-item">
                <a class="nav-link" href="#onas">O nas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#oferta">Nasza oferta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#uslugi">Oferowane usługi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sklepy">Nasze strony</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontakt">Kontakt</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- SLIDER -->
    <div class="container-fluid p-0" style="overflow:hidden">
      <div class="slidediv1 mySlides"></div>
      <div class="slidediv4 mySlides"></div>
      <div class="slidediv2 mySlides"></div>
      <div class="slidediv5 mySlides"></div>
      <div class="slidediv3 mySlides"></div>



    </div>
    <!-- SEKCJA O NAS -->
    <div id="onas">
      <div class="container onas" style="overflow:hidden" data-aos="fade-up">

        <div class="row g-0">

          <div class="col-sm-12 col-md-6 center ">
            <h1 class="text-center">O firmie</h1>
            <p class="text-justify">

              Firma „Newtool" Spółka z o.o. zajmuje się sprzedażą narzędzi ręcznych i elektronarzędzi do użytku profesjonalnego, jak również i domowego.
              Dwudziestoletnie doświadczenie właścicieli firmy jest gwarantem fachowości i rzetelnej wiedzy w branży narzędziowej. Nawet najbardziej wymagający klienci będą usatysfakcjonowani profesjonalizmem obsługi.
              Dewiza naszej firmy to:
              „ Zadowolenie klienta z naszych usług jest dla nas najważniejsze.”
              Jesteśmy autoryzowanym dealerem renomowanej firmy Husqvarna, klienci mogą nabyć u nas narzędzia tej firmy służące do pracy w lesie i ogrodzie, jak również w budownictwie.
              Jesteśmy również autoryzowanym dealerem firmy Milwaukee będącej czołowym producentem elektronarzędzi akumulatorowych oraz przewodowych. Zapewniamy do wszystkich narzędzi zarówno osprzęt jak też i wysokiej jakości materiały eksploatacyjne. Posiadamy także w ofercie materiały ścierne firmy Pferd oraz narzędzia marki Wiha.
              Prowadzimy obsługę serwisową gwarancyjną i pogwarancyjną. Nasz serwis zapewni Państwu fachowość i pełen profesjonalizm. Prowadzimy sprzedaż detaliczną i hurtową.
              Zapraszamy do naszych sklepów internetowych , nasi klienci znajdą tam pełną ofertę naszej firmy.

            </p>
          </div>
          <div class="col-sm-12 col-md-6 center text-center align-self-center">
            <img class="p-3" src="<?php echo get_template_directory_uri() . '/assets/newtoolonas.jpg"  '; ?>" alt="newtoolsklep" />
          </div>
        </div>
      </div>
      <!-- GALERIA -->
      <div class="container galeria" style="overflow:hidden">
        <h1 class="text-center" data-aos="fade-right">Krótki spacer po naszym sklepie</h1>
        <div class="row">
          <div class="col col-galeria" data-aos="fade-up">
            <div class="mySlides-gallery">
              <div class="numbertext">1 / 7</div>
              <img src="<?php echo get_template_directory_uri() . '/assets/slajd1.JPG"  '; ?>" alt="zdjecie1" style="width:100%">
            </div>

            <div class="mySlides-gallery">
              <div class="numbertext">2 / 7</div>
              <img src="<?php echo get_template_directory_uri() . '/assets/slajd2.JPG"  '; ?>" alt="zdjecie2" style="width:100%">
            </div>

            <div class="mySlides-gallery">
              <div class="numbertext">3 / 7</div>
              <img src="<?php echo get_template_directory_uri() . '/assets/slajd3.JPG"  '; ?>" alt="zdjecie3" style="width:100%">
            </div>

            <div class="mySlides-gallery">
              <div class="numbertext">4 / 7</div>
              <img src="<?php echo get_template_directory_uri() . '/assets/slajd4.JPG"  '; ?>" alt="zdjecie4" style="width:100%">
            </div>

            <div class="mySlides-gallery">
              <div class="numbertext">5 / 7</div>
              <img src="<?php echo get_template_directory_uri() . '/assets/slajd5.JPG"  '; ?>" alt="zdjecie5" style="width:100%">
            </div>

            <div class="mySlides-gallery">
              <div class="numbertext">6 / 7</div>
              <img src="<?php echo get_template_directory_uri() . '/assets/slajd6.JPG"  '; ?>" alt="zdjecie6" style="width:100%">
            </div>
            <div class="mySlides-gallery">
              <div class="numbertext">7 / 7</div>
              <img src="<?php echo get_template_directory_uri() . '/assets/slajd7.JPG"  '; ?>" alt="zdjecie7" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>



            <div class="row-gallery">
              <div class="column">
                <img class="demo cursor" src="<?php echo get_template_directory_uri() . '/assets/slajd1.JPG"  '; ?>" style="width:100%" onclick="currentSlide(1)" alt="slajd1">
              </div>
              <div class="column">
                <img class="demo cursor" src="<?php echo get_template_directory_uri() . '/assets/slajd2.JPG"  '; ?>" style="width:100%" onclick="currentSlide(2)" alt="slajd2">
              </div>
              <div class="column">
                <img class="demo cursor" src="<?php echo get_template_directory_uri() . '/assets/slajd3.JPG"  '; ?>" style="width:100%" onclick="currentSlide(3)" alt="slajd3">
              </div>
              <div class="column">
                <img class="demo cursor" src="<?php echo get_template_directory_uri() . '/assets/slajd4.JPG"  '; ?>" style="width:100%" onclick="currentSlide(4)" alt="slajd4">
              </div>
              <div class="column">
                <img class="demo cursor" src="<?php echo get_template_directory_uri() . '/assets/slajd5.JPG"  '; ?>" style="width:100%" onclick="currentSlide(5)" alt="slajd5">
              </div>
              <div class="column">
                <img class="demo cursor" src="<?php echo get_template_directory_uri() . '/assets/slajd6.JPG"  '; ?>" style="width:100%" onclick="currentSlide(6)" alt="slajd6">
              </div>
              <div class="column">
                <img class="demo cursor" src="<?php echo get_template_directory_uri() . '/assets/slajd7.JPG"  '; ?>" style="width:100%" onclick="currentSlide(7)" alt="slajd7">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- SEKCJA NASZA OFERTA -->
    <div class="container-fluid oferta " style="overflow:hidden" id="oferta">
      <h1 class="text-center">Nasza oferta produktów</h1>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card card-oferta milwaukee-oferta" data-aos="fade-down">
            <i class="fas fa-chevron-up"></i>

            <div class="card-body">
              <h3 class="text-center">Milwaukee</h3>
              <p class="card-text">
                Amerykańska marka Milwaukee jest jednym z czołowych producentów elektronarzędzi akumulatorowych oraz przewodowych. W ofercie firmy Milwaukee można znaleźć na chwilę obecną kilkaset różnych urządzeń do wszelkich prac zarówno domowych jak też i do zastosowań profesjonalnych.
              </p>
              <p class="text-center"> <a href="https://pl.milwaukeetool.eu" class="btn-oferta text-center">Dowiedz się więcej o marce</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card card-oferta ryobi-oferta" data-aos="fade-down">
            <i class="fas fa-chevron-up"></i>

            <div class="card-body">
              <h3 class="text-center">Ryobi</h3>
              <p class="card-text">
                Ryobi® to jedna z najbardziej dynamicznych marek, oferujących szeroką gamę bezprzewodowych, przewodowych i warsztatowych narzędzi elektrycznych: jej produkty łączą w sobie łatwość obsługi, innowacje oraz doskonałą relację jakości do ceny, stanowiącą najważniejszą cechę naszej marki.
              </p>
              <p class="text-center"> <a href="https://pl.ryobitools.eu/narzedzia-ogrodowe/?pageIndex=0" class="btn-oferta text-center">Dowiedz się więcej o marce</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card card-oferta husqvarna-oferta" data-aos="fade-down">
            <i class="fas fa-chevron-up"></i>
            <div class="card-body">
              <h3 class="text-center">Husqvarna</h3>
              <p class="card-text">
                Szwedzka firma Husqvarna, marka z kilkusetletnią historią o światowym zasięgu, specjalizująca się w produkcji sprzętu do pracy w ogrodzie i lesie, posiada oddzielną gałąź Husqvarna Construction, zajmującą się dystrybucją maszyn do prac budowlanych.
              </p>
              <p class="text-center"> <a href="https://www.husqvarna.com/pl/" class="btn-oferta text-center">Dowiedz się więcej o marce</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card card-oferta pferd-oferta" data-aos="fade-down">
            <i class="fas fa-chevron-up"></i>
            <div class="card-body">
              <h3 class="text-center">Pferd</h3>
              <p class="card-text">
                Pod marką PFERD produkowane i dystrybuowane są narzędzia, znajdujące zastosowanie przy obróbce powierzchni oraz cięciu materiałów. Narzędzia PFERD oferują użytkownikowi znakomitą jakość, najwyższą wydajność przy rozsądnej cenie.
              </p>
              <p class="text-center"><a href="https://www.pferd.com/pl-pl/" class="btn-oferta text-center">Dowiedz się więcej o marce</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card card-oferta wiha-oferta" data-aos="fade-down">
            <i class="fas fa-chevron-up"></i>
            <div class="card-body">
              <h3 class="text-center">Wiha</h3>
              <p class="card-text">
                Wiha to jeden z czołowych producentów narzędzi ręcznych przeznaczonych do użytku profesjonalnego w przemyśle i rzemiośle. Z małej, rodzinnej firmy założonej przed ponad 80 laty, stała się dzisiaj przedsiębiorstwem o zasięgu międzynarodowym.
              </p>
              <p class="text-center"><a href="https://www.wiha.com/pl/pl/" class="btn-oferta text-center">Dowiedz się więcej o marce</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card card-oferta brennenstuhl-oferta" data-aos="fade-down">
            <i class="fas fa-chevron-up"></i>
            <div class="card-body">
              <h3 class="text-center">Brennenstuhl</h3>
              <p class="card-text">
                Firma Brennenstuhl® oferuje produkty wysokiej jakości, które ułatwiają codzienne życie. Oprócz produktów do dystrybucji energii elektrycznej takich jak bębny kablowe, przedłużacze i listwy zasilające, asortyment obejmuje również lampy, reflektory LED i latarki LED.
              </p>
              <p class="text-center"><a href="https://www.brennenstuhl.com/pl-PL" class="btn-oferta">Dowiedz się więcej o marce</a></p>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- SEKCJA USLUGI -->
    <div class="container mt-5 uslugi" style="overflow:hidden" id="uslugi">

      <h1 class="text-center" data-aos="fade-right">Oferowane przez nas usługi</h1>
      <div class="row">
        <div class="col">
          <p data-aos="fade-left">&check; Serwis gwarancyjny i pogwarancyjny</p>
          <p data-aos="fade-right">&check; Fachowe doradztwo w doborze elektronarzędzi oraz sprzętu do ogrodu</p>
          <p data-aos="fade-left">&check; Dobór narzędzi i pomoc w realizacji zamówień w ramach dofinansowania</p>
          <p data-aos="fade-right">&check; Projektowanie instalacji i montaż kosiarek automatycznych Husqvarna Automower®</p>
          <p data-aos="fade-left">&check; Oferta kredytowa i leasingowa</p>
        </div>
      </div>
    </div>
    <!-- SEKCJA SKLEPY INTERNETOWE -->
    <div class="container sklepy mt-5" id="sklepy">
      <h1 class="text-center" data-aos="fade-right">Nasze sklepy i strony internetowe</h1>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
          <div class="card-sklepy text-center">
            <img class="card-img-sklepy-top img-fluid" src="<?php echo get_template_directory_uri() . '/assets/milw.png'; ?>" alt="milwaukee logo" />

            <img class="card-img-sklepy-bottom img-fluid" src="<?php echo get_template_directory_uri() . '/assets/milwaukesklep.png'; ?>" alt="milwaukee sklep" />
            <a href="https://milwauk.com.pl/" class="  btn-sklepy">Przejdź na stronę</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
          <div class="card-sklepy text-center">
            <img class="card-img-sklepy-top img-fluid" src="<?php echo get_template_directory_uri() . '/assets/huqvlogowhite.png'; ?>" alt="husqvarna logo" />

            <img class="card-img-sklepy-bottom img-fluid" src="<?php echo get_template_directory_uri() . '/assets/hqvconsklep.png'; ?>" alt="husqvarna sklep" />
            <a href="https://www.husqvarna.com/pl/" class="  btn-sklepy">Przejdź na stronę</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
          <div class="card-sklepy text-center">
            <p class="autop">Automowery</p>
            <img class="card-img-sklepy-top img-fluid" src="<?php echo get_template_directory_uri() . '/assets/automoverlogo.png'; ?>" alt="automower logo" />

            <img class="card-img-sklepy-bottom img-fluid" src="<?php echo get_template_directory_uri() . '/assets/automowersklep.png'; ?>" alt="automower sklep" />
            <a href="https://www.husqvarna.com/pl/produkty/kosiarki-automatyczne/" class="  btn-sklepy">Przejdź na stronę</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
          <div class="card-sklepy text-center">
            <img class="card-img-sklepy-top img-fluid" src="<?php echo get_template_directory_uri() . '/assets/allegro logo.png'; ?>" alt="allegro logo" />

            <img class="card-img-sklepy-bottom img-fluid" src="<?php echo get_template_directory_uri() . '/assets/allegrosklep.png'; ?>" alt="allegro sklep" />
            <a href="https://allegro.pl/uzytkownik/Newtool1/sklep" class="  btn-sklepy">Przejdź na stronę</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
          <div class="card-sklepy text-center">
            <img class="card-img-sklepy-top img-fluid" src="<?php echo get_template_directory_uri() . '/assets/ledlogo.png'; ?>" alt="Newtool led logo" />

            <img class="card-img-sklepy-bottom img-fluid" src="<?php echo get_template_directory_uri() . '/assets/newtooled.png'; ?>" alt="newtool led" />
            <a href="https://newtool-led.com/" class="  btn-sklepy">Przejdź na stronę</a>
          </div>
        </div>
      </div>
    </div>
    <!-- SEKCJA KONTAKT -->
    <div class="container kontakt" style="overflow:hidden" id="kontakt">
      <h1 class="text-center" data-aos="fade-right">Kontakt</h1>
      <div class="row">
        <div class="col-sm-12 col-md-6 dane-kontaktowe" data-aos="flip-left">
          <h2 class="">Dane Kontaktowe</h2>
          <ul>
            <li><i class="fas fa-map-marker-alt"></i> Adres: 80-278 Gdańsk, ul.Chrzanowskiego 36B </li>
            <li><i class="fas fa-phone-alt"></i> Nr telefonu: +48 58 533 43 49</li>
            <li><i class="far fa-envelope"></i> Adres Email: biuro@newtool.pl</li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-6" data-aos="flip-right">
          <h2 class="text-center">Godziny Pracy</h2>
          <table class="table table-borderless table-kontakt">

            <tbody>
              <tr class="bordered-kontakt">

                <td>Poniedziałek-Piątek</td>
                <td class="text-right">8.00-17.00</td>

              </tr>
              <tr class="bordered-kontakt">

                <td>Sobota</td>
                <td class="text-right">Nieczynne</td>

              </tr>
              <tr class="bordered-kontakt">

                <td>Niedziela</td>
                <td class="text-right">Nieczynne</td>

              </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="row">

        <div class="col-sm-12 " data-aos="zoom-in">
          <div class="kontakt-container-map">
            <h2 class="text-center" data-aos="fade-right">Jak Dojechać</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2323.4522765821616!2d18.5808167010923!3d54.38432599300302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd74e769f73715%3A0x39376eed1102fa5a!2sNEWTOOL%20sp.%20Z%20oo!5e0!3m2!1spl!2spl!4v1615224560308!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="overflow:hidden">
      <div class="row">
        <div class="col rebro">
          <p>2021 Wykonane przez <a href="http://rebro.pl/">ReBro</a></p>
        </div>
      </div>
    </div>
    <!-- KONIEC MAINA -->
  </div>



</body>
<?php
wp_footer();
?>

</html>