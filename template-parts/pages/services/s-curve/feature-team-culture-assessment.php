<?php require get_template_directory() . "/lang/servicesSCurveInsight.php"; ?>
<?php
  $iconLinksOpts = array(
    "remove-line" => true,
    "links" => array(
      array("icon-src" => "/src/assets/images/icons/connected@3x.png", "icon-width" => "87", "icon-height" => "87", "title" => $lang["features"]["culture"]["connected"]["title"], "info" => $lang["features"]["culture"]["connected"]["text"]),
      array("icon-src" => "/src/assets/images/icons/conducive@3x.png", "icon-width" => "87", "icon-height" => "87", "title" => $lang["features"]["culture"]["conducive"]["title"], "info" => $lang["features"]["culture"]["conducive"]["text"]),
      array("icon-src" => "/src/assets/images/icons/nurturing@3x.png", "icon-width" => "86", "icon-height" => "87", "title" => $lang["features"]["culture"]["nurturing"]["title"], "info" => $lang["features"]["culture"]["nurturing"]["text"]),
      array("icon-src" => "/src/assets/images/icons/overcoming@3x.png", "icon-width" => "69", "icon-height" => "87", "title" => $lang["features"]["culture"]["resilience"]["title"], "info" => $lang["features"]["culture"]["resilience"]["text"]),
    )
  ); 
?>
<div id="culture" class="text-left mb-11">
  <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => $lang["features"]["culture"]["title"], "addt-styles" => "mb-6 font-bold")); ?>
  <p class="text-lg mb-10"><?php esc_html_e($lang["features"]["culture"]["text"]); ?></p>
  <?php get_template_part( 'template-parts/components/infoBlocks/iconLinks', null, $iconLinksOpts ); ?>
</div>