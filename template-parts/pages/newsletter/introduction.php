<?php require get_template_directory() . "/lang/newsletter.php"; ?>

<div class="content-container py-24">
  <div class="flex flex-col md:flex-row items-center justify-between mb-10">
    <p class="order-2 md:order-1 max-w-[750px] text-xl text-[#4d4d4d] md:mr-8"><?php esc_html_e($lang["introduction"]["tagline"]); ?></p>
    <div class="order-1 md:order-2 bg-white text-center p-8 mb-10 md:mb-0 shadow-behind rounded-2xl">
      <h4 class="text-xl font-bold mb-4"><?php esc_html_e($lang["receiveNewsletter"]["title"]); ?></h4>
      <div class="lg:w-80 xl:w-96"><script async data-uid="97ad73f778" src="https://wlj-advisors-llc.ck.page/97ad73f778/index.js"></script></div>
      <p class="text-[#4d4d4d]"><?php esc_html_e($lang["receiveNewsletter"]["text"]); ?></p>
    </div>
  </div>
  <hr class="h-[2px] w-[56px] bg-[#017381] mb-10" />
  <p class="text-lg text-[#4d4d4d] mb-10"><?php esc_html_e($lang["introduction"]["text-one"]); ?></p>
  <p class="text-lg text-[#4d4d4d] mb-10"><?php esc_html_e($lang["introduction"]["text-two"]); ?></p>
  <p class="text-lg text-[#4d4d4d]"><?php esc_html_e($lang["introduction"]["text-three"]); ?></p>
</div>