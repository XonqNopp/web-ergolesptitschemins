<?php
/* TODO:
 *
 */
require("functions/classPage.php");
$page = new PhPage();
//$page->LogLevelUp(6);


/*
if(!isset($_GET["apercu"])) {
	$body .= $page->SetTitle("Ergo Les P'tits Chemins");// before HotBooty
	$page->HotBooty();
	$body .= "<h3 style=\"text-align: center;\">Site en consruction...</h3>\n";
	echo $body;
	unset($page);
	exit;
}
 */


// variables
$AL = "Anne-Laure Induni";
$mailAL = $page->miscInit->mailAL;

$brigitte = "Brigitte Lang";
$mailBrigitte = $page->miscInit->mailBrigitte;

$title = "Ergo Les P'tits Chemins";
$subtitle = "Cabinet d'ergoth&eacute;rapie sp&eacute;cialis&eacute; en p&eacute;diatrie";
$logo = "<img src=\"pictures/logo.png\" alt=\"logo\" title=\"$title\" />";

$address1 = "Rue du Ch&acirc;teau 2";
$address2 = "1580 Avenches";

$gmapsURL = "http://maps.google.ch/?f=d&amp;daddr=";
$gmapsURL .= str_replace(" ", "+", "$address1, $address2");

$gmapsTagOpen = "<a target=\"_blank\" href=\"$gmapsURL\" title=\"Ouvrir Google Maps pour $address1, $address2\">";
$gmapsFullBR = "$gmapsTagOpen$address1</a><br/>\n$gmapsTagOpen$address2</a>";
$avenches = "<a href=\"https://map.geo.admin.ch/?bgLayer=ch.swisstopo.pixelkarte-farbe&zoom=10&lang=en&layers_opacity=0&topic=ech&E=2569748&N=1192249&layers_visibility=false&crosshair=marker\" target=\"_blank\"><img src=\"pictures/avenches.png\" alt=\"Avenches\" title=\"Avenches\" /></a>";

$ergotherapieTitle = "L'ergoth&eacute;rapie, qu'est-ce que c'est?!?";
$infosTitle = "Informations pratiques";
$urlAse = "http://www.ergotherapie.ch";



$page->SetTitle($title);
	/*** HTML headers ***/
	$keywords = array();

	$keywords[] = $AL;
	$keywords[] = $brigitte;
	$keywords[] = $title;
	$keywords[] = $subtitle;

	$keywords[] = "ergo";
	$keywords[] = "ergotherapie";
	$keywords[] = "ergoth&eacute;rapie";
	$keywords[] = "cabinet d'ergotherapie";
	$keywords[] = "cabinet d'ergoth&eacute;rapie";
	$keywords[] = "cabinet d'ergotherapie en pediatrie";
	$keywords[] = "cabinet d'ergoth&eacute;rapie en p&eacute;diatrie";
	$keywords[] = "cabinet d'ergotherapie specialise en pediatrie";
	$keywords[] = "cabinet d'ergoth&eacute;rapie sp&eacute;cialis&eacute; en p&eacute;diatrie";
	$keywords[] = "pediatre";
	$keywords[] = "p&eacute;diatre";
	$keywords[] = "pediatrie";
	$keywords[] = "p&eacute;diatrie";
	$keywords[] = "activites de la vie quotidienne";
	$keywords[] = "activit&eacute;s de la vie quotidienne";
	$keywords[] = "F82";
	$keywords[] = "F-82";
	$keywords[] = "ordonnance";

	$keywords[] = "troubles de l'attention";
	$keywords[] = "dispraxie";
	$keywords[] = "disphasie";
	$keywords[] = "retard mental";

	$page->SetKeywords(implode(", ", $keywords));

	$description = "$title: cabinet d'ergoth&eacute;repie sp&eacute;cialis&eacute; en p&eacute;diatrie.";
	$page->SetDescription($description);

$page->HotBooty();

$body = "";

$body .= "<div class=\"logoTitle\">$logo</div>\n";
$body .= "<h3>$subtitle</h3>\n";

	// address
	$body .= "<div class=\"where\">\n";
	$body .= "$gmapsFullBR\n";
	$body .= "<br /><br />\n";
	$body .= "$avenches\n";
	$body .= "</div>\n";
//
	// contacts
	$body .= "<div class=\"csstab48_table center\">\n";
	$body .= "<div class=\"csstab48_row\">\n";

	$body .= "<div class=\"csstab48_cell\">\n";
	//$body .= "<div><img src=\"pictures/portrait_al.png\" alt=\"portrait $AL\" title=\"$AL\" /></div>\n";
	$body .= "<div>$AL</div>\n";
	$body .= "<div>$mailAL</div>\n";
	$body .= "<div><a href=\"tel:+41775264489\">+41&nbsp;77&nbsp;526&nbsp;44&nbsp;89</a></div>\n";
	$body .= "</div>\n";  // csstab48_cell

	$body .= "<div class=\"csstab48_cell\">\n";
	//$body .= "<div><img src=\"pictures/portrait_brigitte.png\" alt=\"portrait $brigitte\" title=\"$brigitte\" /></div>\n";
	$body .= "<div>$brigitte</div>\n";
	$body .= "<div>$mailBrigitte</div>\n";
	$body .= "<div><a href=\"tel:+41796247159\">+41&nbsp;79&nbsp;624&nbsp;71&nbsp;59</a></div>\n";
	$body .= "</div>\n";  // csstab48_cell

	$body .= "</div>\n";  // csstab48_row
	$body .= "</div>\n";  // csstab48_table
//
	// Quote
	$body .= "<div class=\"center fullwidth\">\n";
	$body .= "<p class=\"center\">\n";
	$body .= "<span style=\"font-style: italic;\">&laquo;Je ne perds jamais. Soit je gagne, soit j’apprends.&raquo;</span>\n";
	$body .= "&nbsp;Nelson Mandela\n";
	$body .= "</p>\n";
	$body .= "</div>\n";

//
	// intro
	$body .= "<div>\n";
	$body .= "<p>Vous pensez que l’ergoth&eacute;rapie pourrait aider votre enfant?</p>\n";
	$body .= "<p>Prenez contact avec votre p&eacute;diatre ou m&eacute;decin de famille pour discuter de vos observations.\n";
	$body .= "S’il estime l’ergoth&eacute;rapie utile, il pourra vous prescrire une ordonnance pour un bilan initial.\n";
	$body .= "Vous pouvez ensuite nous contacter pour une prise de rendez-vous.</p>\n";
	$body .= "<p>Nous sommes &eacute;galement &agrave; disposition pour toute question ou information.</p>\n";
	$body .= "</div>\n";
//
	// Infos
	$body .= "<h4>Plus d'informations</h4>\n";
	$body .= "<div><ul style=\"margin: 0;\">\n";
	$body .= "<li><a href=\"#ergotherapie\">$ergotherapieTitle</a>\n";
	$body .= "<li><a href=\"#infos\">$infosTitle</a>\n";
	$body .= "</ul></div>\n";
	//
		// Links
		$body .= "<h5>Liens int&eacute;ressants (externes)</h5>\n";
		//$body .= "<li><a target=\"_blank\" href=\"https://www.ergotherapie.ch/download.php?id=619\">Indications pour de l’ergoth&eacute;rapie en p&eacute;diatrie</a></li>\n";

			// Documents utiles
			$body .= "<h6>Documents utiles</h6>\n";
			$body .= "<div><ul style=\"margin: 0;\">\n";
			$body .= "<li><a target=\"_blank\" href=\"https://www.ergotherapie.ch/download.php?id=712\">Ordonnance pour l’ergoth&eacute;rapie</a></li>\n";
			$body .= "<li><a target=\"_blank\" href=\"https://www.ergotherapie.ch/download.php?id=618\">Formulaire F-82</a></li>\n";

			$body .= "<li>Demande de prise en charge de l’ergoth&eacute;rapie ou d’un financement de moyen auxiliaire par l'AI:\n";
			$body .= "<a traget=\"_blank\" href=\"https://www.aifr.ch/fr/prestations/particuliers#mesures-medicales\">Fribourg</a>\n";
			$body .= "ou\n";
			$body .= "<a target=\"_blank\" href=\"https://www.ahv-iv.ch/fr/M%C3%A9mentos-Formulaires/Formulaires/Formulaires-%C3%A9lectroniques/AI-Demandes/001003-Demande-pour-mineurs-Mesures-m%C3%A9dicales-mesures-dordre-professionnel-et-moyens-auxiliaires\">Vaud</a>\n";
			$body .= "</li>\n";

			$body .= "</ul></div>\n";
		//
			// Associations de parents
			$body .= "<h6>Assiciations de parents</h6>\n";
			$body .= "<div><ul style=\"margin: 0;\">\n";
			$body .= "<li><a target=\"_blank\" href=\"https://www.autisme.ch/\">Autisme</a></li>\n";
			$body .= "<li>Dyspraxie: <a target=\"_blank\" href=\"http://dyspraquoi.ch/\">dyspraquoi</a></li>\n";
			$body .= "<li>Trouble de l'attention: <a target=\"_blank\" href=\"https://www.aspedah.ch/\">ASPEDAH</a></li>\n";
			$body .= "</ul></div>\n";
		//
			// Sites
			$body .= "<h6>Sites int&eacute;ressants</h6>\n";
			$body .= "<div><ul style=\"margin: 0;\">\n";
			$body .= "<li><a target=\"_blank\" href=\"https://www.cartablefantastique.fr/\">Cartable fantastique: ressources pour faciliter la scolarit&eacute; des enfants en difficult&eacute;s</a></li>\n";
			$body .= "<li><a target=\"_blank\" href=\"https://www.aidodys.com/\">Aidodys: pour adapter les documents afin de faciliter la lecture</a></li>\n";
			$body .= "<li><a target=\"_blank\" href=\"https://intics.ch/fr/\">Intics</a></li>\n";
			$body .= "</ul></div>\n";

//
	// Ergotherapie c'est quoi
	$body .= "<h2 id=\"ergotherapie\">$ergotherapieTitle</h2>\n";

	$body .= "<div>\n";

	$body .= "<p>\n";
	$body .= "<b>D&eacute;finition de l'ergoth&eacute;rapie:</b>\n";
	$body .= "L’ergoth&eacute;rapie est une profession centr&eacute;e sur le d&eacute;veloppement et le maintien de la\n";
	$body .= "capacit&eacute; d’agir des personnes.\n";
	$body .= "Elle contribue &agrave; l’am&eacute;lioration de la sant&eacute; et de la qualit&eacute; de vie.\n";
	$body .= "Elle facilite la participation &agrave; la soci&eacute;t&eacute; en permettant de prendre part aux\n";
	$body .= "activit&eacute;s quotidiennes\n";
	$body .= "(Association Suisse des Ergoth&eacute;rapeutes (ASE), mars 2012).\n";
	$body .= "</p>\n";

	$body .= "<p>\n";
	$body .= "<b>But de l'ergoth&eacute;rapie en p&eacute;diatrie:</b>\n";
	$body .= "Que l’enfant/le jeune puisse s’&eacute;panouir dans sa vie quotidienne, &agrave; la maison, &agrave;\n";
	$body .= "l’&eacute;cole et/ou dans ses loisirs.\n";
	$body .= "</p>\n";

		// a l'aise dans son corps
		$body .= "<div>\n";
		$body .= "L’ergoth&eacute;rapeute aide l’enfant &agrave; &ecirc;tre <b>plus &agrave; l’aise dans son corps</b>, ce\n";
		$body .= "qui lui permettra de:\n";

		$body .= "<ul>\n";
		$body .= "<li>Bouger de mani&egrave;re harmonieuse, sans efforts d&eacute;mesur&eacute;s et avec plaisir</li>\n";
		$body .= "<li>Bien percevoir, sentir son corps (immobile et en mouvement) pour &ecirc;tre plus pr&eacute;cis dans ses actions</li>\n";
		$body .= "<li>(force n&eacute;cessaire, direction du geste, etc.)</li>\n";
		$body .= "<li>Bien sentir, comprendre son environnement (textures et r&eacute;sistances des objets, etc.) </li>\n";
		$body .= "<li>Utiliser les outils du quotidien (repas, habillage, crayons, bricolage, v&eacute;lo, etc.)</li>\n";
		$body .= "</ul>\n";
		$body .= "</div>\n";
	//
		// strategies
		$body .= "<div>L’ergoth&eacute;rapeute aide l’enfant &agrave; <b>&eacute;laborer des strat&eacute;gies</b> pour\n";
		$body .= "planifier et ex&eacute;cuter ses activit&eacute;s de la vie quotidienne de mani&egrave;re plus autonome.\n";
		$body .= "Par exemple:\n";

		$body .= "<ul>\n";
		$body .= "<li>Apprendre &agrave; attacher ses chaussures</li>\n";
		$body .= "<li>Savoir pr&eacute;parer son sac d’&eacute;cole sans rien oublier</li>\n";
		$body .= "<li>Pouvoir r&eacute;aliser un trajet &agrave; v&eacute;lo en s&eacute;curit&eacute;</li>\n";
		$body .= "</ul>\n";
		$body .= "</div>\n";

	$body .= "<p>L’ergoth&eacute;rapeute aide l’enfant &agrave; <b>prendre confiance en lui et en ses comp&eacute;tences</b>.\n";
	$body .= "Elle lui offre la possibilit&eacute; d’exp&eacute;rimenter des situations positives vari&eacute;es et de\n";
	$body .= "surmonter certaines de ses peurs.</p>\n";

	$body .= "<p>Les enfants apprennent &agrave; <b>faire des choix</b>, &agrave; exprimer leurs craintes, leurs souhaits,\n";
	$body .= "&agrave; s’adapter &agrave; diverses situations.</p>\n";
	//
		// Therapeute agit avec
		$body .= "<div>L’ergoth&eacute;rapeute agit:\n";

		$body .= "<ul>\n";
		$body .= "<li>avec l’enfant en l’aidant &agrave; d&eacute;velopper ses habilet&eacute;s (motrices, sensorielles, cognitives, sociales, etc.)</li>\n";
		$body .= "<li>avec les parents en les &eacute;coutant, les conseillant</li>\n";
		$body .= "<li>avec les enseignants et les autres intervenants (m&eacute;decins, logop&eacute;distes, psychologues, psychomotriciens, physioth&eacute;rapeutes, etc.)</li>\n";
		$body .= "<li>sur l’environnement de l’enfant (adaptation de l’espace, du mat&eacute;riel, proposition de moyens auxiliaires, etc.)</li>\n";
		$body .= "<li>sur l’activit&eacute; (en simplifiant, en adaptant, etc.).</li>\n";
		$body .= "</ul>\n";
		$body .= "</div>\n";
	//
		// Moyens traitement
		$body .= "<div>Les <b>moyens de traitement</b> de l’ergoth&eacute;rapeute sont:\n";
		$body .= "<ul>\n";
		$body .= "<li>le jeu</li>\n";
		$body .= "<li>le mouvement</li>\n";
		$body .= "<li>les activit&eacute;s de la vie quotidienne</li>\n";
		$body .= "<li>les bricolages</li>\n";
		$body .= "<li>etc.</li>\n";
		$body .= "</ul>\n";
		$body .= "</div>\n";

	$body .= "</div>\n";
//
	// Informations pratiques
	$body .= "<h2 id=\"infos\">$infosTitle</h2>\n";

	$body .= "<div>\n";

	$body .= "<p>L’ergoth&eacute;rapie est prescrite par le <b>m&eacute;decin</b>.</p>\n";

	$body .= "<p>Les prestations sont rembours&eacute;es par l’<b>assurance maladie de base</b> (selon quote-part de 10%), ou\n";
	$body .= "par l’<b>assurance invalidit&eacute;</b>.</p>\n";

	$body .= "<p>Avant toute prise en charge, un <b>bilan initial</b> ergoth&eacute;rapeutique est fait.\n";
	$body .= "Il est bas&eacute; sur une discussion avec l’enfant et ses parents, des tests standardis&eacute;s et\n";
	$body .= "les observations de l’ergoth&eacute;rapeute. </p>\n";
	$body .= "<p>Ensuite, des objectifs de prise en charge sont pos&eacute;s en collaboration avec l’enfant et ses parents.</p>\n";

	$body .= "<p>La prise en charge tient compte du niveau de d&eacute;veloppement de l’enfant et repose sur des\n";
	$body .= "m&eacute;thodes th&eacute;rapeutiques av&eacute;r&eacute;es et actuelles.</p>\n";

	$body .= "<p>En r&egrave;gle g&eacute;n&eacute;rale, la th&eacute;rapie a lieu <b>une fois par semaine en\n";
	$body .= "s&eacute;ance individuelle</b> au cabinet, mais peut &eacute;galement se d&eacute;rouler sur les\n";
	$body .= "diff&eacute;rents lieux de vie de l'enfant.</p>\n";

	$body .= "<p>Pour plus d’informations, vous pouvez vous rendre sur le site de l’Association Suisse\n";
	$body .= "des Ergoth&eacute;rapeutes (ASE): <a target=\"_blank\" href=\"$urlAse\">$urlAse</a></p>\n";

	$body .= "</div>\n";


$page->show($body);
unset($page);
?>
