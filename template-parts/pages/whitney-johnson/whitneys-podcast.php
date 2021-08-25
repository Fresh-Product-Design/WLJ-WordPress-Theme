<?php require get_template_directory() . "/lang/aboutWhitneyJohnson.php" ?>
<?php require get_template_directory() . "/link-configs.php" ?>
<?php require get_template_directory() . "/podcast-configs.php" ?>
<?php require_once get_template_directory() . "/podcast-functions.php" ?>

<div id="podcast" class="bg-white py-24">
  <div class="content-container text-center">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["podcast"]["title"], "mb" => "mb-4")); ?>
    <p class="max-w-[925px] text-lg text-[#4d4d4d] mx-auto mb-10"><?php esc_html_e($lang["podcast"]["text"]); ?></p>
    <div class="grid grid-cols-1 grid-rows-4 md:grid-cols-2 md:grid-rows-2 gap-8 mb-10">
      <?php
        renderPodcastImages($PODCASTS["about-whitney-johnson"]);
      ?>
    </div>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'View All Episodes', 'href' => $LINKS["podcast"])); ?>
  </div>
</div>