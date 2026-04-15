<?php
include_once 'config.php';
try {
	echo __DIR__ . '<br/>';
	Tools::MailRoom('Wim de Haas', 'dehaaswim@gmail.com', 'Welkom!', '<b>De melding komt van <a href="https://jobhulpculemborg.nl">JobHulp Culemborg</a>!</b>');
	echo "✅ Mail verzonden!";
} catch (Exception $e) {
	echo "❌ Fout bij verzenden: " . $e->getMessage();
}
?>