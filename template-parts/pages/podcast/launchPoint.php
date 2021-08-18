<?php require get_template_directory() . "/podcast-configs.php" ?>
<?php require_once get_template_directory() . "/podcast-functions.php" ?>

<div class="pt-24">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Starting something new?", "mb" => "mb-2", "align" => "text-left")); ?>
    <p class="text-lg mb-8">You're at the launch point of your S Curve of Learning. Learn more about the Launch Point in these episodes:</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <?php
        renderPodcastImages($PODCASTS["launch-point"]);
      ?>
    </div>
  </div>
</div>