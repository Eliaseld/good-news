<?php

  declare(strict_types=1);

  require __DIR__.'/functions.php';

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
	<?php // Let's build a site
		for ($i = 0; $i < count($articles); $i++) { ?>
			<div class="container">
				<div class="header">
					<h1><?php echo getTitle($articles, $i); ?></h1>
				</div>

				<div class="content">
					<div class="text">
						<?php echo getContent($articles, $i); ?>
					</div>
				</div>

				<div class="footer">
					<h4><?php echo getAuthorName($articles, $i), ', ',
							getPublishedDate($articles, $i), ', Likes: ',
							getLikes($articles, $i);?>
					</h4>
				</div>
			</div>
	<?php } ?>
</body>
</html>
