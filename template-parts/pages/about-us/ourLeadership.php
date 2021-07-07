<?php require get_template_directory() . "/link-configs.php" ?>

<div id="leadership" class="bg-white py-24">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Our Leadership")); ?>
    <div class="flex flex-col md:flex-row mb-12 lg:mb-10">
      <img class="mx-auto mb-4 md:mb-0 md:ml-0 md:mr-10 md:w-[225px] md:h-[225px] lg:w-[374px] lg:h-[374px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/staff/wjLeadership.jpg') ?>" alt="" width="374" height="374" />
      <div class="flex-shrink">
        <h4 class="text-2xl font-bold mb-2">Whitney Johnson</h4>
        <p class="text-[#4d4d4d] text-lg mb-8">CEO</p>
        <p class="text-[#4d4d4d] mb-8">Whitney is an innovation and disruption theorist and former award-winning Wall Street stock analyst. She is the author of the bestselling Build and A Team, the highly regarded Disrupt Yourself, and is a frequent contributor to Harvard Business Review and MIT Sloan Management Review.</p>
        <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Learn More', 'link' => $LINKS["whitney-johnson"])); ?>
      </div>
    </div>
    <div class="flex flex-col md:flex-row">
      <img class="mx-auto mb-4 md:mb-0 md:ml-0 md:mr-10 md:w-[225px] md:h-[225px] lg:w-[374px] lg:h-[374px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/staff/amyhumble.jpg') ?>" alt="" width="374" height="374" />
      <div class="flex-shrink">
        <h4 class="text-2xl font-bold mb-2">Amy Humble</h4>
        <p class="text-[#4d4d4d] text-lg mb-8">President</p>
        <p class="text-[#4d4d4d]">Amy Humble is a visionary, engaging strategic adviser, facilitator, and executive coach. Formerly Jim Collins’ chief of staff, author of Good to Great, she managed and conducted strategy and coaching sessions with CEOs from the FORTUNE 500, Inc. 5000, and leading social institutions in the world.</p>
      </div>
    </div>
  </div>
</div>