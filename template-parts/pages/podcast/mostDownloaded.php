<?php require get_template_directory() . "/podcast-configs.php" ?>
<?php require_once get_template_directory() . "/podcast-functions.php" ?>

<div class="py-24">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Or, start with some of our most downloaded episodes:", "mb" => "mb-8", "align" => "text-left")); ?>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <?php
        renderPodcastImages($PODCASTS["most-downloaded"]);
      ?>
    </div>
  </div>
</div>