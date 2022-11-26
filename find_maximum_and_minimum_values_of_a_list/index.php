<?php
  $arr = [4, 6, 2, 1, 9, 63, -134, 566];

  function maximum($array) {
    return max($array);
  }

  function minimum($array) {
    return min($array);
  }

  echo 'Max = ' . maximum($arr) . '<br>';
  echo 'Min = ' . minimum($arr) . '<br>';
?>
