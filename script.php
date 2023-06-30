<!-- SCRIPT PHP -->
<?php
// OTTENIMENTO CENSORED-WORD DALL'UTENTE
$censoredWord = $_GET['censored-word'];

// OTTENIMENTO PARAGRAPH DALL'UTENTE
$paragraph = $_GET['paragraph'];

// STAMPO IL CONTENUTO DI PARAGRAPH E LA LUNGHEZZA DEL CONTENUTO
echo "PARAGRAFO E LUNGHEZZA"."<br>".$paragraph." -----> ".strlen($paragraph)."<br><br>";

// CENSURO LA PAROLA SCELTA DALL'UTENTE IN PRAGRAPH E INSERISCO IL RISULTATO IN CENSORED_PARAGRAPH
$censoredParagraph = str_replace($censoredWord, '***', $paragraph);

// STAMPO IL CONTENUTO DI CENSORED_PARAGRAPH E LA LUNGHEZZA DEL CONTENUTO
echo "PARAGRAFO CENSURATO E LUNGHEZZA"."<br>".$censoredParagraph." -----> ".strlen($censoredParagraph);
?>