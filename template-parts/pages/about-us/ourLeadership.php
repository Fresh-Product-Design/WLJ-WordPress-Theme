<?php require get_template_directory() . "/lang/aboutUs.php" ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<div id="leadership" class="bg-white py-24">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["leadership"]["title"])); ?>
    <div class="flex flex-col md:flex-row mb-12 lg:mb-10">
      <img class="mx-auto mb-4 md:mb-0 md:ml-0 md:mr-10 md:w-[225px] md:h-[225px] lg:w-[374px] lg:h-[374px] h-auto" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/staff/wjLeadership.jpg') ?>" alt="" width="374" height="374" />
      <div class="md:flex-shrink">
        <h4 class="text-2xl font-bold mb-2">Whitney Johnson</h4>
        <p class="text-[#4d4d4d] text-lg mb-8"><?php esc_html_e($lang["leadership"]["whitneyTitle"]); ?></p>
        <p class="text-[#4d4d4d] mb-8"><?php esc_html_e($lang["leadership"]["whitneyText"]); ?></p>
        <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', 'href' => $LINKS["whitney-johnson"])); ?>
      </div>
    </div>
    <div class="flex flex-col md:flex-row">
      <img class="mx-auto mb-4 md:mb-0 md:ml-0 md:mr-10 md:w-[225px] md:h-[220px] lg:w-[374px] lg:h-[350px] h-auto" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/staff/amyhumble.jpg') ?>" alt="" width="374" height="350" />
      <div class="md:flex-shrink">
        <h4 class="text-2xl font-bold mb-2">Amy Humble</h4>
        <p class="text-[#4d4d4d] text-lg mb-8"><?php esc_html_e($lang["leadership"]["amyTitle"]); ?></p>
        <p class="text-[#4d4d4d]"><?php esc_html_e($lang["leadership"]["amyText"]); ?></p>
      </div>
    </div>
  </div>
</div>