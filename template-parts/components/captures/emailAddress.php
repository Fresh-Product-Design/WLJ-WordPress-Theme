<?php
$inputClasses = "text-[14px] px-4 py-3 mr-4 border border-[#939E9E] placeholder-[#808080] rounded";
// Addt Styles Check
$inputClasses .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>
<form class="flex items-center justify-center lg:justify-start" data-js="submitLead" data-lead-capture="emailAddress">
  <input class="<?php esc_attr_e($inputClasses); ?>" type="email" name="email" placeholder="Your Email Address" required />
  <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Sign Up", "role" => "submit")); ?>
</form>