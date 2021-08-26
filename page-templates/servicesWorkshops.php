<?php
/*
  Template Name: Services - Workshops
  Template Post Type: page
*/

require get_template_directory() . "/lang/servicesWorkshops.php";

$jumbotronOpts = array(
  "title" => $lang["jumbotron"]["headline"],
  "tagline" => $lang["jumbotron"]["tagline"],
  "corner-tag" => $lang["jumbotron"]["corner-text"],
  "cta-label" => $lang["jumbotron"]["ctaText"],
  "cta-reason" => "Workshops"
);
$jumbotronLinks = array(
  $lang["methodology"]["title"] => "#methodology",
  $lang["workshopTopics"]["title"] => "#workshop-topics",
  $lang["contactUs"]["title"] => "#contactUs"
);
$xSellOpts = array(
  "title" => $lang["crossSell"]["headline"],
  "tagline" => $lang["crossSell"]["tagline"],
  "cards" => array(
    array("src" => "template-parts/components/xSells/blocks/takeTheAssessment"),
    array("src" => "template-parts/components/xSells/blocks/findACoach"),
    array("src" => "template-parts/components/xSells/blocks/bookWhitneyJohnson")
  )
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <?php get_template_part( 'template-parts/pages/services/workshops/methodology' ); ?>
  <?php get_template_part( 'template-parts/components/banners/bookAWorkshop' ); ?>
  <?php get_template_part( 'template-parts/pages/services/workshops/workshopTopics' ); ?>
  <?php get_template_part( 'template-parts/components/banners/bookAWorkshop' ); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/workshops' ); ?>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner-workshops' ); ?>
  <?php get_template_part( 'template-parts/components/xSells/basic', null, $xSellOpts ); ?>
<?php get_footer(); ?>