<?php
for ($x = 1; $x <= 48; $x++) {
  echo "
    <div class='w3-quarter'>
      <div class='w3-card w3-image'>
        <img class='tta-padding-small tta-image-pointer' onclick='openModal(" . $x . ")' src='../img/" . $x . ".jpg' style='width:100%'>
      </div>
    </div>
  ";
}
?>