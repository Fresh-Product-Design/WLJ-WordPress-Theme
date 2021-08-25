<?php
  require get_template_directory() . "/lang/crossSell.php";
  require get_template_directory() . "/link-configs.php";
  
  $blockOpts = array(
    "img" => array_key_exists("no-img", $args) === false ? "/src/assets/images/services/scheduleAWorkshop.png" : false,
    "title" => $lang["scheduleAWorkshop"]["title"],
    "tagline" => $lang["scheduleAWorkshop"]["text"],
    "href" => $LINKS["services"]["workshops"]
  );
  
  get_template_part( 'template-parts/components/xSells/blocks/block', null, $blockOpts);
?>
