<?php
  $buttonStyles = "inline-block bg-[#C63732] hover:bg-red-700 font-bold text-white text-center px-4 py-3 rounded whitespace-nowrap cursor-pointer";
  // Addt Styles Check
  $buttonStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<a
  <?php 
    // js-hook Check
    array_key_exists("js-hook", $args) === true ? printf('data-js="%s"', $args["js-hook"]) : ""
  ?>
  <?php 
    // href Check
    array_key_exists("href", $args) === true ? printf('href="%s" rel="noopener"', $args["href"]) : ""
  ?>
  <?php 
    // target Check
    array_key_exists("target", $args) === true ? printf('target="%s"', $args["target"]) : printf('target="%s"', "_blank")
  ?>
  <?php
    // role Check
    printf('role="%s"', array_key_exists("role", $args) ? $args["role"] : "button");
  ?>
  class="<?php esc_attr_e($buttonStyles) ?>"
>
  <?php esc_html_e($args["label"]); ?>
</a>