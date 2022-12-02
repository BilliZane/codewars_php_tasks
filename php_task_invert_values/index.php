<?php
  function invert(array $arr): array {
    $res = [];
    
    foreach($arr as $elem) {
      array_push($res, $elem * -1);
    }
    return $res;
  }
?>
