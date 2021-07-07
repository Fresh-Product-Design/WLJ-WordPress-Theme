<?php
/*
  Template Name: About Whitney Johnson
  Template Post Type: page
*/

$jumbotronOpts = array(
  'title' => 'Whitney Johnson'
);
$jumbotronLinks = array(
  "Whitney's Bio" => "#bio",
  "Speaking" => "#speaking",
  "Podcast" => "#podcast",
  "Books" => "#books",
  "Coaching" => "#coaching"
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/basic', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
<?php get_footer(); ?>