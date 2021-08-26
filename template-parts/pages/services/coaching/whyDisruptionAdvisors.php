<?php require get_template_directory() . "/lang/servicesCoaching.php"; ?>

<div class="content-container py-24">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["whyDisruptionAdvisors"]["title"], "mb" => "mb-16")); ?>
  <!-- Why Disruption Advisors Grid -->
  <?php get_template_part( 'template-parts/pages/services/coaching/comparisonGrid' ); ?>
  <!-- What is the S Curve Insight Platform? -->
  <?php get_template_part( 'template-parts/pages/services/whatIsSCurveInsight' ); ?>
</div>