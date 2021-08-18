<?php
/*
  Template Name: Services - Speaking
  Template Post Type: page
*/

$jumbotronLinks = array(
  "Power of Speaking Events" => "#power-of-speaking",
  "About Whitney Johnson" => "#about-whitney-johnson",
  "Speaking Topics" => "#speaking-topics",
  "Contact Us" => "#contactUs",
);
$iconLinksOpts = array(
  "headline" => "Power of Whitney's Speaking Events", 
  "tagline" => "Audiences are left informed and inspired on how to step back from who they are, to slingshot into who they want to be.",
  "links" => array(
    array("icon-src" => "/src/assets/images/icons/customized.png", "icon-width" => "78.5", "icon-height" => "87", "title" => "Customized", "info" => "We work closely with you to tailor the event to your needs."),
    array("icon-src" => "/src/assets/images/icons/focused.png", "icon-width" => "86", "icon-height" => "87", "title" => "Focused", "info" => "Attendees will clearly see where they are on their S Curve growth journey."),
    array("icon-src" => "/src/assets/images/icons/empowering.png", "icon-width" => "70", "icon-height" => "87", "title" => "Empowering", "info" => "Participants will walk away with 1-2 specific things they can do to grow smarter."),
  ),
  "spacing" => "",
  "info-width" => "w-[262px]",
  "cta-label" => "Book Whitney Johnson"
);
$xSellOpts = array(
  "title" => "Continue the momentum after a speaking event",
  "tagline" => "Combine the power of a speaking event.",
  "cards" => array(
    array("src" => "template-parts/components/xSells/blocks/takeTheAssessment"),
    array("src" => "template-parts/components/xSells/blocks/findACoach"),
    array("src" => "template-parts/components/xSells/blocks/scheduleAWorkshop")
  )
);
?>

<?php get_header(); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/speaking' ); ?>
  <?php get_template_part( 'template-parts/components/jumbotrons/links', null, $jumbotronLinks); ?>
  <div id="power-of-speaking" class="py-24">
    <?php get_template_part( 'template-parts/components/infoBlocks/iconLinks', null, $iconLinksOpts ); ?>
  </div>
  <?php get_template_part( 'template-parts/pages/services/speaking/whatMakesWhitneyDifferent' ); ?>
  <?php get_template_part( 'template-parts/components/testimonials/services/speaking' ); ?>
  <?php get_template_part( 'template-parts/pages/services/speaking/keynotes' ); ?>
  <?php get_template_part( 'template-parts/pages/services/speaking/speaking-topics' ); ?>
  <?php get_template_part( 'template-parts/components/xSells/basic', null, $xSellOpts ); ?>
<?php get_footer(); ?>