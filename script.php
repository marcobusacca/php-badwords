<!-- SCRIPT PHP -->
<?php
// OTTENIMENTO CENSORED-WORD DALL'UTENTE
$censoredWord = $_GET['censored-word'];

// OTTENIMENTO PARAGRAPH DALL'UTENTE
$paragraph = $_GET['paragraph'];

// STAMPO IL CONTENUTO DI PARAGRAPH E LA LUNGHEZZA DEL CONTENUTO
echo $paragraph." ".strlen($paragraph);
?>