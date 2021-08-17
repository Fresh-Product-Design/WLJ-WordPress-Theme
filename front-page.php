<?php require get_template_directory() . "/link-configs.php" ?>

<?php
  $iconLinksOpts = array(
    "headline" => "Grow Smarter", 
    "tagline" => "Achieve sustained organizational success with critical insight on individual momentum",
    "links" => array(
      array("icon-src" => "/src/assets/images/icons/assessment@3x.png", "icon-width" => "72", "icon-height" => "87", "title" => "Assessment", "info" => "Get insight on building a high performing team.", "href" => $LINKS["services"]["s-curve-insight"]),
      array("icon-src" => "/src/assets/images/icons/coaching@3x.png", "icon-width" => "90", "icon-height" => "87", "title" => "Coaching", "info" => "Identify your strengths and achieve your goals.", "href" => $LINKS["services"]["coaching"]),
      array("icon-src" => "/src/assets/images/icons/certifications@3x.png", "icon-width" => "70", "icon-height" => "87", "title" => "Certifications", "info" => "Join a community of experts dedicated to growth.", "href" => $LINKS["services"]["certification"]),
      array("icon-src" => "/src/assets/images/icons/speaking@3x.png", "icon-width" => "84.5", "icon-height" => "87", "title" => "Speaking", "info" => "Inspire change within your whole organization.", "href" => $LINKS["services"]["speaking"]),
    )
  );
  $xSellOpts = array(
    "title" => "Work With Us",
    "tagline" => "We help organizations build happier, more engaged and productive teams.",
    "cards" => array(
      array("src" => "template-parts/components/xSells/blocks/takeTheAssessment", "opts" => array("no-img" => true)),
      array("src" => "template-parts/components/xSells/blocks/becomeAPartner"),
      array("src" => "template-parts/components/xSells/blocks/bookWhitneyJohnson", "opts" => array("no-img" => true))
    )
  );
?>

<?php get_header(); ?>
  <!-- Unlock Your Potential -->
  <?php get_template_part( 'template-parts/components/jumbotrons/curves', null, array("headline" => "Individual Transformation Organizational Growth", "tagline" => "Unlock Your Potential", "showArrows" => true )); ?>
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