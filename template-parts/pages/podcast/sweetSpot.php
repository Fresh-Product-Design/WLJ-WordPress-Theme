<?php require get_template_directory() . "/lang/podcast.php"; ?>
<?php require get_template_directory() . "/podcast-configs.php" ?>
<?php require_once get_template_directory() . "/podcast-functions.php" ?>

<div class="pt-24">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["sweetSpot"]["title"], "mb" => "mb-2", "align" => "text-left")); ?>
    <p class="text-lg mb-8"><?php esc_html_e($lang["sweetSpot"]["text"]); ?></p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <?php
        renderPodcastImages($PODCASTS["sweet-spot"]);
      ?>
    </div>
  </div>
</div>