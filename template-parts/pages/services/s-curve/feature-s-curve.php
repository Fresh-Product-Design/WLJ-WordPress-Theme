<?php require get_template_directory() . "/lang/servicesSCurveInsight.php"; ?>

<div id="s-curve" class="text-left mb-16 md:mb-20">
  <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => $lang["features"]["sCurve"]["title"], "addt-styles" => "mb-6 font-bold")); ?>
  <p class="text-lg mb-6"><?php esc_html_e($lang["features"]["sCurve"]["text-one"]); ?></p>
  <p class="text-lg mb-10"><?php esc_html_e($lang["features"]["sCurve"]["text-two"]); ?></p>
  <div class="w-full mb-1 overflow-auto text-center">
    <div class="inline-flex  flex-col lg:flex-row text-left space-y-4 lg:space-y-0 lg:space-x-2 lg:w-[990px]">
      <div class="bg-white lg:bg-[#E9F4F3] lg:bg-scurve-lg-start bg-contain bg-bottom bg-no-repeat lg:w-[322px] lg:h-[580px] p-4 rounded">
        <p class="font-bold text-xl text-black mb-4"><?php esc_html_e($lang["features"]["sCurve"]["step1-title"]); ?></p>
        <p class="text-sm text-[#4d4d4d]"><?php esc_html_e($lang["features"]["sCurve"]["step1-text"]); ?></p>
      </div>
      <div class="bg-white lg:bg-[#E9F4F3] lg:bg-scurve-lg-mid bg-contain bg-bottom bg-no-repeat lg:w-[322px] lg:h-[580px] p-4 rounded">
        <p class="font-bold text-xl text-black mb-4"><?php esc_html_e($lang["features"]["sCurve"]["step2-title"]); ?></p>
        <p class="text-sm text-[#4d4d4d]"><?php esc_html_e($lang["features"]["sCurve"]["step2-text"]); ?></p>
      </div>
      <div class="bg-white lg:bg-[#E9F4F3] lg:bg-scurve-lg-end bg-contain bg-bottom bg-no-repeat lg:w-[322px] lg:h-[580px] p-4 rounded">
        <p class="font-bold text-xl text-black mb-4"><?php esc_html_e($lang["features"]["sCurve"]["step3-title"]); ?></p>
        <p class="text-sm text-[#4d4d4d]"><?php esc_html_e($lang["features"]["sCurve"]["step3-text"]); ?></p>
      </div>
    </div>
  </div>
</div>