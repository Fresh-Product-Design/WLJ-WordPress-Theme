<?php
/*
  Template Name: Services - Certification
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "join a community of experts dedicated to disruption & growth",
  "tagline" => "Certified Disruption Advisors support leaders, teams, and organizations travel the S Curve to achieve their goals.",
  "corner-tag" => "Certification",
  "cta-label" => "Become a Disruption Advisor"
);
$jumbotronLinks = array(
  "Who Are Disruption Advisors" => "#who-are-disruption-advisors",
  "Who Can Be Certified" => "#who-can-be-certified",
  "Benefits of Certification" => "#benefits",
  "Contact Us" => "#contactUs",
);
$iconLinksOpts = array(
  "headline" => "Who are Disruption Advisors", 
  "tagline" => "Elite group of executive coaches helping leaders at FORTUNE 500 companies achieve peak performance.",
  "links" => array(
    array("icon-src" => "/src/assets/images/icons/supported.png", "icon-width" => "89", "icon-height" => "87", "title" => "Supported", "info" => "Part of a community of experts dedicated to growth and disruption"),
    array("icon-src" => "/src/assets/images/icons/experienced.png", "icon-width" => "68", "icon-height" => "87", "title" => "Experienced", "info" => "Vetted and certified representatives of our proprietary framworks"),
    array("icon-src" => "/src/assets/images/icons/connected.png", "icon-width" => "76", "icon-height" => "87", "title" => "Connected", "info" => "Have access to a proven suite of tools for coaching, workshops, and more"),
  ),
  "spacing" => "mb-12",
  "info-width" => "w-[280px]"
);
$tabsOpts = array(
  "tabs" => array(
    array("key" => "coaches", "label" => "Coaches", "content-src" => "template-parts/components/tabs/content/coaches"),
    array("key" => "trainers", "label" => "Trainers", "content-src" => "template-parts/components/tabs/content/trainers"),
    array("key" => "consultants", "label" => "Consultants", "content-src" => "template-parts/components/tabs/content/consultants")
  )
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <div id="who-are-disruption-advisors" class="pt-24">
    <?php get_template_part( 'template-parts/components/infoBlocks/iconLinks', null, $iconLinksOpts ); ?>
  </div>
  <div id="who-can-be-certified" class="pb-24">
    <?php get_template_part( 'template-parts/components/tabs/basic', null, $tabsOpts); ?>
  </div>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner_yellow' ); ?>
  <?php get_template_part( 'template-parts/pages/services/certification/benefits' ); ?>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner_yellow' ); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/certifications' ); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>
<?php get_footer(); ?>