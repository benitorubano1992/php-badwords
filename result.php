<?php
$message_text=$_GET["message"];
echo "<h2>Testo del Form</h2>";
echo "<p>{$message_text}</p>";
$messLeng=strlen($message_text);
echo "<p>il testo è lungo {$messLeng}</p>";
$text_censurato=$_GET["censura"];
echo "<p>La parola da censurare nel testo è : {$text_censurato}</p>";
$update_message=str_replace($text_censurato,"...",$message_text);
echo "<p>Il testo censurato è : {$update_message}</p>";
$update_leng=strlen($update_message);
echo"<p>testo censurato ha una lunghezza di {$update_leng} </p>";
?>