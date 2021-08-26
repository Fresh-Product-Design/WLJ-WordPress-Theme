<?php require get_template_directory() . "/lang/servicesSCurveInsight.php"; ?>

<div class="content-container py-24 text-[#4d4d4d]">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["sCurveInsightPlatform"]["headline"], "mb" => "mb-4")); ?>
  <p class="text-lg mb-16 text-center"></p>
  <div class="flex mb-12">
    <div class="flex-grow pr-8 space-y-8 text-lg">
      <p><?php esc_html_e($lang["sCurveInsightPlatform"]["text-one"]); ?></p>
      <p><?php esc_html_e($lang["sCurveInsightPlatform"]["text-two"]); ?></p>
      <p><?php esc_html_e($lang["sCurveInsightPlatform"]["text-three"]); ?></p>
    </div>
    <div class="hidden md:block flex-shrink-0">
      <img class="h-auto w-[300px] lg:w-[473px] rounded" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/take-the-assessment.png') ?>" alt="" width="473" height="370" />
    </div>
  </div>
  <div class="bg-white p-8 shadow-card-sm rounded text-center">
    <h4 class="font-bold text-black text-xl mb-4 md:mb-8"><?php esc_html_e($lang["sCurveInsightPlatform"]["bulletTitle"]); ?></h4>
    <div class="flex justify-center md:justify-between flex-wrap mb-8 text-left">
      <p class="bg-check-green bg-left bg-no-repeat px-8 lg:pr-0 mt-4 max-w-[284px] xl:max-w-[357px]"><?php esc_html_e($lang["sCurveInsightPlatform"]["bulletOne"]); ?></p>
      <div class="flex items-center"><p class="bg-check-green bg-left bg-no-repeat px-8 lg:pr-0 mt-4 max-w-[284px] xl:max-w-[375px]"><?php esc_html_e($lang["sCurveInsightPlatform"]["bulletTwo"]); ?></p></div>
      <p class="bg-check-green bg-left bg-no-repeat px-8 lg:pr-0 mt-4 justify-self-end max-w-[284px] xl:max-w-[375px]"><?php esc_html_e($lang["sCurveInsightPlatform"]["bulletThree"]); ?></p>
    </div>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => $lang["sCurveInsightPlatform"]["ctaText"], "js-hook" => "fireContactModal", "contact-reason" => "S Curve Insight Platform")); ?>
  </div>
</div>