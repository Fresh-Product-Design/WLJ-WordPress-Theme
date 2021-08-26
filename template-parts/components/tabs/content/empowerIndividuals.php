<?php require get_template_directory() . "/lang/servicesSCurveInsight.php"; ?>

<div class="flex justify-between">
  <div class="lg:pr-8 text-[#4d4d4d]">
    <p class="text-lg mb-8"><?php esc_html_e($lang["empowerIndividuals"]["text"]); ?></p>
    <p class="text-lg font-bold mb-8"><?php esc_html_e($lang["empowerIndividuals"]["bulletTitle"]); ?></p>
    <ul class="ml-6 list-disc space-y-2 mb-8">
      <li><?php esc_html_e($lang["empowerIndividuals"]["bulletOne"]); ?></li>
      <li><?php esc_html_e($lang["empowerIndividuals"]["bulletTwo"]); ?></li>
      <li><?php esc_html_e($lang["empowerIndividuals"]["bulletThree"]); ?></li>
    </ul>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => $lang["empowerIndividuals"]["ctaText"], "js-hook" => "fireContactModal", "contact-reason" => "S Curve Insight Platform" )); ?>
  </div>
  <div class="hidden lg:block flex-shrink-0">
    <img class="rounded" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/empower_individuals.png') ?>" alt="" width="444" height="444" />
  </div>
</div>