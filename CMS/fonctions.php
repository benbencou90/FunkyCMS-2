<?php
/*
*	FunkyCMS - CMS simple & efficace.
*	Auteur : ThanosS.
*
*	Page : fonctions.php
*	Description : Fichier de fonctions.
*/

include("conf/site.inc.php");

// Fonction : debugMode.
function debugMode($debug){

	// Si $debug est activé
	if($debug == "on"){
		// La fonction renvoi "true"
		return true;
	}else {
		// La fonction renvoi "false"
		return false;
	}

}

// Fonction : includePage.
function includePage(){
	
	include "conf/site.inc.php"; // Inclusion de la configuration du site.
	include "conf/mysql.inc.php"; // Inclusion de la configuration MySQL.
	
	if(isset($_SESSION['siteLang']) && !empty($_SESSION['siteLang']))
	{
		include "langues/" . $_SESSION['siteLang'] . ".lang.php"; // Inclusion de la langue définie par l'utilisateur.
	}
	else
	{
		include "langues/" . $site['siteLang'] . ".lang.php"; // Inclusion de la langue définie dans la configuration du site.
	}
	
	include "templates/" . $site['siteTheme'] . "/header.php";
	include "templates/" . $site['siteTheme'] . "/menu.php";
	include "templates/" . $site['siteTheme'] . "/sidebar.php";
	
	// Si on demande une page.
	if(isset($_GET['page']) && !empty($_GET['page']))
	{
		$page = $_GET['page'];
		// Si la page demandée existe.
		if(file_exists("pages/" . $page . ".php"))
		{
			// Inclusion le fichier.
			include "pages/" . $page . ".php";
		}
		else
		{
			// Inclusion du fichier d'erreur
			include "pages/404.php";
		}
	}
	else
	{
		// Inclusion de la page d'accueil.
		include "pages/home.php";
	}
	
	include "templates/" . $site['siteTheme'] . "/footer.php";
	
}

?>