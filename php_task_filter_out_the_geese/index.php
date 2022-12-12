<?php
  $birds = ["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish"];


  function gooseFilter($birds) {
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
    return array_values(array_diff($birds, $geese));
  }

  var_dump(gooseFilter($birds));
?>
