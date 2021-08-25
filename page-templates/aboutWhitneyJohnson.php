<?php
/*
  Template Name: About Whitney Johnson
  Template Post Type: page
*/

require get_template_directory() . "/lang/aboutWhitneyJohnson.php";

$jumbotronOpts = array(
  'title' => $lang["jumbotron"]["headline"]
);
$jumbotronLinks = array(
  $lang["bio"]["title"] => "#bio",
  $lang["speaking"]["title"] => "#speaking",
  $lang["podcast"]["tab-title"] => "#podcast",
  $lang["books"]["tab-title"] => "#books",
  $lang["coaching"]["title"] => "#coaching"
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