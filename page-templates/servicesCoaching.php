<?php
/*
  Template Name: Services - Coaching
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "Personalized and Focused Guidance for Growth",
  "tagline" => "World-class coaching to help you achieve your goals.",
  "corner-tag" => "Coaching Services",
  "cta-label" => "Get Coached",
  "cta-reason" => "Coaching"
);
$jumbotronLinks = array(
  "Our Methodology" => "#methodology",
  "Our Services" => "#services",
  "Our Coaches" => "#coaches",
  "Contact Us" => "#contactUs",
);
$xSellOpts = array(
  "title" => "Power Up Your Experience with Your Coach",
  "tagline" => "Combine the power of coaching with our other services to supercharge your growth.",
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