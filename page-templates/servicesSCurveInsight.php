<?php
/*
  Template Name: Services - S Curve Insight
  Template Post Type: page
*/

$jumbotronOpts = array(
  "title" => "Critical Insight Into Your Team’s Potential",
  "tagline" => "Take your organization to the next level.",
  "corner-tag" => "S Curve Insight&trade;",
  "cta-label" => "Request a Demo",
  "padding" => "pt-12 pb-16 lg:pt-28 lg:pb-8",
  "margin" => "mb-16 lg:mb-32",
  "img-src" => "/src/assets/images/services/sCurveApplication.png",
  "img-base-width" => "540",
  "img-base-height" => "676"
);

$iconLinksOpts = array(
  "headline" => "Power of the S Curve", 
  "tagline" => "The framework empowers you to maximize your growth and reach your goals",
  "links" => array(
    array("icon-src" => "/src/assets/images/icons/s-curve_distribution@3x.png", "icon-width" => "76", "icon-height" => "87", "title" => "S Curve Distribution", "info" => "See where your team is on their growth journey.", "href" => "#"),
    array("icon-src" => "/src/assets/images/icons/growth_accelerants@3x.png", "icon-width" => "90", "icon-height" => "87", "title" => "Growth Acceletants", "info" => "Identify your team’s strengths and areas for improvement.", "href" => "#"),
    array("icon-src" => "/src/assets/images/icons/team_culture@3x.png", "icon-width" => "81", "icon-height" => "87", "title" => "Team Culture", "info" => "Assess your organization’s culture and health.", "href" => "#", "addt-styles" => "md:col-span-2"),
  ),
  "cta-label" => "Request a Demo"
); 

$tabsOpts = array(
  "tabs" => array(
    array("key" => "empower", "label" => "Empower Individuals", "content-src" => "template-parts/components/tabs/content/empowerIndividuals"),
    array("key" => "stengthen", "label" => "Strengthen Teams", "content-src" => "template-parts/components/tabs/content/strengthenTeams"),
    array("key" => "grow", "label" => "Grow an Organization", "content-src" => "template-parts/components/tabs/content/growAnOrganization")
  ),
  "addt-styles" => "mb-24"
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/curvesWithImage', null, $jumbotronOpts); ?>
  <?php get_template_part( 'template-parts/components/infoBlocks/iconLinks', null, $iconLinksOpts ); ?>
  <?php get_template_part( 'template-parts/components/tabs/basic', null, $tabsOpts); ?>
  <?php get_template_part( 'template-parts/components/banners/getInsights'); ?>
  <?php get_template_part( 'template-parts/pages/services/s-curve/whatIsSCurveInsight'); ?>
  <?php get_template_part( 'template-parts/pages/services/s-curve/features'); ?>
  <?php get_template_part( 'template-parts/components/banners/getInsights'); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/s-curve' ); ?>
  <?php get_template_part( 'template-parts/components/banners/becomeACertifiedPartner' ); ?>
  <?php get_template_part( 'template-parts/components/xSells/powerUp' ); ?>
<?php get_footer(); ?>