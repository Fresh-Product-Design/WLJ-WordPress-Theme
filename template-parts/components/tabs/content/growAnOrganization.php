<?php require get_template_directory() . "/lang/servicesSCurveInsight.php"; ?>

<div class="flex justify-between">
  <div class="lg:pr-8 text-[#4d4d4d]">
    <p class="text-lg mb-8"><?php esc_html_e($lang["growOrganization"]["text"]); ?></p>
    <p class="text-lg font-bold mb-8"><?php esc_html_e($lang["growOrganization"]["bulletTitle"]); ?></p>
    <ul class="ml-6 list-disc space-y-2 mb-8">
      <li><?php esc_html_e($lang["growOrganization"]["bulletOne"]); ?></li>
      <li><?php esc_html_e($lang["growOrganization"]["bulletTwo"]); ?></li>
      <li><?php esc_html_e($lang["growOrganization"]["bulletThree"]); ?></li>
      <li><?php esc_html_e($lang["growOrganization"]["bulletFour"]); ?></li>
    </ul>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => $lang["growOrganization"]["ctaText"], "js-hook" => "fireContactModal", "contact-reason" => "S Curve Insight Platform" )); ?>
  </div>
  <div class="hidden lg:block flex-shrink-0">
    <img class="rounded h-auto w-[333px] xl:w-[444px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/grow_organization.png') ?>" alt="" width="444" height="444" />
  </div>
</div>