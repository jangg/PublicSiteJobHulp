<?php

function MailRoom($nameTo, $emailTo, $onderwerp, $tekst)
{
    // Basis sanity checks tegen header injection
    $emailTo   = filter_var($emailTo, FILTER_VALIDATE_EMAIL);
    $onderwerp = str_replace(["\r", "\n"], '', (string)$onderwerp);

    if (!$emailTo) {
        return false;
    }

    $headers  = "From: JobHulp Culemborg <no-reply@jobhulpculemborg.nl>\r\n";
    $headers .= "Reply-To: no-reply@jobhulpculemborg.nl\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    return mail($emailTo, $onderwerp, $tekst, $headers);
}
  
  /*****
  ******  Hier start het prog
  *****/
  if (!isset($_POST['email']) || $_POST['email'] == '')
  {
    header('location: index.php?resc=2#contact');
    exit(); 
  }
  $nameFrom = $_POST['name'];
  $emailFrom = $_POST['email'];
  $subject = $_POST['subject'];

  $message = 'Beste ' . $nameFrom . "<br/><br/>";
  $message .= 'Je hebt het volgende bericht naar JobHulp Culemborg verzonden:<br/><br/>Onderwerp:<br/><br/>';
  $message .= $_POST['subject'];
  $message .= '<br/><br/>Tekst:<br/><br/>';
  $message .= $_POST['message'];
  $message .= "<br/><br/>" . 'Wij zullen zo spoedig mogelijk antwoorden op uw vraag of opmerking.';
  $message .= "<br/><br/>" . 'Met vriendelijke groeten,';
  $message .= "<br/>JobHulp Culemborg";
  
  if (!MailRoom ($nameFrom, $emailFrom, $subject, $message))
  {
    header('location: index.php?resc=1#contact');
    exit(); 
  }
  
  $receiving_email_address = 'info@jobhulpculemborg.nl';

  $message = $nameFrom . ' (' . $emailFrom . ') heeft het volgende bericht verzonden:' . "<br/><br/>";
  $message .= $_POST['message'];
  MailRoom ($receiving_email_address, $receiving_email_address , $subject, $message);
  header('location: index.php?resc=0#contact');
  exit(); 
  
?>
