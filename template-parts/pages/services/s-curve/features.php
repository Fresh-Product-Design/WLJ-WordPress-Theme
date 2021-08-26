<?php require get_template_directory() . "/lang/servicesSCurveInsight.php"; ?>

<div class="content-container mb-24 text-[#4d4d4d]">
  <?php get_template_part( 'template-parts/components/headers/basic-strikethrough', null, array("label" => $lang["features"]["headline"], "bg-color" => "bg-[#F6F6F6]", "line-color" => "bg-black")); ?>
  <?php get_template_part( 'template-parts/pages/services/s-curve/feature-s-curve'); ?>
  <?php get_template_part( 'template-parts/pages/services/s-curve/feature-seven-accelerants'); ?>
  <?php get_template_part( 'template-parts/pages/services/s-curve/feature-team-culture-assessment'); ?>
</div>