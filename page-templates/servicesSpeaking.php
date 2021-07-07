<?php
/*
  Template Name: Services - Speaking
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "Inspire a movement of growth",
  "tagline" => "Ride the wave of disruption and leverage your ability to make the right moves as a top tier leader.",
  "corner-tag" => "Speaking Events",
  "cta-label" => "Book Whitney Johnson"
);
$jumbotronLinks = array(
  "Power of Speaking Events" => "#power-of-speaking",
  "About Whitney Johnson" => "#about-whitney-johnson",
  "Speaking Topics" => "#speaking-topics",
  "Contact Us" => "#contact",
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
<?php get_footer(); ?>