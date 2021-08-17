<?php require get_template_directory() . "/link-configs.php" ?>
<?php require get_template_directory() . "/podcast-configs.php" ?>
<?php require_once get_template_directory() . "/podcast-functions.php" ?>

<div id="podcast" class="bg-white py-24">
  <div class="content-container text-center">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Listen to Whitney's Podcast", "mb" => "mb-4")); ?>
    <p class="max-w-[925px] text-lg text-[#4d4d4d] mx-auto mb-10">Whitney talks to some of the world's best thinkers, doers, and leaders on the weekly Disrupt Yourself podcast, providing insight into how to disrupt, grow, and thrive as individuals and organizations. </p>
    <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 mb-10">
      <?php
        renderPodcastImages($PODCASTS["about-whitney-johnson"]);
      ?>
    </div>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'View All Episodes', 'href' => $LINKS["podcast"])); ?>
  </div>
</div>