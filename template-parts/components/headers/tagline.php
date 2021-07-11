<?php
  $taglineStyles = "text-black";
  // Text Size Check
  $taglineStyles .= array_key_exists("text-size", $args) ? " ".$args["text-size"] : " text-lg md:text-xl lg:text-2xl";
  // Text Align Check
  $taglineStyles .= array_key_exists("align", $args) ? " ".$args["align"] : " text-left";
  // Addt Styles Check
  $taglineStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<h3 class="<?php esc_attr_e($taglineStyles) ?>">
  <?php esc_html_e($args['label']) ?>
</h3>