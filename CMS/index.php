<?php
## ------------------->
##	FunkyCMS
##	index.php
## ------------------->
include('fonctions.php');
?>
<!DOCTYPE html>
<html>
	<head>
		  <meta charset="ISO-8859-15">

		  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

		  <link rel="stylesheet" type="text/css" media="screen" href="css/html5.css" />
		  <link rel="stylesheet" type="text/css" media="screen" href="css/basic.css" />

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
			<h1><a href="index.php" title="Funky-CMS">Funky-CMS</a></h1>
			<p class="slogan">Un CMS simple & efficace</p>

			<div id="nav">
				<ul>
					<li><a href="index.php?page=home" <?php if(isset($_GET['page']) && $_GET['page'] == "home" || !isset($_GET['page']) || isset($_GET['page']) && $_GET['page'] == "") { echo "class='current'"; }?>>Accueil</a></li>
					<li><a href="index.php?page=reg" <?php if(isset($_GET['page']) && $_GET['page'] == "reg") { echo "class='current'"; }?>>Incription</a></li>
					<li><a href="index.php?page=forum" <?php if(isset($_GET['page']) && $_GET['page'] == "forum") { echo "class='current'"; }?>>Forum</a></li>
				</ul>
			</div>
		</header>
		<div id="container">
			<?php
				includePage();
			?>
		</div>
	</body>
</html>