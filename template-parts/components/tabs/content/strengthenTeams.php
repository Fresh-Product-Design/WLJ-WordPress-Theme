<?php require get_template_directory() . "/lang/servicesSCurveInsight.php"; ?>

<div class="flex justify-between">
  <div class="lg:pr-8 text-[#4d4d4d]">
    <p class="text-lg mb-8"><?php esc_html_e($lang["strengthenTeams"]["text"]); ?></p>
    <p class="text-lg font-bold mb-8"><?php esc_html_e($lang["strengthenTeams"]["bulletTitle"]); ?></p>
    <ul class="ml-6 list-disc space-y-2 mb-8">
      <li><?php esc_html_e($lang["strengthenTeams"]["bulletOne"]); ?></li>
      <li><?php esc_html_e($lang["strengthenTeams"]["bulletTwo"]); ?></li>
      <li><?php esc_html_e($lang["strengthenTeams"]["bulletThree"]); ?></li>
    </ul>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => $lang["strengthenTeams"]["ctaText"], "js-hook" => "fireContactModal", "contact-reason" => "S Curve Insight Platform" )); ?>
  </div>
  <div class="hidden lg:block flex-shrink-0">
    <img class="rounded" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/strengthen_teams.png') ?>" alt="" width="444" height="444" />
  </div>
</div>