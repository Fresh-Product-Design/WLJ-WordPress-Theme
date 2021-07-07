<div class="bg-jumbotron bg-cover bg-bottom py-24 md:py-36">
  <div class="content-container">
    <?php if(array_key_exists("corner-tag", $args) === true) { ?>
      <h6 class="font-subheader font-semibold mb-8 tracking-widest uppercase"><?php esc_html_e($args['corner-tag']) ?></h6>
    <?php } ?>
    <?php get_template_part( 'template-parts/components/headers/headline', null, array("label" => $args['title'])); ?>
    <?php if(array_key_exists("tagline", $args) === true) { ?>
      <hr class="h-[2px] w-[56px] bg-[#017381] my-8" />
      <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => $args['tagline'], "addt-styles" => "mb-8")); ?>
    <?php } ?>
    <?php if(array_key_exists("cta-label", $args) === true) { ?>
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => $args["cta-label"], "js-hook" => "fireContactModal")); ?>
    <?php } ?>
    </div>
</div>
