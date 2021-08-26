<?php require get_template_directory() . "/lang/servicesSCurveInsight.php"; ?>
<?php
$tabsOpts = array(
  "tabs" => array(
    array("key" => "risks", "label" => "1. ".$lang["features"]["accelerants"]["tab-one"]["title"], "content-src" => "template-parts/components/tabs/content/rightRisks"),
    array("key" => "strengths", "label" => "2. ".$lang["features"]["accelerants"]["tab-two"]["title"], "content-src" => "template-parts/components/tabs/content/distinctiveStrengths"),
    array("key" => "constraints", "label" => "3. ".$lang["features"]["accelerants"]["tab-three"]["title"], "content-src" => "template-parts/components/tabs/content/embraceConstraints"),
    array("key" => "expectations", "label" => "4. ".$lang["features"]["accelerants"]["tab-four"]["title"], "content-src" => "template-parts/components/tabs/content/examineExpectations"),
    array("key" => "grow", "label" => "5. ".$lang["features"]["accelerants"]["tab-five"]["title"], "content-src" => "template-parts/components/tabs/content/stepBackToGrow"),
    array("key" => "failure", "label" => "6. ".$lang["features"]["accelerants"]["tab-six"]["title"], "content-src" => "template-parts/components/tabs/content/leverageFailure"),
    array("key" => "discovery", "label" => "7. ".$lang["features"]["accelerants"]["tab-seven"]["title"], "content-src" => "template-parts/components/tabs/content/discoveryDriven"),
  )
);
?>
<div id="accelerants" class="text-left mb-16 md:mb-20">
  <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => $lang["features"]["accelerants"]["title"], "addt-styles" => "mb-6 font-bold")); ?>
  <p class="text-lg mb-6"><?php esc_html_e($lang["features"]["accelerants"]["text-one"]); ?></p>
  <p class="text-lg mb-10"><?php esc_html_e($lang["features"]["accelerants"]["text-two"]); ?></p>
  <?php get_template_part( 'template-parts/components/tabs/linkList', null, $tabsOpts); ?>
</div>