<?php
  require get_template_directory() . "/link-configs.php";
  
  $blockOpts = array(
    "img" => array_key_exists("no-img", $args) === false ? "/src/assets/images/services/findACoach.png" : false,
    "title" => "Find a Coach",
    "tagline" => "Master personal disruption through hands-on training.",
    "href" => $LINKS["services"]["coaching"]
  );
  
  get_template_part( 'template-parts/components/xSells/blocks/block', null, $blockOpts);
?>
