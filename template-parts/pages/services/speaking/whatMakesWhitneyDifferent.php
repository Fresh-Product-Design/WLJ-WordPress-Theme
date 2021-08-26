<?php require get_template_directory() . "/lang/servicesSpeaking.php"; ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<div id="about-whitney-johnson" class="bg-black">
  <div class="content-container md:bg-whitney-different bg-cover bg-speaking-fix lg:bg-bottom bg-no-repeat py-16 lg:py-28 text-white">
    <h6 class="font-subheader font-semibold mb-1 tracking-widest uppercase"><?php esc_html_e($lang["aboutWhitney"]["corner-text"]); ?></h6>
    <h2 class="md:max-w-[400px] lg:max-w-none font-subhead font-bold text-4xl mb-6 leading-normal"><?php esc_html_e($lang["aboutWhitney"]["title"]); ?></h2>
    <div class="space-y-4 mb-6">
      <p class="bg-plus-yellow bg-left bg-no-repeat pl-8 text-lg"><?php esc_html_e($lang["aboutWhitney"]["bulletOne"]); ?></p>
      <p class="bg-plus-yellow bg-left bg-no-repeat pl-8 text-lg"><?php esc_html_e($lang["aboutWhitney"]["bulletTwo"]); ?></p>
      <p class="bg-plus-yellow bg-left bg-no-repeat pl-8 text-lg"><?php esc_html_e($lang["aboutWhitney"]["bulletThree"]); ?></p>
      <p class="bg-plus-yellow bg-left bg-no-repeat pl-8 text-lg"><?php esc_html_e($lang["aboutWhitney"]["bulletFour"]); ?></p>
      <p class="bg-plus-yellow bg-left bg-no-repeat pl-8 text-lg"><?php esc_html_e($lang["aboutWhitney"]["bulletFive"]); ?></p>
      <p class="bg-plus-yellow bg-left bg-no-repeat pl-8 text-lg"><?php esc_html_e($lang["aboutWhitney"]["bulletSix"]); ?></p>
      <p class="bg-plus-yellow bg-left bg-no-repeat pl-8 text-lg"><?php esc_html_e($lang["aboutWhitney"]["bulletSeven"]); ?></p>
    </div>
    <?php get_template_part( 'template-parts/components/buttons/hollow-invert', null, array('label' => $lang["aboutWhitney"]["ctaText"], 'href' => $LINKS["whitney-johnson"])); ?>
  </div>
</div>