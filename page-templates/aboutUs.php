<?php
/*
  Template Name: About Us
  Template Post Type: page
*/

require get_template_directory() . "/lang/aboutUs.php";

$jumbotronOpts = array(
  'title' => $lang["jumbotron"]["headline"],
  'tagline' => $lang["jumbotron"]["tagline"]
);
$jumbotronLinks = array(
  $lang["whatWeDo"]["title"] => "#whatWeDo",
  $lang["leadership"]["title"] => "#leadership",
  $lang["team"]["title"] => "#team",
  $lang["clients"]["title"] => "#clients",
  $lang["contactUs"]["title"] => "#contactUs"
);
?>
<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/basic', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <?php get_template_part( 'template-parts/pages/about-us/whatWeDo'); ?>
  <?php get_template_part( 'template-parts/pages/about-us/ourLeadership'); ?>
  <?php get_template_part( 'template-parts/components/testimonials/aboutUs'); ?>
  <?php get_template_part( 'template-parts/pages/about-us/ourTeam'); ?>
  <?php get_template_part( 'template-parts/pages/about-us/ourClients'); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>
<?php get_footer(); ?>