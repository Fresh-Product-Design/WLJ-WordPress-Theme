<?php require_once get_template_directory() . "/template-parts/components/tabs/tab-utils.php" ?>

<?php
  $tabbedContentContainerClasses = "";
  $tabbedContentContainerClasses .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>

<div class="<?php esc_attr_e($tabbedContentContainerClasses); ?>" data-js="tabbedContent" data-tab-type="linkList">
  <div class="flex flex-col md:flex-row md:justify-between bg-white p-8 rounded">
    <div class="flex flex-col flex-shrink-0 md:w-[325px] lg:w-auto pb-8 md:pb-0 md:pr-8 space-y-4">
      <?php
        foreach($args["tabs"] as $index => $tab) {
      ?>
          <button class="<?php getLinkListTabClasses($index) ?>" data-tab="<?php esc_attr_e($tab["key"]); ?>">
            <span class="flex-grow pr-4 lg:pr-8 group-hover:underline"><?php esc_html_e($tab["label"]); ?></span>
            <span class="material-icons-round">chevron_right</span>
          </button>
      <?php
        }
      ?>
    </div>
    <?php
      foreach($args["tabs"] as $index => $tab) {
    ?>
      <div class="<?php getContentClasses($index); ?>" data-tab-content="<?php esc_attr_e($tab["key"]); ?>">
        <?php get_template_part( $tab["content-src"] ); ?>
      </div>
    <?php
      }
    ?>
  </div>
</div>