<?php require get_template_directory() . "/link-configs.php" ?>

<div class="bg-[#fdea8c] bg-paper-curves bg-blend-soft-light py-24">
  <div class="content-container text-center">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Power Up Your Experience with the Platform", "mb" => "mb-8")); ?>
    <p class="text-lg text-[#4d4d4d] mb-16">Combining the insight of the S Curve with our other services will supercharge your growth.</p>
    <div class="md:w-[729px] lg:w-[924px] xl:w-[1074px] flex md:inline-flex flex-col space-y-6 md:flex-row md:space-y-0 md:space-x-6 text-left">
      <div class="w-[280px] md:w-[235px] lg:w-[300px] xl:w-[350px] bg-white mx-auto md:mx-0 p-4 rounded shadow-card">
        <img class="w-full h-auto mb-8 rounded" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/findACoach.png') ?>" alt="" width="303" height="231" />
        <h4 class="text-2xl font-bold mb-3">Find a Coach</h4>
        <p class="max-w-[258px] text-[#4d4d4d] mb-6 md:mb-12">Identify your strengths and achieve your goals.</p>
        <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', 'link' => $LINKS["newsletter"])); ?>
      </div>
      <div class="w-[280px] md:w-[235px] lg:w-[300px] xl:w-[350px] bg-white mx-auto md:mx-0 p-4 rounded shadow-card">
        <img class="w-full h-auto mb-8 rounded" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/scheduleAWorkshop.png') ?>" alt="" width="303" height="231" />
        <h4 class="text-2xl font-bold mb-3">Schedule a Workshop</h4>
        <p class="max-w-[265px] text-[#4d4d4d] mb-6 md:mb-12">Master personal disruption through hands-on training.</p>
        <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', 'link' => $LINKS["newsletter"])); ?>
      </div>
      <div class="w-[280px] md:w-[235px] lg:w-[300px] xl:w-[350px] bg-white mx-auto md:mx-0 p-4 rounded shadow-card">
        <img class="w-full h-auto mb-8 rounded" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/bookWhitneyJohnson.png') ?>" alt="" width="303" height="231" />
        <h4 class="text-2xl font-bold mb-3">Book Whitney Johnson</h4>
        <p class="max-w-[272px] text-[#4d4d4d] mb-6 md:mb-12">Speaking events that inspire change within your organization.</p>
        <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', 'link' => $LINKS["newsletter"])); ?>
      </div>
    </div>
  </div>
</div>