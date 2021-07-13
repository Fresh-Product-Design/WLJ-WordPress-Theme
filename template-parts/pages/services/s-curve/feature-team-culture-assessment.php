<?php
  $iconLinksOpts = array(
    "remove-line" => true,
    "links" => array(
      array("icon-src" => "/src/assets/images/icons/connected@3x.png", "icon-width" => "87", "icon-height" => "87", "title" => "Connected", "info" => "Vibrant connections are the difference between isolated individuals and a powerful team."),
      array("icon-src" => "/src/assets/images/icons/conducive@3x.png", "icon-width" => "87", "icon-height" => "87", "title" => "Conducive", "info" => "Teams only thrive and grow in a context with the right physical and emotional resources."),
      array("icon-src" => "/src/assets/images/icons/nurturing@3x.png", "icon-width" => "86", "icon-height" => "87", "title" => "Nuturing", "info" => "Management relationships that are open and invested in growth will nurture individuals and teams."),
      array("icon-src" => "/src/assets/images/icons/overcoming@3x.png", "icon-width" => "69", "icon-height" => "87", "title" => "Overcoming", "info" => "Successful teams have the spirit and resources to overcome the setbacks that inevitably come."),
    )
  ); 
?>
<div id="culture" class="text-left mb-11">
  <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => "Team Culture Assessment", "addt-styles" => "mb-6 font-bold")); ?>
  <p class="text-lg mb-10">The growth of individuals is strongly influenced by the culture of a team and organization. The S Curve Insight highlights the strengths and weaknesses of a culture, empowering leaders to intervene with confidence. These areas include:</p>
  <?php get_template_part( 'template-parts/components/infoBlocks/iconLinks', null, $iconLinksOpts ); ?>
</div>