<?php
/*
  Template Name: About Us
  Template Post Type: page
*/

$jumbotronOpts = array(
  'title' => 'About Us',
  'tagline' => 'We activate smart growth and high performance in leaders, teams, and organizations.'
);
$jumbotronLinks = array(
  "Our Story" => "#story",
  "Our Leadership" => "#leadership",
  "Our Team" => "#team",
  "Our Clients" => "#clients",
  "Contact Us" => "#contactUs"
);
?>
<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/basic', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <?php get_template_part( 'template-parts/pages/about-us/ourStory'); ?>
  <?php get_template_part( 'template-parts/pages/about-us/ourLeadership'); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("background" => "bg-white", "line-color" => "bg-[#BFBFBF]")); ?>
  <?php get_template_part( 'template-parts/pages/about-us/ourTeam'); ?>
  <?php get_template_part( 'template-parts/pages/about-us/ourClients'); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("background" => "", "line-color" => "bg-[#BFBFBF]")); ?>
<?php get_footer(); ?>