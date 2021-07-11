<?php
/*
  Template Name: Services - Coaching
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "Personalized and Focused Guidance for Growth",
  "tagline" => "World-class coaching to help you achieve your goals.",
  "corner-tag" => "Coaching Services",
  "cta-label" => "Get Coached"
);
$jumbotronLinks = array(
  "Our Methodology" => "#methodology",
  "Our Services" => "#services",
  "Our Coaches" => "#coaches",
  "Contact Us" => "#contactUs",
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <?php get_template_part( 'template-parts/pages/services/coaching/methodology' ); ?>
  <?php get_template_part( 'template-parts/components/banners/worldClassCoaching' ); ?>
  <?php get_template_part( 'template-parts/pages/services/coaching/coaching-services' ); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>
  <?php get_template_part( 'template-parts/pages/services/coaching/whyDisruptionAdvisors' ); ?>
  <?php get_template_part( 'template-parts/components/banners/worldClassCoaching' ); ?>
  <?php get_template_part( 'template-parts/pages/services/coaching/ourCoaches' ); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/coaching' ); ?>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner' ); ?>
  <?php get_template_part( 'template-parts/components/xSells/powerUpWithCoaches' ); ?>
<?php get_footer(); ?>