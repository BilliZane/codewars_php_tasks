<?php
  function findDifference($a, $b) {
    $arrProd1 = array_product($a);
    $arrProd2 = array_product($b);

    if($arrProd1 > $arrProd2) {
      return $arrProd1 - $arrProd2;
    }
    return $arrProd2 - $arrProd1;
  }

  echo findDifference([3, 2, 5], [1, 4, 4]);
?>