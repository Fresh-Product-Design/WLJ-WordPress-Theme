<div class="bg-white py-24">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Archive:", "align" => "text-left")); ?>
    <?php
      $postArgs = array(
        "numberposts" => 200,
        "category" => 12224,
        "orderby"    => "post_date",
        "sort_order" => "desc"
      );
      $newsletterPost = get_posts($postArgs);
      foreach($newsletterPost as $post)
      {
        setup_postdata($post);
        $title = $post->post_title;
        $number = preg_replace("/[^0-9]/", "", $post->post_name);
        $url = str_replace("whitney-johnson.local", "whitneyjohnson.com", get_post_permalink($post->ID));
        print("<div class='mb-4'><a href='".$url."' class='text-lg text-[#017381] hover:underline'>".$number." | ".apply_filters( 'the_time', get_the_time( 'F j, Y' ), 'F j, Y' )." - ".$title."</a></div>");
      }
    ?>
    <p class="text-lg text-[#4d4d4d]"> More archived newsletters to come...</p>
  </div>
</div>