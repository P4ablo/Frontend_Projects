<?php
 error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
 /* po tym komentarzu będzie kod do dynamicznego ładowania stron */
 $strona = "/prog_apli_www_projekt/html/glowna.html";
 if($_GET["idp"] == "glowna") $strona = "/prog_apli_www_projekt/html/glowna.html";
 if($_GET["idp"] == "ang") $strona = "/prog_apli_www_projekt/html/ang.html";
 if($_GET["idp"] == "fiz") $strona = "/prog_apli_www_projekt/html/fiz.html";
 if($_GET["idp"] == "kup_kurs") $strona = "/prog_apli_www_projekt/html/kup_kurs.html";
 if($_GET["idp"] == "logowanie") $strona = "/prog_apli_www_projekt/html/logowanie.html";
 if($_GET["idp"] == "mat") $strona = "/prog_apli_www_projekt/html/mat.html";
 if($_GET["idp"] == "materialy") $strona = "/prog_apli_www_projekt/html/materialy.html";
 if($_GET["idp"] == "onas") $strona = "/prog_apli_www_projekt/html/onas.html";
 if($_GET["idp"] == "opinie") $strona = "/prog_apli_www_projekt/html/opinie.html";
 if($_GET["idp"] == "rejestracja") $strona = "/prog_apli_www_projekt/html/rejestracja.html";
 
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700|Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/34cdc8bdc5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/prog_apli_www_projekt/css/style.css">
    <title>E-nauczanie</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js" defer></script>
    <script src="/prog_apli_www_projekt/js/scriptopinie.js" defer></script>
</head>
<body>
  <?php
    include($strona)
  ?>
</body>
</html>
</body>
</html>