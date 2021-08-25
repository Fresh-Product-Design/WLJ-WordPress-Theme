<?php require get_template_directory() . "/lang/aboutUs.php" ?>

<div class="content-container py-24">
  <div class="bg-white py-12 mb-8 text-center rounded md:shadow-behind">
    <p class="inline-block max-w-[1050px] bg-quote-yellow bg-left-top bg-no-repeat mx-6 py-3 mb-3 text-lg"><?php esc_html_e($lang["testimonial"]["quote"]); ?></p>
    <p class="font-bold"><?php esc_html_e($lang["testimonial"]["name"]); ?></p>
    <hr class="h-[2px] w-[89px] mx-auto my-1 bg-[#F5D22D]" />
    <p><?php esc_html_e($lang["testimonial"]["title"]); ?></p>
  </div>
</div>