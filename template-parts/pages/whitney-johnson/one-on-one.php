<?php require get_template_directory() . "/lang/aboutWhitneyJohnson.php" ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<div id="coaching" class="content-container py-24">
  <div class="relative flex flex-col lg:flex-row lg:block bg-white p-16 lg:mr-32 rounded-lg">
    <div class="mb-8 lg:mb-0 text-center lg:absolute lg:-right-28 xl:-right-12 lg:top-24 xl:top-16 rounded-lg">
      <img class="inline w-full md:w-[423px] md:h-[464px] lg:w-[521px] lg:h-[572px] xl:w-[361px] xl:h-[396px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/staff/wj-about-bottom.png') ?>" alt="" width="423" height="464">
    </div>
    <div class="lg:w-1/2 xl:w-2/3">
      <h4 class="font-subhead text-sm text-[#808080] tracking-widest mb-2 uppercase"><?php esc_html_e($lang["coaching"]["corner-title"]); ?></h4>
      <p class="text-xl font-bold leading-relaxed mb-4"><?php esc_html_e($lang["coaching"]["headline"]); ?></p>
      <p class="max-w-[597px] text-[#4d4d4d] mb-2"><?php esc_html_e($lang["coaching"]["text"]); ?></p>
      <ul class="text-[#4d4d4d] list-disc ml-6 space-y-2 mb-8">
        <li><?php esc_html_e($lang["coaching"]["bulletOne"]); ?></li>
        <li><?php esc_html_e($lang["coaching"]["bulletTwo"]); ?></li>
        <li><?php esc_html_e($lang["coaching"]["bulletThree"]); ?></li>
        <li><?php esc_html_e($lang["coaching"]["bulletFour"]); ?></li>
        <li><?php esc_html_e($lang["coaching"]["bulletFive"]); ?></li>
      </ul>
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => $lang["coaching"]["ctaText"], "href" => $LINKS["services"]["coaching"], "target" => "")); ?>
    </div>
  </div>
</div>