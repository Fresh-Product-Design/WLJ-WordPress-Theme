<?php require get_template_directory() . "/link-configs.php" ?>

<div class="bg-[#fdea8c] bg-paper-curves py-24">
  <div class="content-container text-center">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Work With Us", "mb" => "mb-8")); ?>
    <p class="text-lg text-[#4d4d4d] mb-16">We help organizations build happier, more engaged and productive teams.</p>
    <div class="flex flex-col space-y-6 md:inline-flex md:flex-row md:space-y-0 md:space-x-6 text-left">
      <?php
        get_template_part( 'template-parts/components/xSells/blocks/takeTheAssessment', null, array("no-img" => true) );
        get_template_part( 'template-parts/components/xSells/blocks/becomeAPartner' );
        get_template_part( 'template-parts/components/xSells/blocks/bookWhitneyJohnson', null, array("no-img" => true) );
      ?>
    </div>
  </div>
</div>