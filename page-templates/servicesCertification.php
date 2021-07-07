<?php
/*
  Template Name: Services - Certification
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "join a community of experts dedicated to disruption & growth",
  "tagline" => "Certified Disruption Advisors support leaders, teams, and organizations travel the S Curve to achieve their goals.",
  "corner-tag" => "Certification",
  "cta-label" => "Become a Disruption Advisor"
);
$jumbotronLinks = array(
  "Who Are Disruption Advisors" => "#who-are-disruption-advisors",
  "Who Can Be Certified" => "#who-can-be-certified",
  "Benefits of Certification" => "#benefits",
  "Contact Us" => "#contact",
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
<?php get_footer(); ?>