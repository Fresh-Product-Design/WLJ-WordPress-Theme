<?php
/*
  Template Name: Newsletter
  Template Post Type: page
*/

?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/newsletter'); ?>
  <?php get_template_part( 'template-parts/pages/newsletter/introduction'); ?>
  <?php get_template_part( 'template-parts/pages/newsletter/archive'); ?>
<?php get_footer(); ?>