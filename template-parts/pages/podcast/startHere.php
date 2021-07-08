<?php require get_template_directory() . "/podcast-configs.php" ?>
<?php require_once get_template_directory() . "/podcast-functions.php" ?>

<div class="py-24">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "New to the Podcast? Start Here", "mb" => "mb-8", "align" => "text-left")); ?>
    <div class="grid grid-cols-1 grid-rows-4 md:grid-cols-2 md:grid-rows-2 gap-8">
      <?php
        renderPodcastImages($PODCASTS["start-here"]);
      ?>
    </div>
  </div>
</div>