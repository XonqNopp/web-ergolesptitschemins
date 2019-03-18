<?php
/* TODO:
 */
require("functions/classPage.php");
$page = new PhPage();
// debug
//$page->initHTML();
//$page->LogLevelUp(6);
// init body
$body = "";

redirect  // FIXME

//// GoHome
$gohome = new stdClass();
$body .= $page->GoHome($gohome);
//// Set title and hot booty
$body .= $page->SetTitle("Oups?!?");// before HotBooty
$page->HotBooty();

$body .= "<div>Il semblerait que la page recherch&eacute;e n'existe pas...</div>\n";
$body .= "<div>Retour automatique &agrave; la page d'accueil dans quelques secondes...</div>\n";


//// Finish
echo $body;
unset($page);
?>
