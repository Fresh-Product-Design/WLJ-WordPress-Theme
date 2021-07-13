<?php
$defaultStyles = "inline-flex items-center justify-center font-bold px-4 py-3 border border-white text-white hover:bg-black/5 rounded";
// Addt Styles Check
$defaultStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<a
  class="<?php esc_attr_e($defaultStyles)?>"
  <?php 
    // js-hook Check
    array_key_exists("js-hook", $args) === true ? printf('data-js="%s"', $args["js-hook"]) : ""
  ?>
  <?php 
    // href Check
    array_key_exists("href", $args) === true ? printf('href="%s"', $args["href"]) : ""
  ?>
  <?php 
    // targe Check
    array_key_exists("target", $args) === true ? printf('target="%s"', $args["target"]) : ""
  ?>
  role="button"
>
  <span class="mr-1"><?php esc_html_e($args['label']) ?></span>
  <span class="material-icons-round">arrow_forward</span>
</a>