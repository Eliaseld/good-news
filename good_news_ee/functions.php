<?php

  declare(strict_types=1);

  require __DIR__.'/data.php';

  // This function will create a new news item on the
  // site for each array element.
  // The function will create html elements and load values from the array it
  // takes as an argument.
  // (footer is ugly :< )
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
