<?php
/*
  Template Name: Podcast
  Template Post Type: page
*/


?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/podcast'); ?>
  <?php get_template_part( 'template-parts/components/testimonials/podcast' ); ?>
  <?php get_template_part( 'template-parts/pages/podcast/newToPodcast'); ?>
  <?php get_template_part( 'template-parts/pages/podcast/launchPoint'); ?>
  <?php get_template_part( 'template-parts/pages/podcast/sweetSpot'); ?>
  <?php get_template_part( 'template-parts/pages/podcast/mastery'); ?>
  <?php get_template_part( 'template-parts/pages/podcast/mostDownloaded'); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>
  <?php get_template_part( 'template-parts/pages/podcast/allEpisodes'); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>
<?php get_footer(); ?>