<?php
  require get_template_directory() . "/lang/crossSell.php";
  require get_template_directory() . "/link-configs.php";
  
  $blockOpts = array(
    "img" => array_key_exists("no-img", $args) === false ? "/src/assets/images/services/take-the-assessment-alt.png" : false,
    "title" => $lang["takeTheAssessment"]["title"],
    "tagline" => $lang["takeTheAssessment"]["text"],
    "href" => $LINKS["services"]["s-curve-insight"]
  );
  
  get_template_part( 'template-parts/components/xSells/blocks/block', null, $blockOpts);
?>
