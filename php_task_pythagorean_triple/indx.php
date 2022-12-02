<?php
  $integers = [3, 4, 5];

  function pythagorean_triple($args) {
    sort($args);
    
    $a = pow($args[0], 2);
    $b = pow($args[1], 2);
    $c = pow($args[2], 2);
  
    if($a + $b === $c) {
      return 1;
    } else {
      return 0;
    }
  }

  echo pythagorean_triple([3, 4, 5]);
?>
