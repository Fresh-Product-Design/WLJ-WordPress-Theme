<?php
  require get_template_directory() . "/link-configs.php";
  
  $blockOpts = array(
    "img" => array_key_exists("no-img", $args) === false ? "/src/assets/images/services/scheduleAWorkshop.png" : false,
    "title" => "Schedule A Workshop",
    "tagline" => "Master personal disruption through hands-on training.",
    "href" => $LINKS["services"]["workshops"]
  );
  
  get_template_part( 'template-parts/components/xSells/blocks/block', null, $blockOpts);
?>
