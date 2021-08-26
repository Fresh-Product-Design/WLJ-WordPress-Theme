<?php require get_template_directory() . "/lang/servicesCertification.php"; ?>

<div class="flex justify-between">
  <div class="lg:pr-8 text-[#4d4d4d]">
    <p class="pb-8 mb-8 border-b border-[#BFBFBF]"><?php esc_html_e($lang["coaches"]["text"]); ?></p>
    <p class="mb-8"><?php esc_html_e($lang["coaches"]["bottomText"]); ?></p>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => $lang["coaches"]["ctaText"], "js-hook" => "fireContactModal" )); ?>
  </div>
  <div class="hidden lg:block flex-shrink-0">
    <img class="rounded h-auto w-[333px] xl:w-[444px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/coach-certification.png') ?>" alt="" width="444" height="392" />
  </div>
</div>