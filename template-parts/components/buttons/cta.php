<button 
  <?php if(array_key_exists("js-hook", $args) === true) { printf('data-js="%s"', $args["js-hook"]); } ?>
  <?php printf('role="%s"', array_key_exists("role", $args) ? $args["role"] : "button"); ?>
  class="bg-[#C63732] hover:bg-red-700 text-white text-center px-4 py-3 rounded <?php array_key_exists("addt-styles", $args) === true ? esc_html_e($args["addt-styles"]) : "" ?>"
><?php esc_html_e($args["label"]); ?></button>