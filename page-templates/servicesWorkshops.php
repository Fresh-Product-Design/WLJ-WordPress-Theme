<?php
/*
  Template Name: Services - Workshops
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "Cultivate an entire culture of empowered growth",
  "tagline" => "Customized workshops to empower personal and professional growth.",
  "corner-tag" => "Workshops",
  "cta-label" => "Book a Customized Workshop"
);
$jumbotronLinks = array(
  "Our Methoodology" => "#methodology",
  "Workshop Topics" => "#workshop-topics",
  "Contact Us" => "#contact"
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
<?php get_footer(); ?>