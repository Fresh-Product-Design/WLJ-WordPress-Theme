<?php require get_template_directory() . "/link-configs.php" ?>

<div class="bg-[#fdea8c] bg-paper-curves bg-blend-soft-light py-24">
  <div class="content-container text-center">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Work With Us", "mb" => "mb-8")); ?>
    <p class="text-lg text-[#4d4d4d] mb-16">We help organizations build happier, more engaged and productive teams.</p>
    <div class="flex flex-col space-y-6 lg:inline-flex lg:flex-row lg:space-y-0 lg:space-x-6 text-left">
      <div class="bg-white p-4 rounded shadow-card">
        <h4 class="text-2xl font-bold mb-3">Take the Assessment</h4>
        <p class="max-w-[206px] text-[#4d4d4d] mb-6 lg:mb-12">Get the insight to build high performing teams.</p>
        <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', "href" => $LINKS["services"]["s-curve-insight"] )); ?>
      </div>
      <div class="bg-white p-4 rounded shadow-card">
        <h4 class="text-2xl font-bold mb-3">Become a Partner</h4>
        <p class="max-w-[278px] text-[#4d4d4d] mb-6 lg:mb-12">Join a community of experts promoting growth through disruption.</p>
        <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', "href" => $LINKS["services"]["certification"] )); ?>
      </div>
      <div class="bg-white p-4 rounded shadow-card">
        <h4 class="text-2xl font-bold mb-3">Book Whitney Johnson</h4>
        <p class="max-w-[272px] text-[#4d4d4d] mb-6 lg:mb-12">Speaking events that inspire change within your organization.</p>
        <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', "href" => $LINKS["services"]["speaking"] )); ?>
      </div>
    </div>
  </div>
</div>