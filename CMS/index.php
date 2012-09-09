<?php
## ------------------->
##	FunkyCMS
##	index.php
## ------------------->
?>
<!DOCTYPE html>
<html>
	<head>
		  <meta charset="ISO-8859-15">
		  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		  <link rel="stylesheet" type="text/css" media="screen" href="css/html5.css" />
		  <title>Funky-CMS | Un CMS simple & efficace</title>
		  <!-- Prise en charge des éléments HTML5 par IE -->
			<!--[if IE]>
				<script type="text/javascript">
					document.createElement("header");
					document.createElement("footer");
					document.createElement("section");
					document.createElement("aside");
					document.createElement("nav");
					document.createElement("article");
					document.createElement("figure");
					document.createElement("figcaption");
				</script>
			<![endif]-->
		  <!-- Fin de la prise en charge des éléments HTML5 par IE -->
	</head>
	
	<body>
		<header>
			<h1>Funky-CMS</h1>
			<p class="slogan">Un CMS simple & efficace</p>
		</header>
		<div id="container">
			<?php
			$directory = "pages".DIRECTORY_SEPARATOR; //On donne le répertoire des pages
			$home = $directory."home.php"; //On donne la page d'accueil
			$nfound = $directory."404.php"; //On donne la page d'erreur 404, page non trouvée.
			if(isset($_GET['page']) && !empty($_GET['page'])) //Si l'on a un '?page=' qui n'est pas vide, 'NULL', ou non-définie
			{
				$_GET['page'] = str_replace("\0", '', $_GET['page']); //On remplace par les caractères autorisés
				$file = basename(realpath($directory.$_GET['page'].".php")); //On détermine l'emplacement du fichier.
				$adress = $directory.$file; //On donne l'adresse de ce fichier
				if(!empty($file) && file_exists($adress)) { include($adress); } else { include($nfound); } //S'il existe, on l'affiche, sinon, on redirige vers la page d'erreur.
			} else { include($home); } //Sinon, on affiche la page d'accueil
			?>
		</div>
	</body>
</html>