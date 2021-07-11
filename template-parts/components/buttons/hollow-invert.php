<?php
$defaultStyles = "inline-flex items-center justify-center font-bold px-4 py-3 border border-white text-white hover:bg-black/5 rounded";
// Addt Styles Check
$defaultStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<a class="<?php esc_attr_e($defaultStyles)?>" href="<?php esc_attr_e($args['link']) ?>" role="button">
  <span class="mr-1"><?php esc_html_e($args['label']) ?></span>
  <span class="material-icons-round">arrow_forward</span>
</a>