<?php

require_once('config.php');
include_once('class/c_sucstor_coll.php');

/****
 * Haal de 10 meest recente nieuwsberichten op
 ****/

$arr1 = array(array(0 => 'pubind_extern', 1 => 'j'));
$arr2 = array(array(0 => 'datetime_pub_extern', 1 => 'DESC'));

$sucstorColl = new sucstor_coll($arr1, $arr2, 10);

// Definieer in config.php: define('IMG_BASE_URL', 'https://intra.jhmz.nl/img/');
// Als fallback hier:
if (!defined('IMG_BASE_URL')) {
    define('IMG_BASE_URL', 'https://intra.jhmz.nl/img/');
}

$sucstorHTML = '';

if (empty($sucstorColl->sucstorColl)) {
    $sucstorHTML = '<p class="text-muted">Er zijn momenteel nog geen succesverhalen.</p>';
} else {
    foreach ($sucstorColl->sucstorColl as $sucstor) {

        $datum = new DateTimeImmutable($sucstor->datetime_pub_extern);

        // Datumopmaak via IntlDateFormatter (vervangt deprecated strftime)
        $formatter = new IntlDateFormatter(
            'nl_NL',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE
        );
        $formatter->setPattern('EEEE d MMMM yyyy');
        $datumStr = $formatter->format($datum);

        // Gebruik strip_tags() voor betrouwbare woordtelling
        $woordtelling = str_word_count(strip_tags($sucstor->tekst_kort));

        // Valideer externe link
        $link_knop_veilig = '';
        if ($sucstor->link_knop !== '') {
            $link_knop_veilig = filter_var($sucstor->link_knop, FILTER_VALIDATE_URL)
                ? $sucstor->link_knop
                : '#';
        }

        // Escape alle databasewaarden voor HTML-uitvoer
        $id        = (int) $sucstor->id;
        $titel     = htmlspecialchars($sucstor->titel,    ENT_QUOTES, 'UTF-8');
        $subtitel  = htmlspecialchars($sucstor->subtitel, ENT_QUOTES, 'UTF-8');
        $tekst_knop = htmlspecialchars($sucstor->tekst_knop, ENT_QUOTES, 'UTF-8');
        $picfile1  = htmlspecialchars($sucstor->picfile1, ENT_QUOTES, 'UTF-8');
        $picfile2  = htmlspecialchars($sucstor->picfile2, ENT_QUOTES, 'UTF-8');
        $picfile3  = htmlspecialchars($sucstor->picfile3, ENT_QUOTES, 'UTF-8');

        $sucstorHTML .= '
  <div class="row" id="NI' . $id . '">
    <div class="col-lg-5 d-flex align-items-stretch pb-0 mb-4">
      <div class="card image-box p-1" data-aos="fade-up" data-aos-delay="400" style="width: 100%;">';

        // Eerste foto: altijd tonen
        if ($picfile1 !== '') {
            $sucstorHTML .= '<img src="' . IMG_BASE_URL . $picfile1 . '" class="m-0" style="height: 100%; object-fit: cover;" alt="' . $titel . '">';
        }

        // Tweede foto: alleen bij meer dan 100 woorden
        if ($woordtelling > 100 && $picfile2 !== '') {
            $sucstorHTML .= '<br><img src="' . IMG_BASE_URL . $picfile2 . '" class="m-0" style="height: 100%; object-fit: cover;" alt="' . $titel . '">';
        }

        // Derde foto: alleen bij meer dan 200 woorden
        if ($woordtelling > 200 && $picfile3 !== '') {
            $sucstorHTML .= '<br><img src="' . IMG_BASE_URL . $picfile3 . '" class="m-0" style="height: 100%; object-fit: cover;" alt="' . $titel . '">';
        }

        $sucstorHTML .= '
      </div>
    </div>

    <div class="col-lg-7 d-flex mb-4">
      <div class="card text-box" data-aos="zoom-in" data-aos-delay="200" style="width: 100%;">
        <div class="card-header text-dark">
          <p>' . $datumStr . '</p>
          <h2>' . $titel . '</h2>
          <h5>' . $subtitel . '</h5>
        </div>
        <div class="card-body">
          ' . Tools::getShortPost($sucstor->tekst_kort, 1000) . '
        </div>
        <div class="card-footer">';

        if ($tekst_knop !== '') {
            if ($link_knop_veilig === '') {
                // Interne link naar detailpagina
                $sucstorHTML .= '<a href="nieuwsbericht.php?nid=' . $id . '"><button class="btn btn-primary">' . $tekst_knop . '</button></a>';
            } else {
                // Externe link, altijd in nieuw tabblad
                $sucstorHTML .= '<a href="' . htmlspecialchars($link_knop_veilig, ENT_QUOTES, 'UTF-8') . '" target="_blank" rel="noopener noreferrer"><button class="btn btn-primary">' . $tekst_knop . '</button></a>';
            }
        }

        $sucstorHTML .= '
        </div>
      </div>
    </div>
  </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include_once('includes/head.php'); ?>
  <link href="/assets/css/style_nieuws.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  <script>
    $(document).ready(function () {
      $('#a_home').removeClass('active');
      $('#a_nieuws').addClass('active');
    });
  </script>
</head>

<body>
  <?php include_once('includes/header.php'); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="height: 30vh;">
    <div id="overlay"></div>
    <div class="container" data-aos="zoom-out" data-aos-delay="100" style="z-index: 3;">
      <h1 class="col-lg-12 d-none d-xl-block my-4" style="font-size: 6em;">Succesverhalen</h1>
      <h1 class="col-lg-12 d-none d-xl-block my-4" style="font-size: 3em;">Welkom bij <span><?= LOC_NAME ?></span></h1>
      <h1 class="col-lg-12 d-xl-none my-1" style="font-size: 3em;">Nieuws</h1>
      <h1 class="col-lg-12 d-xl-none my-1" style="font-size: 1.5em;">Succesverhalen<span><?= LOC_NAME ?></span></h1>
    </div>
  </section><!-- End Hero -->

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-dark"></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Nieuws</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Nieuwsberichten Section ======= -->
    <section id="nieuwsberichten" style="padding-top: 40px;">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <?php echo $sucstorHTML; ?>
        </div>
      </div>
    </section><!-- End Nieuwsberichten Section -->

  </main><!-- End #main -->

  <?php include_once('includes/footer.php'); ?>

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous"
    <!-- src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v19.0&appId=986027332142084" -->
    nonce="YzMk9q1E"></script>
</body>

</html>