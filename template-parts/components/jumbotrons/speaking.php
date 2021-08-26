<?php require get_template_directory() . "/lang/servicesSpeaking.php"; ?>

<div class="bg-black sm:bg-whitney-inspire bg-cover lg:bg-contain bg-no-repeat bg-center backdrop-blur-lg py-24 md:py-32">
  <div class="content-container text-white">
    <div class="sm:max-w-[320px] lg:max-w-[510px]">
      <h6 class="font-subheader font-semibold mb-8 tracking-widest uppercase"><?php esc_html_e($lang["jumbotron"]["corner-text"]); ?></h6>
      <?php get_template_part( 'template-parts/components/headers/headline', null, array("label" => $lang["jumbotron"]["headline"], "color" => "text-white")); ?>
      <hr class="h-[2px] w-[56px] bg-[#017381] my-8" />
      <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => $lang["jumbotron"]["tagline"], "color" => "text-white", "addt-styles" => "mb-8")); ?>
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => $lang["jumbotron"]["ctaText"], "js-hook" => "fireContactModal", "contact-reason" => "Speaking")); ?>
    </div>
  </div>
</div>
