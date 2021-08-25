<?php require get_template_directory() . "/lang/aboutWhitneyJohnson.php" ?>

<div class="content-container py-24">
  <div class="bg-white py-12 text-center rounded md:shadow-behind">
    <div class="relative px-4 sm:px-16" data-js="multipleQuotes">
      <!-- Prev Arrow -->
      <span class="absolute top-1/2 left-0 sm:left-8 -translate-y-1/2 text-2xl text-[#017381] hover:text-[#2a5a61] cursor-pointer material-icons-round" data-quote-prev>arrow_back_ios</span>
      <!-- Quotes -->
      <div data-quote>
        <p class="inline-block max-w-[1050px] bg-quote-yellow bg-left-top bg-no-repeat mx-6 py-3 mb-2 text-lg"><?php esc_html_e($lang["testimonials"]["first"]["quote"]); ?></p>
        <p class="font-bold"><?php esc_html_e($lang["testimonials"]["first"]["name"]); ?></p>
        <hr class="h-[2px] w-[89px] mx-auto my-1 bg-[#F5D22D]" />
        <p><?php esc_html_e($lang["testimonials"]["first"]["title"]); ?></p>
      </div>
      <div class="hidden" data-quote>
        <p class="inline-block max-w-[1050px] bg-quote-yellow bg-left-top bg-no-repeat mx-6 py-3 mb-2 text-lg"><?php esc_html_e($lang["testimonials"]["second"]["quote"]); ?></p>
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
</div>