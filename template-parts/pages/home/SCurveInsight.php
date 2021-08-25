<?php require get_template_directory() . "/lang/front-page.php" ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<div class="bg-[#C8E1DE] py-24">
  <div class="content-container text-center">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["sCurve"]["title"], "mb" => "mb-2")); ?>
    <p class="max-w-[908px] text-lg text-[#4d4d4d] mx-auto mb-16"><?php esc_html_e($lang["sCurve"]["text"]) ?></p>
    <div class="w-full mb-16 overflow-auto">
      <div class="inline-flex flex-col lg:flex-row text-left space-y-4 lg:space-y-0 lg:space-x-2 lg:w-[843px]">
        <div class="bg-white lg:bg-scurve-start bg-bottom bg-no-repeat w-full lg:w-[275px] lg:h-[453px] p-4 rounded">
          <p class="text-sm text-[#808080] mb-2">Step 1.</p>
          <h4 class="text-xl font-bold mb-4"><?php esc_html_e($lang["sCurve"]["step1-title"]) ?></h4>
          <p class="text-sm text-[#4d4d4d]"><?php esc_html_e($lang["sCurve"]["step1-text"]) ?></p>
        </div>
        <div class="bg-white lg:bg-scurve-mid bg-bottom bg-no-repeat w-full lg:w-[275px] lg:h-[453px] p-4 rounded">
          <p class="text-sm text-[#808080] mb-2">Step 2.</p>
          <h4 class="text-xl font-bold mb-4"><?php esc_html_e($lang["sCurve"]["step2-title"]) ?></h4>
          <p class="text-sm text-[#4d4d4d]"><?php esc_html_e($lang["sCurve"]["step2-text"]) ?></p>
        </div>
        <div class="bg-white lg:bg-scurve-end bg-bottom bg-no-repeat w-full lg:w-[275px] lg:h-[453px] p-4 rounded">
          <p class="text-sm text-[#808080] mb-2">Step 3.</p>
          <h4 class="text-xl font-bold mb-4"><?php esc_html_e($lang["sCurve"]["step3-title"]) ?></h4>
          <p class="text-sm text-[#4d4d4d]"><?php esc_html_e($lang["sCurve"]["step3-text"]) ?></p>
        </div>
      </div>
    </div>
    <div class="inline-flex flex-col sm:flex-row">
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Request a Demo", "js-hook" => "fireContactModal", "contact-reason" => "S Curve Insight Platform", "addt-styles" => "mb-3 sm:mb-0 sm:mr-3")); ?>
      <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', 'href' => $LINKS["services"]["s-curve-insight"])); ?>
    </div>
  </div>
</div>