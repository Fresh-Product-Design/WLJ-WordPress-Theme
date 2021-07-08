<?php require get_template_directory() . "/podcast-configs.php" ?>
<?php require_once get_template_directory() . "/podcast-functions.php" ?>

<div class="py-24">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "All Episodes", "mb" => "mb-8", "align" => "text-left")); ?>
    <div class="grid grid-cols-1 grid-rows-4 md:grid-cols-2 md:grid-rows-2 gap-8">
      <?php
        $postArgs = array(
          "numberposts" => 300,
          "category" => 8588,
          "orderby"    => "post_date",
          "sort_order" => "desc"
        );
        $podcastPosts = get_posts($postArgs);
        foreach($podcastPosts as $post)
        {
          setup_postdata($post);
          $thumbnail = str_replace("whitney-johnson.local", "whitneyjohnson.com", wp_get_attachment_url(get_post_thumbnail_id( $post->ID )));
          $url = str_replace("whitney-johnson.local", "whitneyjohnson.com", get_post_permalink($post->ID));
          print("<a href='".$url."' class='relative group block flex-grow'><div class='absolute opacity-0 group-hover:opacity-100 inset-0 bg-gradient-to-b from-[rgba(254,210,0,0.60)] to-white/5 transition-all duration-300'></div><img class='w-full' src='".$thumbnail."' /></a>");
        }
      ?>
    </div>
  </div>
</div>