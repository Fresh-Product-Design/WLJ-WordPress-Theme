<?php require get_template_directory() . "/lang/servicesCertification.php"; ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<div id="benefits" class="content-container py-24">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["benefits"]["title"], "mb" => "mb-2")); ?>
  <p class="text-[#4d4d4d] text-lg text-center mb-16"><?php esc_html_e($lang["benefits"]["tagline"]); ?></p>
  <!-- Why Become a Certified Partner -->
  <div class="flex flex-col lg:flex-row mb-16">
    <div class="lg:pr-8 text-[#4d4d4d]">
      <h4 class="font-subhead text-2xl font-bold text-black tracking-widest mb-4"><?php esc_html_e($lang["whyBecomeCertified"]["title"]); ?></h4>
      <p class="mb-4"><?php esc_html_e($lang["whyBecomeCertified"]["text"]); ?></p>
      <div class="bg-plus-yellow bg-left-top bg-no-repeat pl-8 mb-4">
        <p><?php esc_html_e($lang["whyBecomeCertified"]["bulletOne"]); ?></p>
      </div>
      <div class="bg-plus-yellow bg-left-top bg-no-repeat pl-8 mb-4">
        <p><?php esc_html_e($lang["whyBecomeCertified"]["bulletTwo"]); ?></p>
      </div>
      <div class="bg-plus-yellow bg-left-top bg-no-repeat pl-8 mb-8">
        <p><?php esc_html_e($lang["whyBecomeCertified"]["bulletThree"]); ?></p>
      </div>
      <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => $lang["whyBecomeCertified"]["ctaText"], "js-hook" => "fireContactModal", "contact-reason" => "Certification" )); ?>
    </div>
    <div class="hidden lg:block flex-shrink-0">
      <img class="rounded-lg" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/certified_partner.png') ?>" alt="" width="369" height="253">
    </div>
  </div>

  <!-- Testimonial -->
  <?php get_template_part( 'template-parts/components/testimonials/services/certification-mid' ); ?>

  <!-- Receive Access -->
  <div class="bg-white p-8 lg:p-12 rounded">
    <p class="text-xl font-bold mb-2"><?php esc_html_e($lang["receiveAccess"]["title"]); ?></p>
    <p class="text-lg text-[#4d4d4d] mb-6"><?php esc_html_e($lang["receiveAccess"]["text"]); ?></p>
    <div class="w-full mb-1 overflow-auto text-center">
      <div class="inline-flex flex-col lg:flex-row text-left space-y-4 lg:space-y-0 lg:space-x-2 lg:w-[894px] xl:w-[1152px]">
        <div class="bg-[#E9F4F3] lg:bg-scurve-lg-start bg-contain bg-bottom bg-no-repeat lg:w-[290px] lg:h-[522px] xl:w-[376px] xl:h-[677px] p-4 rounded">
          <p class="text-xs text-[#808080]">Step 1.</p>
          <p class="font-bold text-xl text-black mb-4"><?php esc_html_e($lang["receiveAccess"]["step1-title"]); ?></p>
          <p class="text-sm text-[#4d4d4d]"><?php esc_html_e($lang["receiveAccess"]["step1-text"]); ?></p>
        </div>
        <div class="bg-[#E9F4F3] lg:bg-scurve-lg-mid bg-contain bg-bottom bg-no-repeat lg:w-[290px] lg:h-[522px] xl:w-[376px] xl:h-[677px] p-4 rounded">
          <p class="text-xs text-[#808080]">Step 2.</p>
          <p class="font-bold text-xl text-black mb-4"><?php esc_html_e($lang["receiveAccess"]["step2-title"]); ?></p>
          <p class="text-sm text-[#4d4d4d]"><?php esc_html_e($lang["receiveAccess"]["step2-text"]); ?></p>
        </div>
        <div class="bg-[#E9F4F3] lg:bg-scurve-lg-end bg-contain bg-bottom bg-no-repeat lg:w-[290px] lg:h-[522px] xl:w-[376px] xl:h-[677px] p-4 rounded">
          <p class="text-xs text-[#808080]">Step 3.</p>
          <p class="font-bold text-xl text-black mb-4"><?php esc_html_e($lang["receiveAccess"]["step3-title"]); ?></p>
          <p class="text-sm text-[#4d4d4d]"><?php esc_html_e($lang["receiveAccess"]["step3-text"]); ?></p>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:flex-row justify-center text-center pt-6 lg:pt-10">
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => $lang["receiveAccess"]["ctaText"], "js-hook" => "fireContactModal", "contact-reason" => "Certification", "addt-styles" => "md:mr-4 mt-4")); ?>
      <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => $lang["receiveAccess"]["learnMoreText"], 'href' => $LINKS["services"]["s-curve-insight"], "addt-styles" => "mt-4")); ?>
    </div>
  </div>
</div>