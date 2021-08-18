<?php require get_template_directory() . "/link-configs.php" ?>

<div id="benefits" class="content-container py-24">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Benefits of Certification", "mb" => "mb-2")); ?>
  <p class="text-[#4d4d4d] text-lg text-center mb-16">A community of experts dedicated to disruption and growth</p>
  <!-- Why Become a Certified Partner -->
  <div class="flex flex-col lg:flex-row mb-16">
    <div class="lg:pr-8 text-[#4d4d4d]">
      <h4 class="font-subhead text-2xl font-bold text-black tracking-widest mb-4">Why Become a Certified Partner?</h4>
      <p class="mb-4">Certified partners undergo an extensive vetting and certification process to ensure they are fluent in the language of disruption and growth.</p>
      <div class="bg-plus-yellow bg-left-top bg-no-repeat pl-8 mb-4">
        <p>Add value to your business employing proven tools and frameworks.</p>
      </div>
      <div class="bg-plus-yellow bg-left-top bg-no-repeat pl-8 mb-4">
        <p>Learn best practices as a member of the community of Disruption Advisors.</p>
      </div>
      <div class="bg-plus-yellow bg-left-top bg-no-repeat pl-8 mb-8">
        <p>Stay on the cutting edge of your own growth, with opportunities for additional learning and certifications.</p>
      </div>
      <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Contact Us To Get Started', "js-hook" => "fireContactModal" )); ?>
    </div>
    <div class="hidden lg:block">
      <img class="h-auto lg:h-full w-auto rounded-lg" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/certified_partner.png') ?>" alt="" width="431" height="292">
    </div>
  </div>

  <!-- Testimonial -->
  <?php get_template_part( 'template-parts/components/testimonials/services/certification-mid' ); ?>

  <!-- Receive Access -->
  <div class="bg-white p-8 lg:p-12 rounded">
    <p class="text-xl font-bold mb-2">Receive Access to the S Curve Insight Platform</p>
    <p class="text-lg text-[#4d4d4d] mb-6">As a certified partner you are granted access to administer one of the most dynamic leadership development tools available, provento help transform individuals, teams, and organizations. It’s a powerful resource to add to your coaching arsenal.</p>
    <div class="w-full mb-1 overflow-auto text-center">
      <div class="inline-flex space-x-2 text-left w-[774px] lg:w-[894px] xl:w-[1152px]">
        <div class="bg-[#E9F4F3] bg-scurve-lg-start bg-contain bg-bottom bg-no-repeat w-[250px] h-[450px] lg:w-[290px] lg:h-[522px] xl:w-[376px] xl:h-[677px] p-4 rounded">
          <p class="text-xs text-[#808080]">Step 1.</p>
          <p class="font-bold text-xl text-black mb-4">Give the Assessment</p>
          <p class="text-sm text-[#4d4d4d]">Clients will discover and clearly understand where they on their growth.</p>
        </div>
        <div class="bg-[#E9F4F3] bg-scurve-lg-mid bg-contain bg-bottom bg-no-repeat w-[250px] h-[450px] lg:w-[290px] lg:h-[522px] xl:w-[376px] xl:h-[677px] p-4 rounded">
          <p class="text-xs text-[#808080]">Step 2.</p>
          <p class="font-bold text-xl text-black mb-4">Accelerate Growth</p>
          <p class="text-sm text-[#4d4d4d]">Help your client reach their full potenial with actionable insights and your personalized guidance.</p>
        </div>
        <div class="bg-[#E9F4F3] bg-scurve-lg-end bg-contain bg-bottom bg-no-repeat w-[250px] h-[450px] lg:w-[290px] lg:h-[522px] xl:w-[376px] xl:h-[677px] p-4 rounded">
          <p class="text-xs text-[#808080]">Step 3.</p>
          <p class="font-bold text-xl text-black mb-4">Help Visualize Potential</p>
          <p class="text-sm text-[#4d4d4d]">Identify their strengths to leverage and where to focus for development.</p>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:flex-row justify-center text-center pt-6 lg:pt-10">
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Become a Partner", "js-hook" => "fireContactModal", "addt-styles" => "md:mr-4 mt-4")); ?>
      <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More About Our Platform', 'href' => $LINKS["services"]["s-curve-insight"], "addt-styles" => "mt-4")); ?>
    </div>
  </div>
</div>