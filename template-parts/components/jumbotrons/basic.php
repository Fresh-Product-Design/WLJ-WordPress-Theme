<div class="bg-jumbotron bg-cover bg-bottom bg-[#C8E1DE] py-24 md:py-36 text-center">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/headline', null, array("label" => $args['title'])); ?>
    <?php if(empty($args['tagline']) === false) { ?>
      <hr class="h-[2px] w-[56px] bg-[#017381] my-8 mx-auto" />
      <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => $args['tagline'], "addt-styles" => "max-w-[720px] text-center mx-auto")); ?>
    <?php } ?>
  </div>
</div>
