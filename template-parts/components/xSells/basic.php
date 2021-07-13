<div class="bg-[#fdea8c] bg-paper-curves py-24">
  <div class="content-container text-center">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $args["title"], "mb" => "mb-2")); ?>
    <p class="text-lg text-[#4d4d4d] mb-16"><?php esc_html_e($args["tagline"]) ?></p>
    <div class="flex flex-col space-y-6 md:inline-flex md:flex-row md:space-y-0 md:space-x-6 text-left">
      <?php
        foreach($args["cards"] as $card) {
          $opts = array_key_exists("opts", $card) ? $card["opts"] : array();
          get_template_part( $card["src"], null, $opts );
        }
      ?>
    </div>
  </div>
</div>