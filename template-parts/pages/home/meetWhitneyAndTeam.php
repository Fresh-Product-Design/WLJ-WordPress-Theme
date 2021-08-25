<?php require get_template_directory() . "/lang/front-page.php" ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<div class="content-container flex flex-col md:flex-row py-24">
  <img class="mx-auto mb-8 md:mb-0 md:ml-0 md:mr-10 md:w-[225px] md:h-[225px] lg:w-[390px] lg:h-[390px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/staff/whitneyJohnson.png') ?>" alt="" width="390" height="390" />
  <div class="flex-grow text-[#4d4d4d] text-lg">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["meetWhitney"]["title"], "mb" => "mb-8", "align" => "text-left")); ?>
    <p class="mb-8"><?php esc_html_e($lang["meetWhitney"]["text"]); ?></p>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => $lang["meetWhitney"]["buttonText"], 'href' => $LINKS["about-us"])); ?>
  </div>
</div>