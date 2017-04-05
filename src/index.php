<?php

function getPosts(){
	$pdo = new PDO('mysql:dbname=blog;host=mysql','root','myPassword');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$postsStatement = $pdo->query("SELECT title,content,date,users.username AS username FROM posts INNER JOIN users ON posts.userId = users.id ORDER BY posts.date DESC");
	return $postsStatement->fetchAll();
}


$posts = getPosts();

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Fitness</title>
</head>
<body>

<header>
	<h1>PHP Fitness</h1>
	<h2>Pour garder la forme en PHP</h2>
</header>

<section>
	<?php foreach ($posts as $post) {?>
	<article>
		<h1><?= $post["title"] ?></h1>
		<div>
			<?= $post["content"] ?>
		</div>
		<div>
			<div><?= $post["date"] ?></div>
			<div><?= $post["username"] ?></div>
		</div>
	</article>
	<?php } ?>
</section>

</body>
</html>