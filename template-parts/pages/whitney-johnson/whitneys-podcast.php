<?php require get_template_directory() . "/link-configs.php" ?>
<?php require get_template_directory() . "/podcast-configs.php" ?>

<div id="podcast" class="bg-white py-24">
  <div class="content-container text-center">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Listen to Whitney's Podcast", "mb" => "mb-4")); ?>
    <p class="max-w-[925px] text-lg text-[#4d4d4d] mx-auto mb-10">Whitney talks to some of the world’s best thinkers and leaders on the weekly Disrupt Yourself podcast, providing insight into how to disrupt,grow, and thrive as individuals and organizations. </p>
    <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 mb-10">
      <?php
        foreach($PODCASTS["about-whitney-johnson"] as $podcastPostId)
        {
          $thumbnail = str_replace("whitney-johnson.local", "whitneyjohnson.com", wp_get_attachment_url(get_post_thumbnail_id($podcastPostId)));
          $url = str_replace("whitney-johnson.local", "whitneyjohnson.com", get_post_permalink($podcastPostId));
          printf("<a href='".$url."' class='block flex-grow'><img class='w-full' src='".$thumbnail."' /></a>");
        }
        ?>
    </div>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'View All Episodes', 'link' => $LINKS["podcast"])); ?>
  </div>
</div>