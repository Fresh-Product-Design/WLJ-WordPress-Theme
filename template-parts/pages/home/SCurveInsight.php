<?php require get_template_directory() . "/link-configs.php" ?>

<div class="bg-[#C8E1DE] py-24">
  <div class="content-container text-center">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "S Curve Insight&trade; Platform", "mb" => "mb-2")); ?>
    <p class="max-w-[908px] text-lg text-[#4d4d4d] mx-auto mb-16">The S Curve Insight Platform is inspired by the world's leading innovation and management thinkers and is used by FORTUNE 500 companies who understand that they fund their company's growth via the learning and growth of their people.</p>
    <div class="w-full mb-16 overflow-auto">
      <div class="inline-flex flex-col lg:flex-row text-left space-y-4 lg:space-y-0 lg:space-x-2 lg:w-[843px]">
        <div class="bg-white lg:bg-scurve-start bg-bottom bg-no-repeat w-full lg:w-[275px] lg:h-[453px] p-4 rounded">
          <p class="text-sm text-[#808080] mb-2">Step 1.</p>
          <h4 class="text-xl font-bold mb-4">Take the Assessment</h4>
          <p class="text-sm text-[#4d4d4d]">See where each individual is, including you, on their growth journey.</p>
        </div>
        <div class="bg-white lg:bg-scurve-mid bg-bottom bg-no-repeat w-full lg:w-[275px] lg:h-[453px] p-4 rounded">
          <p class="text-sm text-[#808080] mb-2">Step 2.</p>
          <h4 class="text-xl font-bold mb-4">Accelerate Growth</h4>
          <p class="text-sm text-[#4d4d4d]">Gain actionable insight into how you can grow faster.</p>
        </div>
        <div class="bg-white lg:bg-scurve-end bg-bottom bg-no-repeat w-full lg:w-[275px] lg:h-[453px] p-4 rounded">
          <p class="text-sm text-[#808080] mb-2">Step 3.</p>
          <h4 class="text-xl font-bold mb-4">Achieve Potential</h4>
          <p class="text-sm text-[#4d4d4d]">Build momentum by coaching to the curve.</p>
        </div>
      </div>
    </div>
    <div class="inline-flex flex-col sm:flex-row">
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Request a Demo", "js-hook" => "fireContactModal", "addt-styles" => "mb-3 sm:mb-0 sm:mr-3")); ?>
      <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', 'href' => $LINKS["services"]["s-curve-insight"])); ?>
    </div>
  </div>
</div>