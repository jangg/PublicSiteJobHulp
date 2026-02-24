<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include_once ('includes/head.php'); ?>
  <link href="/assets/css/style_stichting.css" rel="stylesheet">
  
  <!-- cookiealert styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  <script>
    $(document).ready(function() {
      $('#a_over').addClass('active');
    });
  </script>

</head>

<body>
  <?php include_once ('includes/header.php'); ?>


  <main id="main">
    <!-- <main id="main"> -->

    <!-- ======= Hero Section ======= -->
    <section id="pagehero" class="d-flex align-items-center">
      <div id="overlay"></div>
      <div class="container" data-aos="zoom-out" data-aos-delay="100" style="z-index: 3;">
        <h1 class="col-lg-12 d-none d-lg-block text-center" style="font-size: 4em;">Onze <span>Visie</span></h1>
        <h1 class="col-lg-12 d-lg-none" style="font-size: 2em;">Onze <span>Visie</span></h1>
        <!-- <h1 class="col-lg-12 d-lg-none" style="font-size: 2em;">Welkom bij <span>JobHulpMaatje Zoetermeer</span></h1>
      <h2 class="my-5">Als je op zoek bent naar werk en je kunt wat hulp gebruiken</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto mx-2" style="width: 150px;  border-radius: 5px;">Begin hier</a>
        <a href="#news" class="btn-read-news border border-white scrollto text-white" style="width: 150px;  border-radius: 5px;"><i class="bi bi-newspaper"></i></i><span>  Nieuws</span></a>
      </div> -->
      </div>
    </section><!-- End Hero -->
    <!-- ======= Page Section ======= -->
    <section id="page" class="section-two">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Wat doen we?</h2>
          <h3>En hoe doen wij het dan?</h3>
          <p>JobHulp Culemborg steunt mensen die werkzoekend zijn of zich niet meer thuis voelen in hun huidige baan. Het doel is om de zelfredzaamheid, onafhankelijkheid en de bemiddelbaarheid op de arbeidsmarkt te verhogen. JobHulp Culemborg werkt aanvullend op en in samenwerking met bestaande werkbegeleidings- en re-integratietrajecten door werkzoekenden, mens- en doelgericht bij te staan.</p>
          <p>Om dit te kunnen doen leidt JobHulp Culemborg al sinds 2015 vrijwilliers op tot JobMaatje,  zodat zij werkzoekenden kunnen ondersteunen die meer tijd en aandacht nodig hebben. Zo wordt de maatschappelijke betrokkenheid op lokaal niveau vergroot. Bovendien worden kosten van gemeentelijke diensten, uitkeringsinstanties en werkgevers verlaagd.</p>
          <p>JobHulp Culemborg biedt sociale, communicatieve en praktische ondersteuning en vergroot daarmee de kansen van werkzoekenden, die belemmeringen ervaren bij het vinden van werk.</p>
        </div>
      </div>
    </section>
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-one">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q.</h2>
          <h3>De meest gestelde <span>vragen</span> over onze visie</h3>
            <p>Hier vind je de vragen die het meest zijn gesteld over onze zienswijze op de arbeidsmarkt en onze rol daarin</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Wat doet JobHulp Culemborg wel en wat doet ze niet<i class="bi bi-caret-down-square icon-show"></i><i class="bi bi-caret-up-square icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p><?= LOC_NAME ?> helpt mensen bij het zoeken naar werk. Wij bieden daarbij ondersteuning op gebied van het verkrijgen van zelfkennis en vaardigheden, zoals een goede CV maken, goed voor de dag komen op Social Media, jezelf presenteren, etc.</p>
                  <p>Kortom, wij "trainen" mensen om zich het beste uit zichzelf te halen als het aankomt op het solliciteren naar werk.</p>
                  <p>Dat trainen doen we met behulp van groepsworkshops en individueel, met behulp van een JobMaatje.</p>
                  <p>Waar mogelijk proberen wij ook, via onze netwerken, de werkzoeker in contact te brengen met mensen die hen misschien een stapje verder kunnen brengen.</p>
                  
                  <p>Wat JobHulp Culemborg niet doet, en ook niet kan doen, is meegaan met de werkzoeker op sollicitatiebezoek. Of voor de werkzoeker een goede CV opstellen en brieven of emails schrijven. Uiteindelijk moet de werkzoeker zelf aan de slag
                    om dat werk of die baan te krijgen.</p>
                  <p>De grondregel is dat de werkzoeker te allen tijde zelf verantwoordelijk blijft voor het slagen (of niet slagen) van de zoektocht.
                </div>
              </li>

              <!-- <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">? <i class="bi bi-caret-down-square icon-show"></i><i class="bi bi-caret-up-square icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>Om maatje te worden moet je aan een aantal voorwaarden voldoen:</p>
                  <ol>
                    <li>Ouder zijn dan 18 jaar</li>
                    <li>Goed Nederlands kunnen spreken en schrijven</li>
                    <li>Minimaal 2 uur per week beschikbaar hebben</li>
                    <li>Een recente VOG (Verklaring Omtrent Gedrag) kunnen overleggen</li>
                    <li>De training maatje bij JobHulpMaatje Nederland met succes hebben afgelegd</li>
                  </ol>

                </div>
              </li> -->

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->



  </main><!-- End #main -->
  <?php include_once ('includes/footer.php'); ?>

</body>

</html>