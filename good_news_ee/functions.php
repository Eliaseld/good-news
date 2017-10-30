<?php

  declare(strict_types=1);

  require __DIR__.'/data.php';

/*
  Global variables not global?
  Calling a function with a global variable within another function
  gives an exception.
  example:

  $global = 3;

  function caller(){
    printToScreen(global);
}

  function printToScreen($value){
    echo $value;
}

  useless function (even if it worked).
  This does not work, why?
*/
  function loadContent($array){
      //echo $array[0]['title'];

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
