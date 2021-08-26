<?php
/*
  Template Name: Services - S Curve Insight
  Template Post Type: page
*/

require get_template_directory() . "/lang/servicesSCurveInsight.php";


$jumbotronOpts = array(
  "title" => $lang["jumbotron"]["headline"],
  "tagline" => $lang["jumbotron"]["tagline"],
  "corner-tag" => $lang["jumbotron"]["cornerTitle"],
  "cta-label" => $lang["jumbotron"]["ctaText"],
  "cta-reason" => "S Curve Insight Platform",
  "padding" => "pt-12 pb-16 lg:pt-28 lg:pb-8",
  "margin" => "mb-16 lg:mb-32",
  "img-src" => "/src/assets/images/services/sCurveApplication.png",
  "img-base-width" => "540",
  "img-base-height" => "676"
);

$iconLinksOpts = array(
  "headline" => $lang["iconLinks"]["headline"], 
  "tagline" => $lang["iconLinks"]["tagline"],
  "links" => array(
    array("icon-src" => "/src/assets/images/icons/s-curve_distribution@3x.png", "icon-width" => "76", "icon-height" => "87", "title" => "S Curve Distribution", "info" => $lang["iconLinks"]["distribution"], "href" => "#s-curve"),
    array("icon-src" => "/src/assets/images/icons/growth_accelerants@3x.png", "icon-width" => "90", "icon-height" => "87", "title" => "Growth Accelerants", "info" => $lang["iconLinks"]["accelerants"], "href" => "#accelerants"),
    array("icon-src" => "/src/assets/images/icons/team_culture@3x.png", "icon-width" => "81", "icon-height" => "87", "title" => "Team Culture", "info" => $lang["iconLinks"]["culture"], "href" => "#culture", "addt-styles" => "md:col-span-2"),
  ),
  "cta-label" => $lang["iconLinks"]["ctaText"],
  "cta-reason" => "S Curve Insight Platform"
); 

$tabsOpts = array(
  "tabs" => array(
    array("key" => "empower", "label" => $lang["empowerIndividuals"]["title"], "content-src" => "template-parts/components/tabs/content/empowerIndividuals"),
    array("key" => "stengthen", "label" => $lang["strengthenTeams"]["title"], "content-src" => "template-parts/components/tabs/content/strengthenTeams"),
    array("key" => "grow", "label" => $lang["growOrganization"]["title"], "content-src" => "template-parts/components/tabs/content/growAnOrganization")
  ),
  "addt-styles" => "mb-24"
);

$xSellOpts = array(
  "title" => $lang["crossSell"]["headline"],
  "tagline" => $lang["crossSell"]["tagline"],
  "cards" => array(
    array("src" => "template-parts/components/xSells/blocks/findACoach"),
    array("src" => "template-parts/components/xSells/blocks/scheduleAWorkshop"),
    array("src" => "template-parts/components/xSells/blocks/bookWhitneyJohnson")
  )
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
  <?php get_template_part( 'template-parts/components/xSells/basic', null, $xSellOpts ); ?>
<?php get_footer(); ?>