<?php
$defaultStyles = "text-2xl font-bold font-subhead tracking-widest uppercase";
// Margin Bottom Check
$defaultStyles .= array_key_exists("mb", $args) ? " ".$args["mb"] : " mb-11";
// Text Align Check
$defaultStyles .= array_key_exists("align", $args) ? " ".$args["align"] : " text-center";
// Addt Styles Check
$defaultStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<h3 class="<?php esc_attr_e($defaultStyles); ?>">
  <?php esc_html_e($args["label"]) ?>
</h3>