<?php
$error = null;
$success = null;
if(isset($_POST["moduleName"])){
	$modulename = htmlspecialchars(trim($_POST["moduleName"]));
	if($modulename != ""){
		$mksuc = mkdir(dirname(__FILE__)."/modules/$modulename",0777);
		if($mksuc){
			$mksuc = copy(dirname(__FILE__)."/base.php", dirname(__FILE__)."/modules/$modulename/index.php");
		}
		if($mksuc){
			$mksuc = chmod(dirname(__FILE__)."/modules/$modulename/index.php",0666);
		}
		if($mksuc){
			$success = true;
		} else {
			$error = "Impossible de créer votre module";
		}
	} else {
		$error = "Vous n'avez pas donné de nom a votre module";
	}
}

$directory = opendir("./modules");
$directories = [];
$thisDir = readdir($directory);
while($thisDir !== false){
	if($thisDir != "." && $thisDir != ".."){
		array_push($directories,$thisDir);
	}
	$thisDir = readdir($directory);
}
closedir($directory);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modules</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<meta charset="utf8">
	<style>
		
		header {
			margin-top: 20px;
		}

		.placeholder-text {
			width: 100%;
			height: 100%;
			margin: 50px 0 50px 0;
			text-align: center;
			font-size: 25px;
			color: #B6B6B6;
			font-weight: bold;
		}
	</style>
</head>
<body>

<div class="container">
	<header class="jumbotron">
		<h1>Modules</h1>
		<h2>Gèrez votre projet multi modules</h2>
	</header>

	<div class="row">
		<section class="col-12 col-lg-6">
			<h3>Modules</h3>
			<ul>
				<?php foreach ($directories as $dir) { ?>
					<li><a href="/modules/<?= $dir ?>"><?= $dir ?></a></li>
				<?php } ?>
			</ul>
			<?php if(count($directories) == 0): ?>
			<div class="placeholder-text">
				Aucun modules
			</div>
			<?php endif; ?>
		</section>

		<form class="col-12 col-lg-6" method="post">
			<h3>Créer un module</h3>
			<?php if($error): ?>
			<div class="alert alert-danger">
				<strong>Erreur : </strong><?= $error ?>
			</div>
			<?php endif; ?>
			<?php if($success): ?>
			<div class="alert alert-success">
				Votre module à été créé
			</div>
			<?php endif; ?>
			<div class="form-group">
				<label for="moduleName">Nom du module</label>
				<input required type="text" name="moduleName" class="form-control"/>
				<small class="text-muted">Le nom du module que vous allez créer dans le dossier modules</small>
			</div>
			<button class="btn btn-primary">Créer</button>
		</form>
	</div>
</div>

</body>
</html>