<div id="unlockYourPotential" class="bg-header-waves bg-cover bg-bottom mb-16" >
  <div class="content-container pt-12 pb-20 lg:pt-24 lg:pb-24 xl:pb-32 text-center uppercase">
    <?php get_template_part( 'template-parts/components/headers/headline', null, array("label" => $args["headline"], "addt-styles" => "mb-10 leading-tight md:leading-tight lg:leading-tight xl:leading-tight")); ?>
    <h3 class="font-subhead font-bold text-black text-lg md:text-xl lg:text-2xl mb-12 lg:mb-18 xl:mb-24 tracking-widest"><?php esc_html_e($args["tagline"]) ?></h3>
    <?php
      if (array_key_exists("showArrows", $args) && $args["showArrows"] === true) {
    ?>
        <span class="flex flex-col items-center justify-center text-[#017381] text-3xl font-bold material-icons-round">
          <span class="leading-3">keyboard_arrow_down</span>
          <span class="leading-3">keyboard_arrow_down</span>
        </span>
    <?php
      }
    ?>
  </div>
</div>