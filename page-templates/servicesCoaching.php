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
  "Contact Us" => "#contact",
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
<?php get_footer(); ?>