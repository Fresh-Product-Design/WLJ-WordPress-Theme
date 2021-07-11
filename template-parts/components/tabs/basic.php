<?php require_once get_template_directory() . "/template-parts/components/tabs/tab-utils.php" ?>

<?php
  $tabbedContentContainerClasses = "content-container";
  $tabbedContentContainerClasses .= array_key_exists("addt-styles", $args) ? " ".$args["addt-styles"] : "";
?>

<div class="<?php esc_attr_e($tabbedContentContainerClasses); ?>" data-js="tabbedContent" data-tab-type="basic">
  <div class="flex flex-col sm:flex-row bg-white sm:mb-2 rounded-tl rounded-tr">
    <?php
      foreach($args["tabs"] as $index => $tab) {
    ?>
        <button class="<?php getBasicTabClasses($index); ?>" data-tab="<?php esc_attr_e($tab["key"]); ?>"><?php esc_html_e($tab["label"]); ?></button>
    <?php
      }
    ?>
  </div>
  <div class="bg-white p-10 rounded-bl rounded-br">
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