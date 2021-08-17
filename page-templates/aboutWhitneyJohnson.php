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
  <?php get_template_part( 'template-parts/pages/whitney-johnson/bio'); ?>
  <?php get_template_part( 'template-parts/components/banners/speaking'); ?>
  <?php get_template_part( 'template-parts/pages/whitney-johnson/whitneys-podcast'); ?>
  <?php get_template_part( 'template-parts/components/testimonials/aboutWhitneyJohnson'); ?>
  <?php get_template_part( 'template-parts/pages/whitney-johnson/whitneys-books'); ?>
  <?php get_template_part( 'template-parts/pages/whitney-johnson/one-on-one'); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>
<?php get_footer(); ?>