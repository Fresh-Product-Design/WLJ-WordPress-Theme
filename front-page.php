<?php require get_template_directory() . "/lang/front-page.php" ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<?php
  $iconLinksOpts = array(
    "headline" => $lang["iconLinks"]["headline"], 
    "tagline" => $lang["iconLinks"]["tagline"],
    "links" => array(
      array("icon-src" => "/src/assets/images/icons/assessment@3x.png", "icon-width" => "72", "icon-height" => "87", "title" => "Assessment", "info" => $lang["iconLinks"]["assessment"], "href" => $LINKS["services"]["s-curve-insight"]),
      array("icon-src" => "/src/assets/images/icons/coaching@3x.png", "icon-width" => "90", "icon-height" => "87", "title" => "Coaching", "info" => $lang["iconLinks"]["coaching"], "href" => $LINKS["services"]["coaching"]),
      array("icon-src" => "/src/assets/images/icons/certifications@3x.png", "icon-width" => "70", "icon-height" => "87", "title" => "Certifications", "info" => $lang["iconLinks"]["tagline"], "href" => $LINKS["services"]["certification"]),
      array("icon-src" => "/src/assets/images/icons/speaking@3x.png", "icon-width" => "84.5", "icon-height" => "87", "title" => "Speaking", "info" => $lang["iconLinks"]["speaking"], "href" => $LINKS["services"]["speaking"]),
    )
  );
  $xSellOpts = array(
    "title" => $lang["crossSell"]["headline"],
    "tagline" => $lang["crossSell"]["tagline"],
    "cards" => array(
      array("src" => "template-parts/components/xSells/blocks/takeTheAssessment", "opts" => array("no-img" => true)),
      array("src" => "template-parts/components/xSells/blocks/becomeAPartner"),
      array("src" => "template-parts/components/xSells/blocks/bookWhitneyJohnson", "opts" => array("no-img" => true))
    )
  );
?>

<?php get_header(); ?>
  <!-- Unlock Your Potential -->
  <?php get_template_part( 'template-parts/components/jumbotrons/curves', null, array("headline" => $lang["jumbotron"]["headline"], "tagline" => $lang["jumbotron"]["tagline"], "showArrows" => true )); ?>
  <!-- Fuel Your Growth -->
  <?php get_template_part( 'template-parts/components/infoBlocks/iconLinks', null, $iconLinksOpts ); ?>
  <!-- Receive Growth Newsletter -->
  <?php get_template_part( 'template-parts/components/banners/receiveNewsletter' ); ?>
  <!-- Whitney Johnson Testimonial -->
  <?php get_template_part( 'template-parts/pages/home/whitneyJohnsonQuote' ); ?>
  <!-- Meet Whitney & Team -->
  <?php get_template_part( 'template-parts/pages/home/meetWhitneyAndTeam' ); ?>
  <!-- S Curve Insight -->
  <?php get_template_part( 'template-parts/pages/home/SCurveInsight' ); ?>
  <!-- Customer(s) Testimonial -->
  <?php get_template_part( 'template-parts/components/testimonials/homeTestimonial' ); ?>
  <!-- Work with Us -->
  <?php get_template_part( 'template-parts/components/xSells/basic', null, $xSellOpts ); ?>
<?php get_footer(); ?>