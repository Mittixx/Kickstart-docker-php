<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = new PDO('mysql:dbname=potions;host=mysql','root','myPassword');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$postsStatement = $pdo->query("SELECT * FROM Potion");
$posts = $postsStatement->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<title>L'atelier de giselle</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>

<div class="container" style="padding-top: 20px">

<header class="jumbotron">
	<h1 class="display-3">L'atelier de giselle</h1>
	<h2>Vente de potions en ligne</h2>
</header>

<section class="row">
	<?php foreach ($posts as $post) {?>
	<article class="col-lg-6">
		<h1><?= $post["Nom"] ?></h1>
		<ul>
			<li><strong>Diluant</strong> : <?= $post["Diluant"] ?></li>
			<li><strong>Themperature</strong> : <?= $post["Themperature"] ?></li>
			<li><strong>Prix</strong> : <?= $post["Prix"] ?></li>
		</ul>
		<hr>
	</article>
	<?php } ?>
</section>

</div>

</body>
</html>