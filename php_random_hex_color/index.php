<?php
  function random_html_color() {
    return sprintf( '#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255) );
  }

  echo random_html_color();
?>
