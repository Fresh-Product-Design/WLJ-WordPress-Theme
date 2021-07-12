<?php
  $buttonStyles = "bg-[#C63732] hover:bg-red-700 font-bold text-white text-center px-4 py-3 rounded whitespace-nowrap";
  // Addt Styles Check
  $buttonStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<button
  <?php 
    // js-hook Check
    array_key_exists("js-hook", $args) === true ? printf('data-js="%s"', $args["js-hook"]) : ""
  ?>
  <?php
    // role Check
    printf('role="%s"', array_key_exists("role", $args) ? $args["role"] : "button");
  ?>
  class="<?php esc_attr_e($buttonStyles) ?>"
>
  <?php esc_html_e($args["label"]); ?>
</button>