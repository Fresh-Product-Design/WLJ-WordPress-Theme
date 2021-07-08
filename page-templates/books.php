<?php
/*
  Template Name: Books
  Template Post Type: page
*/

?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/books'); ?>
  <?php get_template_part( 'template-parts/pages/books/disruptYourself'); ?>
  <?php get_template_part( 'template-parts/pages/books/buildAnATeam'); ?>
  <?php get_template_part( 'template-parts/pages/books/dareDreamDo'); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>
<?php get_footer(); ?>