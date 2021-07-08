<?php
$containerClasses = "";
// Background Check
$containerClasses .= array_key_exists("background", $args) ? " ".$args["background"] : "";
// Additional Styles Check
$containerClasses .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<div class="<?php esc_html_e($containerClasses) ?>">
  <hr class="content-container h-[2px] <?php esc_html_e($args['line-color']) ?>">
</div>