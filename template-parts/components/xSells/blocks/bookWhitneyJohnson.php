<?php
  require get_template_directory() . "/lang/crossSell.php";
  require get_template_directory() . "/link-configs.php";
  
  $blockOpts = array(
    "img" => array_key_exists("no-img", $args) === false ? "/src/assets/images/services/bookWhitneyJohnson.png" : false,
    "title" => $lang["bookWhitneyJohnson"]["title"],
    "tagline" => $lang["bookWhitneyJohnson"]["text"],
    "href" => $LINKS["services"]["speaking"]
  );
  
  get_template_part( 'template-parts/components/xSells/blocks/block', null, $blockOpts);
?>
