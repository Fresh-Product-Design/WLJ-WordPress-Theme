<?php require get_template_directory() . "/lang/servicesCoaching.php"; ?>

<div class="content-container pb-24">
  <div class="bg-white py-12 mb-8 text-center rounded md:shadow-behind">
    <div class="relative px-4 sm:px-16" data-js="multipleQuotes">
      <!-- Prev Arrow -->
      <span class="absolute top-1/2 left-0 sm:left-8 -translate-y-1/2 text-2xl text-[#017381] hover:text-[#2a5a61] cursor-pointer material-icons-round" data-quote-prev>arrow_back_ios</span>
      <!-- Quotes -->
      <div data-quote>
        <p class="inline-block max-w-[1050px] bg-quote-yellow bg-left-top bg-no-repeat mx-6 py-3 mb-3 text-lg"><?php esc_html_e($lang["testimonials"]["first"]["quote"]); ?></p>
        <p class="font-bold"><?php esc_html_e($lang["testimonials"]["first"]["name"]); ?></p>
        <hr class="h-[2px] w-[89px] mx-auto my-1 bg-[#F5D22D]" />
        <p><?php esc_html_e($lang["testimonials"]["first"]["title"]); ?></p>
      </div>
      <div class="hidden" data-quote>
        <p class="inline-block max-w-[1050px] bg-quote-yellow bg-left-top bg-no-repeat mx-6 py-3 mb-3 text-lg"><?php esc_html_e($lang["testimonials"]["second"]["quote"]); ?></p>
        <p class="font-bold"><?php esc_html_e($lang["testimonials"]["second"]["name"]); ?></p>
        <hr class="h-[2px] w-[89px] mx-auto my-1 bg-[#F5D22D]" />
        <p><?php esc_html_e($lang["testimonials"]["second"]["title"]); ?></p>
      </div>
      <!-- Active Circles -->
      <div class="space-x-1 mt-4" data-quote-circles></div>
      <!-- Next Arrow -->
      <span class="absolute top-1/2 right-0 sm:right-8 -translate-y-1/2 text-2xl text-[#017381] hover:text-[#2a5a61] cursor-pointer material-icons-round" data-quote-next>arrow_forward_ios</span>
    </div>
  </div>
  <div class="content-container flex items-center justify-evenly flex-wrap">
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/bbq-guys.png') ?>" alt="" width="133" height="53" />
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/weave.png') ?>" alt="" width="133" height="53" />
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/kraft-heinz.png') ?>" alt="" width="133" height="53" />
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/WGU.png') ?>" alt="" width="133" height="53" />
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/beautybio.png') ?>" alt="" width="133" height="53" />
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/BYU.png') ?>" alt="" width="133" height="53" />
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/cisco.png') ?>" alt="" width="133" height="53" />
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/unified.png') ?>" alt="" width="133" height="53" />
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/magma.png') ?>" alt="" width="133" height="86" />
    <img class="w-[133px] lg:w-[175px] pt-8 sm:pt-4 px-6 box-content" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/clients/worldbankgroup.png') ?>" alt="" width="133" height="53" />
  </div>
</div>