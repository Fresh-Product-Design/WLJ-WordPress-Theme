<?php
/*
  Template Name: Services - Certification
  Template Post Type: page
*/

require get_template_directory() . "/lang/servicesCertification.php";

$jumbotronOpts = array(
  "title" => $lang["jumbotron"]["headline"],
  "tagline" => $lang["jumbotron"]["tagline"],
  "corner-tag" => $lang["jumbotron"]["corner-text"],
  "cta-label" => $lang["jumbotron"]["ctaText"],
  "cta-reason" => "Certification"
);
$jumbotronLinks = array(
  $lang["whoAreWe"]["tab-title"] => "#who-are-disruption-advisors",
  $lang["whoCanBe"]["tab-title"] => "#who-can-be-certified",
  $lang["benefits"]["tab-title"] => "#benefits",
  $lang["contactUs"]["title"] => "#contactUs",
);
$iconLinksOpts = array(
  "headline" => $lang["whoAreWe"]["title"], 
  "tagline" => $lang["whoAreWe"]["tagline"],
  "links" => array(
    array("icon-src" => "/src/assets/images/icons/supported.png", "icon-width" => "89", "icon-height" => "87", "title" => "Supported", "info" => $lang["whoAreWe"]["supported"]),
    array("icon-src" => "/src/assets/images/icons/experienced.png", "icon-width" => "68", "icon-height" => "87", "title" => "Experienced", "info" => $lang["whoAreWe"]["experienced"]),
    array("icon-src" => "/src/assets/images/icons/connected.png", "icon-width" => "76", "icon-height" => "87", "title" => "Connected", "info" => $lang["whoAreWe"]["connected"]),
  ),
  "spacing" => "mb-12",
  "info-width" => "w-[280px]"
);
$tabsOpts = array(
  "tabs" => array(
    array("key" => "coaches", "label" => $lang["coaches"]["title"], "content-src" => "template-parts/components/tabs/content/coaches"),
    array("key" => "trainers", "label" => $lang["trainers"]["title"], "content-src" => "template-parts/components/tabs/content/trainers"),
    array("key" => "consultants", "label" => $lang["consultants"]["title"], "content-src" => "template-parts/components/tabs/content/consultants")
  )
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/leftCta', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <div id="who-are-disruption-advisors" class="pt-24">
    <?php get_template_part( 'template-parts/components/infoBlocks/iconLinks', null, $iconLinksOpts ); ?>
  </div>
  <div id="who-can-be-certified">
    <?php get_template_part( 'template-parts/components/tabs/basic', null, $tabsOpts); ?>
  </div>
  <?php get_template_part( 'template-parts/components/testimonials/services/certification-top' ); ?>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner_yellow' ); ?>
  <?php get_template_part( 'template-parts/pages/services/certification/benefits' ); ?>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner_yellow' ); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/certifications' ); ?>
  <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]")); ?>
<?php get_footer(); ?>