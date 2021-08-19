<!-- Note this component only supports up to 4 icon blocks. -->
<?php require_once get_template_directory() . "/template-parts/components/infoBlocks/info-block-util.php" ?>

<?php
$iconLinksContainerClasses = "content-container text-[#4d4d4d] text-center";
// Spacing (Margin/Padding) Check
$iconLinksContainerClasses .= array_key_exists("spacing", $args) ? " ".$args["spacing"] : " mb-24";

$infoClasses = "mb-4";
// Width Check
$infoClasses .= array_key_exists("info-width", $args) ? " ".$args["info-width"] : " w-[230px]";
?>

<div class="<?php esc_attr_e($iconLinksContainerClasses); ?>">
  <?php
  if (array_key_exists("headline", $args)) {
  ?>
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $args["headline"], "mb" => "mb-2")); ?>
    <p class="text-lg mb-16"><?php esc_html_e($args["tagline"]) ?></p>
  <?php
  }
  ?>
  <div class="
    flex flex-col space-y-16
    md:grid md:grid-cols-2 md:grid-rows-2 md:justify-items-center md:gap-y-16 md:space-y-0
    lg:flex lg:flex-row lg:flex-wrap lg:justify-between lg:grid-cols-none lg:grid-rows-none
  ">
    <?php
    foreach($args["links"] as $link) {
    ?>
      <div class="<?php getLinkStyles($link); ?>">
        <img class="mx-auto mb-4" src="<?php esc_attr_e(get_template_directory_uri() . $link["icon-src"]) ?>" alt="" width="<?php esc_attr_e($link["icon-width"]) ?>" height="<?php esc_attr_e($link["icon-height"]) ?>" />
        <h4 class="font-bold text-xl mb-4"><?php esc_html_e($link["title"]) ?></h4>
        <?php
        if (array_key_exists("remove-line", $args) === false || $args["remove-line"] !== true) {
        ?>
          <hr class="h-[4px] w-[40px] bg-[#F5D22D] mx-auto mb-4" />
        <?php
        }
        ?>
        <p class="<?php esc_attr_e($infoClasses); ?>"><?php esc_html_e($link["info"]) ?></p>
        <?php
        if (array_key_exists("href", $link)) {
        ?>
          <a class="group flex items-center justify-center font-bold text-[#017381] hover:text-[#143b3f]" href="<?php esc_attr_e($link["href"]); ?>">
            <span class="mr-1 group-hover:underline">Learn More</span>
            <span class="material-icons-round mr">arrow_forward</span>
          </a>
        <?php
        }
        ?>
      </div>
    <?php
    }
    ?>
  </div>
  <?php
  if (array_key_exists("cta-label", $args)) {
  ?>
    <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => $args["cta-label"], "js-hook" => "fireContactModal", "contact-reason" => $args["cta-reason"], "addt-styles" => "mx-auto mt-16")); ?>
  <?php
  }
  ?>
</div>