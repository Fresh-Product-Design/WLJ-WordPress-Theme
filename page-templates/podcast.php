<?php
/*
  Template Name: Podcast
  Template Post Type: page
*/


?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/podcast'); ?>
  <?php get_template_part( 'template-parts/pages/podcast/startHere'); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("background" => "", "line-color" => "bg-[#BFBFBF]")); ?>
  <?php get_template_part( 'template-parts/pages/podcast/allEpisodes'); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("background" => "", "line-color" => "bg-[#BFBFBF]")); ?>
<?php get_footer(); ?>