<?php
/*
  Template Name: Services - Speaking
  Template Post Type: page
*/

$jumbotronLinks = array(
  "Power of Speaking Events" => "#power-of-speaking",
  "About Whitney Johnson" => "#about-whitney-johnson",
  "Speaking Topics" => "#speaking-topics",
  "Contact Us" => "#contact",
);
$iconLinksOpts = array(
  "headline" => "Power of Whitney's Speaking Events", 
  "tagline" => "Audiences are left inspired, informedand ready to take new actions for personal and organizational growth.",
  "links" => array(
    array("icon-src" => "/src/assets/images/icons/customized.png", "icon-width" => "78.5", "icon-height" => "87", "title" => "Customized", "info" => "We ensure get the absolute most out of each event."),
    array("icon-src" => "/src/assets/images/icons/focused.png", "icon-width" => "86", "icon-height" => "87", "title" => "Focused", "info" => "Attendees will clearly see how the S Curve applies to them."),
    array("icon-src" => "/src/assets/images/icons/empowering.png", "icon-width" => "70", "icon-height" => "87", "title" => "Empowering", "info" => "People gain new tools to immediately implement."),
  ),
  "spacing" => "",
  "info-width" => "w-[262px]",
  "cta-label" => "Book Whitney Johnson"
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
  <?php get_template_part( 'template-parts/components/xSells/continueMomentum' ); ?>
<?php get_footer(); ?>