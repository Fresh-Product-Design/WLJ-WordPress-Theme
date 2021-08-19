<?php
  $wrapperStyles = "bg-header-waves bg-cover bg-bottom bg-[#C8E1DE]";
  // Margin Check
  $wrapperStyles .= array_key_exists("margin", $args) ? " ".$args["margin"] : "mb-16";

  $contentContainerStyles = "content-container flex";
  // Padding Check
  $contentContainerStyles .= array_key_exists("padding", $args) ? " ".$args["padding"] : " pt-12 pb-28 lg:pt-24 lg:pb-48 xl:pt-28 xl:pb-56";
  // Addt Styles Check
  $contentContainerStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";

  $imageStyles = "hidden sm:block";
  // Image Size Check
  $imageStyles .= array_key_exists("img-size", $args) ? " ".$args["img-size"] : " h-auto w-[320px] md:w-[420px] lg:w-[540px]";
  // Addt Styles Check
  $imageStyles .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>

<div id="unlockYourPotential" class="<?php esc_attr_e($wrapperStyles); ?>" >
  <div class="<?php esc_attr_e($contentContainerStyles); ?>">
    <div class="mr-6">
      <?php if(array_key_exists("corner-tag", $args) === true) { ?>
        <h6 class="font-subheader font-semibold mb-8 tracking-widest uppercase"><?php esc_html_e($args['corner-tag']) ?></h6>
      <?php } ?>
      <?php get_template_part( 'template-parts/components/headers/headline', null, array("label" => $args['title'], "tracking" => "tracking-wider", "text-size" => "text-5xl md:text-6xl lg:text-7xl xl:text-8xl")); ?>
      <?php if(array_key_exists("tagline", $args) === true) { ?>
        <hr class="h-[2px] w-[56px] bg-[#017381] my-8" />
        <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => $args['tagline'], "text-size" => "text-lg md:text-xl", "addt-styles" => "mb-8")); ?>
      <?php } ?>
      <?php if(array_key_exists("cta-label", $args) === true) { ?>
        <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => $args["cta-label"], "js-hook" => "fireContactModal", "contact-reason" => $args["cta-reason"])); ?>
      <?php } ?>
    </div>
    <img class="<?php esc_attr_e($imageStyles) ?>" src="<?php esc_attr_e(get_template_directory_uri() . $args["img-src"]) ?>" alt="" width="<?php esc_attr_e($args["img-base-width"]) ?>" height="<?php esc_attr_e($args["img-base-height"]) ?>" />
  </div>
</div>