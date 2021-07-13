<?php
  require get_template_directory() . "/link-configs.php";
  
  $blockOpts = array(
    "title" => "Become A Partner",
    "tagline" => "Join a community of experts promoting growth through disruption.",
    "href" => $LINKS["services"]["certification"]
  );
  
  get_template_part( 'template-parts/components/xSells/blocks/block', null, $blockOpts);
?>
