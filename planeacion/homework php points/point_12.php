<?php
/**
 * The dimension of an array indicates the number of indices you need to select an element.
 */
$paises = array
  (
  array("Colombia",44,24),
  array("Brasil",30,26),
  array("Venezuela",7,3),
  array("Argentina",22,13)
  );
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$paises[$row][$col]."</li>";
  }
  echo "</ul>";
}
/**
 * For a two-dimensional array you need two indices to select an element
 */
?>
