<?php
for ($x = 1; $x <= 48; $x++) {
  echo "
    <div id='" . $x . "' class='w3-modal'>
        <div class='w3-modal-content w3-card-8 w3-animate-top'>
          <header class='w3-container'>
            <span onclick='closeModal(" . $x . ")' class='w3-closebtn'><sup>X</sup></span>
          </header>
          <div class='w3-card w3-image'>
            <img src='../img/" . $x . ".jpg' style='width:100%'>
          </div>
        </div>
    </div>
  ";
}
?>