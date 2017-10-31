<?php

  declare(strict_types=1);

  require __DIR__.'/functions.php';
	
  //loadContent($articles);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Good news</title>
  <link rel="stylesheet" href="css/master.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 0); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 0); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 0), ', ',
					getPublishedDate($articles, 0), ', Likes: ', getLikes($articles, 0);?>
			</h4>
		</div>
	</div>

	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 1); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 1); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 1), ', ',
					getPublishedDate($articles, 1), ', Likes: ', getLikes($articles, 1);?>
			</h4>
		</div>
	</div>

	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 2); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 2); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 2), ', ',
					getPublishedDate($articles, 2), ', Likes: ', getLikes($articles, 2);?>
			</h4>
		</div>
	</div>

	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 3); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 3); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 3), ', ',
					getPublishedDate($articles, 3), ', Likes: ', getLikes($articles, 3);?>
			</h4>
		</div>
	</div>

	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 4); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 4); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 4), ', ',
					getPublishedDate($articles, 4), ', Likes: ', getLikes($articles, 4);?>
			</h4>
		</div>
	</div>

	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 5); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 5); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 5), ', ',
					getPublishedDate($articles, 5), ', Likes: ', getLikes($articles, 5);?>
			</h4>
		</div>
	</div>

	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 6); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 6); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 6), ', ',
					getPublishedDate($articles, 6), ', Likes: ', getLikes($articles, 6);?>
			</h4>
		</div>
	</div>

	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 7); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 7); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 7), ', ',
					getPublishedDate($articles, 7), ', Likes: ', getLikes($articles, 7);?>
			</h4>
		</div>
	</div>

	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 8); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 8); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 8), ', ',
					getPublishedDate($articles, 8), ', Likes: ', getLikes($articles, 8);?>
			</h4>
		</div>
	</div>

	<div class="container">
		<div class="header">
			<h1><?php echo getTitle($articles, 9); ?></h1>
		</div>

		<div class="content">
			<div class="text">
				<?php echo getContent($articles, 9); ?>
			</div>
		</div>

		<div class="footer">
			<h4><?php echo getAuthor($articles, 9), ', ',
					getPublishedDate($articles, 9), ', Likes: ', getLikes($articles, 9);?>
			</h4>
		</div>
	</div>
</body>
</html>
