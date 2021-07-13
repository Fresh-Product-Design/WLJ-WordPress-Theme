<?php require get_template_directory() . "/link-configs.php" ?>

<div class="bg-[#C8E1DE] py-24">
  <div class="content-container text-center">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "S Curve Insight&trade;", "mb" => "mb-8")); ?>
    <p class="max-w-[908px] text-lg text-[#4d4d4d] mx-auto mb-16">The S Curve Insight Platform is inspired by the world’s leading management and innovation thinkers and is used by FORTUNE 500 companies to accelerate employee and revenue growth.</p>
    <div class="w-full mb-16 overflow-auto">
      <div class="inline-flex space-x-2 text-left w-[843px]">
        <div class="bg-white bg-scurve-start bg-bottom bg-no-repeat w-[275px] h-[453px] p-4 rounded">
          <p class="text-sm text-[#808080] mb-2">Step 1.</p>
          <h4 class="text-xl font-bold mb-4">Take the Assessment</h4>
          <p class="text-sm text-[#4d4d4d]">See where each of your employees is on their growth journey.</p>
        </div>
        <div class="bg-white bg-scurve-mid bg-bottom bg-no-repeat w-[275px] h-[453px] p-4 rounded">
          <p class="text-sm text-[#808080] mb-2">Step 2.</p>
          <h4 class="text-xl font-bold mb-4">Accelerate Growth</h4>
          <p class="text-sm text-[#4d4d4d]">Help your employees reach their full potenial with actionable insights and personalized coaching.</p>
        </div>
        <div class="bg-white bg-scurve-end bg-bottom bg-no-repeat w-[275px] h-[453px] p-4 rounded">
          <p class="text-sm text-[#808080] mb-2">Step 3.</p>
          <h4 class="text-xl font-bold mb-4">Help Visualize Potential</h4>
          <p class="text-sm text-[#4d4d4d]">Identify the strengths to leverage and where to focus employee development.</p>
        </div>
      </div>
    </div>
    <div class="inline-flex flex-col sm:flex-row">
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Request a Demo", "js-hook" => "fireContactModal", "addt-styles" => "mb-3 sm:mb-0 sm:mr-3")); ?>
      <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', 'href' => $LINKS["services"]["s-curve-insight"])); ?>
    </div>
  </div>
</div>