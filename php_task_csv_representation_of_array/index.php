<?php
  $array = [
    [0, 1, 2, 3, 4],
    [10, 11, 12, 13, 14],
    [20, 21, 22, 23, 24],
    [30, 31, 32, 33, 34]
  ];

  function toCsvText($input)
  {
    $inputLength = count($input);

    $str = '';

    foreach ($input as $key => $value) {
      $arrElem = join(',', $value) . '\n';
      $str .= $arrElem;
    }

    return substr($str, 0, strlen($str) - 2);
  }

  echo toCsvText($array);
?>
