<?php
/*
  Template Name: Services - S Curve Insight
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "Critical Insight Into Your Team’s Potential",
  "tagline" => "Take your organization to the next level.",
  "corner-tag" => "S Curve Insight&trade;",
  "cta-label" => "Request a Demo"
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
<?php get_footer(); ?>