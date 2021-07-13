<div class="flex flex-col w-[280px] md:w-[235px] lg:w-[300px] xl:w-[350px] bg-white mx-auto md:mx-0 p-6 rounded shadow-card">
  <?php
  if(array_key_exists("img", $args) && $args["img"] !== false) {
  ?>
    <img class="w-full h-auto mb-8 rounded" src="<?php esc_attr_e(get_template_directory_uri() . $args["img"]) ?>" alt="" width="303" height="231" />
  <?php
  }
  ?>
  <h4 class="text-2xl font-bold mb-3"><?php esc_html_e($args["title"]) ?></h4>
  <p class="flex-grow max-w-[258px] text-[#4d4d4d] mb-6 md:mb-12"><?php esc_html_e($args["tagline"]) ?></p>
  <div>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', 'href' => $args["href"]) ); ?>
  </div>
</div>