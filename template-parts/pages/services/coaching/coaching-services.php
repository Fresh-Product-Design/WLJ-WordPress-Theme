<?php require get_template_directory() . "/lang/servicesCoaching.php"; ?>

<div id="services" class="content-container py-24">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["services"]["title"], "mb" => "mb-2")); ?>
  <p class="max-w-[903px] text-[#4d4d4d] text-lg text-center mx-auto mb-16"><?php esc_html_e($lang["services"]["text"]); ?></p>
  <div class="flex flex-col md:flex-row md:justify-between">
    <div class="mb-10 md:mb-0 md:pr-10 lg:pr-16">
      <p class="font-bold text-2xl mb-4"><?php esc_html_e($lang["services"]["sectionOne-title"]); ?></p>
      <p class="text-[#4d4d4d] mb-6"><?php esc_html_e($lang["services"]["sectionOne-text"]); ?></p>
      <a class="group inline-flex items-center justify-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Coaching">
        <span class="mr-1 group-hover:underline">Inquire Now</span>
        <span class="material-icons-round mr">arrow_forward</span>
      </a>
    </div>
    <div>
      <p class="font-bold text-2xl mb-4"><?php esc_html_e($lang["services"]["sectionTwo-title"]); ?></p>
      <p class="text-[#4d4d4d] mb-6"><?php esc_html_e($lang["services"]["sectionTwo-text"]); ?></p>
      <a class="group inline-flex items-center justify-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Coaching">
        <span class="mr-1 group-hover:underline">Inquire Now</span>
        <span class="material-icons-round mr">arrow_forward</span>
      </a>
    </div>
  </div>
</div>