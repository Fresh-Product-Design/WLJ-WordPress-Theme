<?php
$defaultStyles = "relative text-2xl font-bold font-subhead tracking-widest uppercase";
// Margin Bottom Check
$defaultStyles .= array_key_exists("mb", $args) ? " ".$args["mb"] : " mb-11";
// Text Align Check
$defaultStyles .= array_key_exists("align", $args) ? " ".$args["align"] : " text-center";
// Addt Styles Check
$defaultStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<h3 class="<?php esc_attr_e($defaultStyles); ?>">
  <hr class="absolute top-1/2 left-0 right-0 h-[2px] -translate-y-1/2 z-0 <?php esc_attr_e($args["line-color"]); ?>" />
  <span class="relative inline-block px-4 z-10 <?php esc_attr_e($args["bg-color"]); ?>"><?php esc_html_e($args["label"]) ?></span>
</h3>