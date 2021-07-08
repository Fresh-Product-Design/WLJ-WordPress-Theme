<?php
function renderPodcastImages($podcastPostIds) {
  foreach($podcastPostIds as $podcastPostId)
  {
    $thumbnail = str_replace("whitney-johnson.local", "whitneyjohnson.com", wp_get_attachment_url(get_post_thumbnail_id($podcastPostId)));
    $url = str_replace("whitney-johnson.local", "whitneyjohnson.com", get_post_permalink($podcastPostId));
    print("<a href='".$url."' class='relative group block flex-grow'><div class='absolute opacity-0 group-hover:opacity-100 inset-0 bg-gradient-to-b from-[rgba(254,210,0,0.60)] to-white/5'></div><img class='w-full' src='".$thumbnail."' /></a>");
  }
}
?>