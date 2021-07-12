<?php
  $headlineStyles = "font-headline uppercase";
  // Tracking (letter-spacing) Check
  $headlineStyles .= array_key_exists("tracking", $args) ? " ".$args["tracking"] : " tracking-widest";
  // Text Color Check
  $headlineStyles .= array_key_exists("color", $args) ? " ".$args["color"] : " text-[#C63732]";
  // Text Size Check
  $headlineStyles .= array_key_exists("text-size", $args) ? " ".$args["text-size"] : " text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl";
  // Addt Styles Check
  $headlineStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<h1 class="<?php esc_attr_e($headlineStyles) ?>">
  <?php esc_html_e($args['label']) ?>
</h1>