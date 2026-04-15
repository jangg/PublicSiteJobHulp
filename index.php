<?php
require_once 'config.php';

if (isset($_SESSION['flash']) && $_SESSION['flash'] === 'aanmelding_ok') 
{
    echo '<div class="alert alert-success">Uw aanmelding is gelukt! Controleer uw inbox.</div>';
    unset($_SESSION['flash']);
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include_once 'includes/head.php'; ?>
  <link href="/assets/css/style_home.css" rel="stylesheet">
  
  <!-- cookiealert styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&family=Press+Start+2P&display=swap" rel="stylesheet">
  <script>
    $(document).ready(function(){
      $('#a_home').addClass('active');
    });
  </script>
  <?php
  
  if (!isset($_SESSION['DOELGROEP'])) 
  {
 
      /****
      ** haal de doelgroep op uit de keytabel 
      *****/      
      $doelgroep   = Keyrecord::fromSleutel($connection, 'doelgroep');   
      $_SESSION['DOELGROEP'] = $doelgroep->getWaarde();
   }
    //  if (!isset($_SESSION['DOELGROEP'])) $_SESSION['DOELGROEP'] = 'XXX';
   // echo 'Doelgroep = ' . $_SESSION['DOELGROEP'];

  // switch ($_SESSION['DOELGROEP']) {
  //   case 'WKZ':
  //     echo '
  //     <meta property="og:url"                content="https://' . $_SERVER['SERVER_NAME'] . '"/>
  //     <meta property="og:type"               content="article" />
  //     <meta property="og:title"              content="' . LOC_NAME . '" />
  //     <meta property="og:description"        content="Voor iedereen die graag hulp wil bij het zoeken naar werk." />
  //     <meta property="og:image"              content="https://' . $_SERVER['SERVER_NAME'] . '/img/JHMZ0003.jpg" />
  //     <!-- <meta property="og:description"        content="Een fijn kerstfeest en een voorspoedig 2025!." /> -->
  //     <!-- <meta property="og:image"              content="https://' . $_SERVER['SERVER_NAME'] . '/img/background-2909020_1280.jpg" /> -->
  //     <meta property="fb:app_id"             content="986027332142084"/>';    
  //     break;
  //   case 'SPO':
  //     echo '
  //     <meta property="og:url"                content="https://' . $_SERVER['SERVER_NAME'] . '"/>
  //     <meta property="og:type"               content="article" />
  //     <meta property="og:title"              content="' . LOC_NAME . '" />
  //     <meta property="og:description"        content="Wij helpen mensen weer aan het werk. Steun ons." />
  //     <meta property="og:image"              content="https://' . $_SERVER['SERVER_NAME'] . '/assets/img/imgwp/bericht_jhm-training-forum_fb.jpg" />
  //     <meta property="fb:app_id"             content="986027332142084"/>';    
  //     break;
  //   case 'VRW':
  //     echo '
  //     <meta property="og:url"                content="https://' . $_SERVER['SERVER_NAME'] . '"/vrijwilliger/>
  //     <meta property="og:type"               content="article" />
  //     <meta property="og:title"              content="' . LOC_NAME . '" />
  //     <meta property="og:description"        content="Help je mee met helpen? Word JobMaatje bij ' . LOC_NAME . '." />
  //     <meta property="og:image"              content="https://' . $_SERVER['SERVER_NAME'] . '/assets/img/imgwp/home_bericht-aandeslagmetmaatje_fb.jpg" />
  //     <meta property="fb:app_id"             content="986027332142084"/>';    
  //     break;
  //   case 'WKG':
  //     echo '
  //     <meta property="og:url"                content="https://' . $_SERVER['SERVER_NAME'] . '"/>
  //     <meta property="og:type"               content="article" />
  //     <meta property="og:title"              content="' . LOC_NAME . '" />
  //     <meta property="og:description"        content="Maatschappelijk betrokken werkgevers zijn hier op hun plaats. Help mee." />
  //     <meta property="og:image"              content="https://' . $_SERVER['SERVER_NAME'] . '/assets/img/imgwp/bericht_jhm-training-forum_fb.jpg" />
  //     <meta property="fb:app_id"             content="986027332142084"/>';    
// 
  //     break;
  //   case 'MTG':
  //     echo '
  //     <meta property="og:url"                content="https://' . $_SERVER['SERVER_NAME'] . '"/>
  //     <meta property="og:type"               content="article" />
  //     <meta property="og:title"              content="' . LOC_NAME . '" />
  //     <meta property="og:description"        content="" />
  //     <meta property="og:image"              content="https://' . $_SERVER['SERVER_NAME'] . '/assets/img/imgwp/bericht_jhm-training-forum_fb.jpg" />
  //     <meta property="fb:app_id"             content="986027332142084"/>';    
  //     
  //   break;
// 
  //   default:
  //  }
    
  $tickerpublInd = Keyrecord::fromSleutel($connection, 'tickerpublInd');
  $ticker = array();
  if($tickerpublInd->getWaarde() == 'j')
  {
    $tickertext1 = Keyrecord::fromSleutel($connection, 'tickertext1'); 
    $tickertext2 = Keyrecord::fromSleutel($connection, 'tickertext2');
    $tickertext3 = Keyrecord::fromSleutel($connection, 'tickertext3');
    $ticker = array ();
    $i = 0;
    if ($tickertext1->getWaarde() != '')
    {
      $ticker [$i][0] = $tickertext1->getWaarde();
      $ticker [$i][1] = '';
      $i++;
    }
    if ($tickertext2->getWaarde() != '')
    {
      $ticker [$i][0] = $tickertext2->getWaarde();
      $ticker [$i][1] = '';
      $i++;
    }
    if ($tickertext3->getWaarde() != '')
    {
      $ticker [$i][0] = $tickertext3->getWaarde();
      $ticker [$i][1] = '';
    }
  }
  $tickerhtml = '';
  if (count($ticker) > 0)
  {
    $tickerhtml .= '<div id="ticker"><ul class="news-list">';
    foreach ($ticker as $tickertext)
    {
      $tickerhtml .= '<li><a href="' . $tickertext[1] .'">' .  $tickertext[0] . '</a></li>';
    }
    $tickerhtml .= '</ul></div>';
  }
  ?>
 <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
</head>

<body>
  <div class="scroll-down"></div>
    <?php include_once ('includes/header.php'); ?>
    <?php echo $tickerhtml; ?>
   <div>
  <!-- ======= Hero Section ======= -->
  <?php
  
  if (!isset($_SESSION['DOELGROEP'])) $_SESSION['DOELGROEP'] = 'WKZ';
  switch ($_SESSION['DOELGROEP']) {
    case 'SPO':
      include 'includes/sect-hero-sponsors.php';
      include 'includes/sect-newsletter.php';
      include 'includes/sect-sponsors.php';
      include 'includes/sect-contact.php';
      break;
    case 'VRW':
      include 'includes/sect-hero-vrijws.php';
      include 'includes/sect-inleiding2-vrijws.php';
      include 'includes/sect-vrijws.php';
      include 'includes/sect-sivvrijws.php';
      include 'includes/sect-vacatures.php';
      include 'includes/sect-faq-vrijws.php';
      include 'includes/sect-newsletter.php';     
      include 'includes/sect-contact.php';
      break;
    case 'WKG':
      include 'includes/sect-hero-wkg.php';
      include 'includes/sect-wrkgvrs.php';
      include 'includes/sect-newsletter.php';
      include 'includes/sect-contact.php';
      break;
    case 'MTG':
      include 'includes/sect-hero-mtg.php';
      include 'includes/sect-newsletter.php';
      include 'includes/sect-contact.php';
      break;
    default:
      include 'includes/sect-hero-wkz.php';
      include 'includes/sect-inleiding-wkz.php';
      include 'includes/sect-agendabutton.php';
      include 'includes/sect-pijlers.php';
      include 'includes/sect-jobgroups.php';
      include 'includes/sect-vrijws.php';
      include 'includes/sect-vrijwsprog.php';
      include 'includes/sect-sivvrijws.php';
      include 'includes/sect-faq-wkz.php';
      include 'includes/sect-newsletter.php';
      include 'includes/sect-contact.php';
  }
  ?>
  </div>
  <?php include_once 'includes/footer.php'; ?>
  <!-- <div class="arrow bounce">
    <a class="fa fa-circle-arrow-down fa-3x" href="#"></a><i class="fa-solid fa-circle-arrow-down"></i>
  </div> -->
  
<script>
<?php include "assets/js/ticker.js"; ?>
</script>
 
</body>

</html>