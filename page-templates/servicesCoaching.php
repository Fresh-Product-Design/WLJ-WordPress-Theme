<?php
/*
  Template Name: Services - Coaching
  Template Post Type: page
*/

require get_template_directory() . "/lang/servicesCoaching.php";

$jumbotronOpts = array(
  "title" => $lang["jumbotron"]["headline"],
  "tagline" => $lang["jumbotron"]["tagline"],
  "corner-tag" => $lang["jumbotron"]["corner-text"],
  "cta-label" => $lang["jumbotron"]["ctaText"],
  "cta-reason" => "Coaching"
);
$jumbotronLinks = array(
  $lang["methodology"]["tab-title"] => "#methodology",
  $lang["services"]["tab-title"] => "#services",
  $lang["coaches"]["tab-title"] => "#coaches",
  $lang["contactUs"]["title"] => "#contactUs",
);
$xSellOpts = array(
  "title" => $lang["crossSell"]["headline"],
  "tagline" => $lang["crossSell"]["tagline"],
  "cards" => array(
    array("src" => "template-parts/components/xSells/blocks/takeTheAssessment"),
    array("src" => "template-parts/components/xSells/blocks/scheduleAWorkshop"),
    array("src" => "template-parts/components/xSells/blocks/bookWhitneyJohnson")
  )
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <?php get_template_part( 'template-parts/pages/services/coaching/methodology' ); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/coaching' ); ?>
  <?php get_template_part( 'template-parts/components/banners/worldClassCoaching' ); ?>
  <?php get_template_part( 'template-parts/pages/services/coaching/coaching-services' ); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>
  <?php get_template_part( 'template-parts/pages/services/coaching/whyDisruptionAdvisors' ); ?>
  <?php get_template_part( 'template-parts/components/banners/worldClassCoaching' ); ?>
  <?php get_template_part( 'template-parts/pages/services/coaching/ourCoaches' ); ?>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner' ); ?>
  <?php get_template_part( 'template-parts/components/xSells/basic', null, $xSellOpts ); ?>
<?php get_footer(); ?>