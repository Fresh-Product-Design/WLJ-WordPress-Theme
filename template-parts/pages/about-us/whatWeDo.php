<?php require get_template_directory() . "/lang/aboutUs.php"; ?>

<div id="whatWeDo" class="content-container text-lg py-24">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["whatWeDo"]["title"])); ?>
  <p class="text-lg md:text-xl mb-10"><?php esc_html_e($lang["whatWeDo"]["text"]); ?></p>
  <p class="text-lg md:text-xl font-bold mb-4"><?php esc_html_e($lang["whatWeDo"]["bulletTitle"]); ?></p>
  <p class="bg-check-red bg-left bg-no-repeat pl-8 mb-4"><?php esc_html_e($lang["whatWeDo"]["bulletOne"]); ?></p>
  <p class="bg-check-red bg-left bg-no-repeat pl-8 mb-4"><?php esc_html_e($lang["whatWeDo"]["bulletTwo"]); ?></p>
  <p class="bg-check-red bg-left bg-no-repeat pl-8 mb-4"><?php esc_html_e($lang["whatWeDo"]["bulletThree"]); ?></p>
</div>