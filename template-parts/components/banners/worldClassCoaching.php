<?php require get_template_directory() . "/lang/servicesCoaching.php"; ?>

<div class="bg-[#FBEDAB] bg-gradient-to-l from-[rgba(245,210,45,0.25)] to-[#FBEDAB] py-14">
  <div class="content-container flex flex-col space-y-7 lg:flex-row lg:space-y-0 items-center">
    <div class="flex-grow text-center lg:text-left">
      <h6 class="font-bold text-black text-lg md:text-xl mb-1"><?php esc_html_e($lang["worldClassCoaching"]["headline"]); ?></h6>
      <p class="text-[#4d4d4d]"><?php esc_html_e($lang["worldClassCoaching"]["tagline"]); ?></p>
    </div>
    <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => $lang["worldClassCoaching"]["ctaText"], "js-hook" => "fireContactModal", "contact-reason" => "Coaching", "addt-styles" => "")); ?>
  </div>
</div>