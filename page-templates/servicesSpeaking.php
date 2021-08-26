<?php
/*
  Template Name: Services - Speaking
  Template Post Type: page
*/

require get_template_directory() . "/lang/servicesSpeaking.php";

$jumbotronLinks = array(
  $lang["powerOfSpeaking"]["tab-title"] => "#power-of-speaking",
  $lang["aboutWhitney"]["tab-title"] => "#about-whitney-johnson",
  $lang["speakingTopics"]["tab-title"] => "#speaking-topics",
  $lang["contactUs"]["title"] => "#contactUs",
);
$iconLinksOpts = array(
  "headline" => $lang["powerOfSpeaking"]["title"], 
  "tagline" => $lang["powerOfSpeaking"]["text"],
  "links" => array(
    array("icon-src" => "/src/assets/images/icons/customized.png", "icon-width" => "78.5", "icon-height" => "87", "title" => "Customized", "info" => $lang["powerOfSpeaking"]["customized"]),
    array("icon-src" => "/src/assets/images/icons/focused.png", "icon-width" => "86", "icon-height" => "87", "title" => "Focused", "info" => $lang["powerOfSpeaking"]["focused"]),
    array("icon-src" => "/src/assets/images/icons/empowering.png", "icon-width" => "70", "icon-height" => "87", "title" => "Empowering", "info" => $lang["powerOfSpeaking"]["empowering"]),
  ),
  "spacing" => "",
  "info-width" => "w-[262px]",
  "cta-label" => $lang["powerOfSpeaking"]["ctaText"],
  "cta-reason" => "Speaking"
);
$xSellOpts = array(
  "title" => $lang["crossSell"]["headline"],
  "tagline" => $lang["crossSell"]["tagline"],
  "cards" => array(
    array("src" => "template-parts/components/xSells/blocks/takeTheAssessment"),
    array("src" => "template-parts/components/xSells/blocks/findACoach"),
    array("src" => "template-parts/components/xSells/blocks/scheduleAWorkshop")
  )
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/speaking' ); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <div id="power-of-speaking" class="py-24">
    <?php get_template_part( 'template-parts/components/infoBlocks/iconLinks', null, $iconLinksOpts ); ?>
  </div>
  <?php get_template_part( 'template-parts/pages/services/speaking/whatMakesWhitneyDifferent' ); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/speaking' ); ?>
  <?php get_template_part( 'template-parts/pages/services/speaking/keynotes' ); ?>
  <?php get_template_part( 'template-parts/pages/services/speaking/speaking-topics' ); ?>
  <?php get_template_part( 'template-parts/components/xSells/basic', null, $xSellOpts ); ?>
<?php get_footer(); ?>