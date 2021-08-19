<?php
/*
  Template Name: Services - Workshops
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "Cultivate an entire culture of empowered growth",
  "tagline" => "Customized workshops to empower personal and professional growth.",
  "corner-tag" => "Workshops",
  "cta-label" => "Book a Customized Workshop",
  "cta-reason" => "Workshops"
);
$jumbotronLinks = array(
  "Our Methoodology" => "#methodology",
  "Workshop Topics" => "#workshop-topics",
  "Contact Us" => "#contactUs"
);
$xSellOpts = array(
  "title" => "Continue the Growth After Your Workshop",
  "tagline" => "We help organizations build happier, more engaged and productive teams.",
  "cards" => array(
    array("src" => "template-parts/components/xSells/blocks/takeTheAssessment"),
    array("src" => "template-parts/components/xSells/blocks/findACoach"),
    array("src" => "template-parts/components/xSells/blocks/bookWhitneyJohnson")
  )
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <?php get_template_part( 'template-parts/pages/services/workshops/methodology' ); ?>
  <?php get_template_part( 'template-parts/components/banners/bookAWorkshop' ); ?>
  <?php get_template_part( 'template-parts/pages/services/workshops/workshopTopics' ); ?>
  <?php get_template_part( 'template-parts/components/banners/bookAWorkshop' ); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/workshops' ); ?>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner-workshops' ); ?>
  <?php get_template_part( 'template-parts/components/xSells/basic', null, $xSellOpts ); ?>
<?php get_footer(); ?>