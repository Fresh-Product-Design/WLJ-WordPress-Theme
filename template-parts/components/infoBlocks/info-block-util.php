<?php
  function getLinkStyles($link) {
    $linkStyles = "mx-auto md:mx-0";
    $linkStyles .= array_key_exists("addt-styles", $link) ? " ".$link["addt-styles"] : "";
    esc_attr_e($linkStyles);
  }
?>