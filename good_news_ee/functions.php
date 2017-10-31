<?php

  declare(strict_types=1);

  require __DIR__.'/data.php';

	// This function and the functions below will fetch values from an array
	// provided as an argument on the index provided as an argument
	function getTitle(array $array, int $index): string {
		return $array[$index]['title'];
	}

	function getContent(array $array, int $index): string {
		return $array[$index]['content'];
	}

	function getAuthor(array $array, int $index): string {
		return $array[$index]['author'];
	}

	function getPublishedDate(array $array, int $index): string {
		return $array[$index]['published'];
	}

	function getLikes(array $array, int $index): int {
		return $array[$index]['likes'];
	}

	// !!!LEGACY!!!
  // This function will create a new news item on the
  // site for each array element.
  // The function will create html elements and load values from the array it
  // takes as an argument.
  // (footer is ugly :< )
	// !!!LEGACY!!!
  function loadContent($array){

    foreach ($array as $index) {
      echo '<div class="container">
              <div class="header">
                <h1>', $index['title'], '</h1>
              </div>

              <div class="content">
                <div class="text">
                	', $index['content'], '
                </div>
              </div>

              <div class="footer">
                <h4>', $index['author'],' ', $index['published'],
                  ' Likes: ', $index['likes'] ,'</h4>
              </div>
            </div>';

    }
  }
