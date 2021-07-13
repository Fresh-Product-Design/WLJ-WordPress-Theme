<?php
  $buttonStyles = "inline-flex items-center justify-center font-bold px-4 py-3 border border-[#017381] text-[#017381] hover:bg-black/5 rounded";
  // Addt Styles Check
  $buttonStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<a class="<?php esc_attr_e($buttonStyles) ?>" href="<?php esc_attr_e($args['href']) ?>" role="button">
  <span class="mr-1"><?php esc_html_e($args['label']) ?></span>
  <span class="material-icons-outlined">file_download</span>
</a>