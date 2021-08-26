<?php require get_template_directory() . "/lang/servicesCoaching.php"; ?>

<div id="methodology" class="content-container py-24">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["methodology"]["title"], "mb" => "mb-2")); ?>
  <p class="max-w-[903px] text-[#4d4d4d] text-lg text-center mx-auto mb-16"><?php esc_html_e($lang["methodology"]["text"]); ?></p>
  <div class="
    flex flex-col space-y-16 mb-16
    md:grid md:grid-cols-2 md:grid-rows-2 md:justify-items-center md:gap-y-16 md:space-y-0
    lg:flex lg:flex-row lg:justify-between lg:grid-cols-none lg:grid-rows-none
  ">
    <div class="w-[285px] mx-auto md:mx-0 bg-check-blue bg-left-top bg-no-repeat pl-8">
      <p class="text-lg font-bold mb-2"><?php esc_html_e($lang["methodology"]["bulletOne-title"]); ?></p>
      <p><?php esc_html_e($lang["methodology"]["bulletOne-text"]); ?></p>
    </div>
    <div class="w-[285px] mx-auto md:mx-0 bg-check-blue bg-left-top bg-no-repeat pl-8">
      <p class="text-lg font-bold mb-2"><?php esc_html_e($lang["methodology"]["bulletTwo-title"]); ?></p>
      <p><?php esc_html_e($lang["methodology"]["bulletTwo-text"]); ?></p>
    </div>
    <div class="w-[285px] mx-auto md:mx-0 bg-check-blue bg-left-top bg-no-repeat pl-8">
      <p class="text-lg font-bold mb-2"><?php esc_html_e($lang["methodology"]["bulletThree-title"]); ?></p>
      <p><?php esc_html_e($lang["methodology"]["bulletThree-text"]); ?></p>
    </div>
    <div class="w-[285px] mx-auto md:mx-0 bg-check-blue bg-left-top bg-no-repeat pl-8">
      <p class="text-lg font-bold mb-2"><?php esc_html_e($lang["methodology"]["bulletFour-title"]); ?></p>
      <p><?php esc_html_e($lang["methodology"]["bulletFour-text"]); ?></p>
    </div>
  </div>
  <div class="relative flex flex-col lg:flex-row lg:block bg-white p-8 lg:mr-12 rounded-lg">
    <div class="hidden lg:block mb-8 lg:mb-0 text-center lg:absolute lg:-right-12 lg:top-4">
      <img class="inline w-[568px] h-[436px] xl:w-[401px] xl:h-[308px] border-4 border-white rounded-lg" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/findACoach.png') ?>" alt="" width="406" height="311">
    </div>
    <div class="lg:w-2/5 xl:w-2/3">
      <h4 class="font-subhead text-2xl font-bold text-black tracking-widest mb-4"><?php esc_html_e($lang["methodology"]["info-title"]); ?></h4>
      <div class="bg-plus-yellow bg-left-top bg-no-repeat pl-8 mb-4">
        <p class="text-[#4d4d4d] font-bold mb-1"><?php esc_html_e($lang["methodology"]["infoBulletOne-title"]); ?></p>
        <p><?php esc_html_e($lang["methodology"]["infoBulletOne-text"]); ?></p>
      </div>
      <div class="bg-plus-yellow bg-left-top bg-no-repeat pl-8 mb-4">
        <p class="text-[#4d4d4d] font-bold mb-1"><?php esc_html_e($lang["methodology"]["infoBulletTwo-title"]); ?></p>
        <p><?php esc_html_e($lang["methodology"]["infoBulletTwo-text"]); ?></p>
      </div>
      <div class="bg-plus-yellow bg-left-top bg-no-repeat pl-8 mb-4">
        <p class="text-[#4d4d4d] font-bold mb-1"><?php esc_html_e($lang["methodology"]["infoBulletThree-title"]); ?></p>
        <p><?php esc_html_e($lang["methodology"]["infoBulletThree-text"]); ?></p>
      </div>
      <a class="group inline-flex items-center justify-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Coaching">
        <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["methodology"]["infoCtaText"]); ?></span>
        <span class="material-icons-round mr">arrow_forward</span>
      </a>
    </div>
  </div>
</div>