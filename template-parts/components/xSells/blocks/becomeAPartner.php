
<?php
  require get_template_directory() . "/lang/crossSell.php";
  require get_template_directory() . "/link-configs.php";
  
  $blockOpts = array(
    "title" => $lang["becomeAPartner"]["title"],
    "tagline" => $lang["becomeAPartner"]["text"],
    "href" => $LINKS["services"]["certification"]
  );
  
  get_template_part( 'template-parts/components/xSells/blocks/block', null, $blockOpts);
?>
