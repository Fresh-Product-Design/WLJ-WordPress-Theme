<?php require get_template_directory() . "/link-configs.php" ?>

<footer id="footer" class="w-full bg-white py-10 lg:pt-20" role="contentinfo">
  <div class="
    content-container flex flex-col pb-10 md:pb-16 space-y-10
    lg:flex-row lg:justify-between lg:space-y-0
  ">
    <!-- Social Links -->
    <div class="text-center lg:text-left">
      <img class="block mb-6 mx-auto lg:mx-0" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/branding/footerLogo.png') ?>" alt="" width="159" height="37" />
      <div class="flex justify-center lg:justify-start space-x-4">
        <a href="#" target="_blank" rel="noopener"><img src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/icons/twitter.png') ?>" alt="" width="21" height="20" /></a>
        <a href="#" target="_blank" rel="noopener"><img src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/icons/instagram.png') ?>" alt="" width="21" height="20" /></a>
        <a href="#" target="_blank" rel="noopener"><img src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/icons/linkedin.png') ?>" alt="" width="21" height="20" /></a>
      </div>
    </div>
    <!-- Solution Links -->
    <div class="text-center lg:text-left">
      <h4 class="font-bold mb-2 lg:mb-8">Solutions</h4>
      <div class="flex flex-row flex-wrap justify-center lg:justify-start lg:flex-col text-sm text-[#017381] space-x-2 lg:space-x-0 lg:space-y-4">
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["services"]["s-curve-insight"]); ?>">S Curve Insight</a>
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["services"]["coaching"]); ?>">Coaching</a>
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["services"]["certification"]); ?>">Certification</a>
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["services"]["speaking"]); ?>">Speaking</a>
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["services"]["workshops"]); ?>">Workshops</a>
      </div>
    </div>
    <!-- Resource Links -->
    <div class="text-center lg:text-left">
      <h4 class="font-bold mb-2 lg:mb-8">Resources</h4>
      <div class="flex flex-row flex-wrap justify-center lg:justify-start lg:flex-col text-sm text-[#017381] space-x-2 lg:space-x-0 lg:space-y-4">
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["podcast"]); ?>">Podcast</a>
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["books"]); ?>">Books</a>
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["newsletter"]); ?>">Newsletter</a>
      </div>
    </div>
    <!-- About U Links -->
    <div class="text-center lg:text-left">
      <h4 class="font-bold mb-2 lg:mb-8">About Us</h4>
      <div class="flex flex-row flex-wrap justify-center lg:justify-start lg:flex-col text-sm text-[#017381] space-x-2 lg:space-x-0 lg:space-y-4">
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["whitney-johnson"]); ?>">Whitney Johnson</a>
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["about-us"]."#team"); ?>">Our Team</a>
        <a class="mt-2 lg:mt-0 hover:underline" href="<?php esc_html_e($LINKS["coaches"]); ?>">Our Coaches</a>
      </div>
    </div>
    <!-- Vertical Divider (So that justify-between gives even space on both sides) -->
    <div class="hidden lg:block self-stretch w-px bg-[#BFBFBF]"></div>
    <!-- Stay Connected -->
    <div class="text-center lg:text-left">
      <h4 class="font-bold mb-4 lg:mb-8">Stay Connected</h4>
      <p class="w-full md:w-[300px] text-[14px] mb-6 mx-auto lg:mx-0">Indispensable learnings, research, and articles help you climb the S Curve of Learning.</p>
      <?php get_template_part( 'template-parts/components/captures/emailAddress' ); ?>
    </div>
  </div>
  <p class="text-center space-y-2 md:space-y-0 md:space-x-1 text-sm">
    <span class="block md:inline">&copy; Disruption Advisors. All rights reserved</span>
    <span class="hidden md:inline">|</span>
    <a href="<?php esc_html_e($LINKS["terms-of-use"]); ?>" target="_blank" rel="noopener" class="block md:inline font-semibold text-[#017381] hover:underline">Terms of Use</a>
    <span class="hidden md:inline">|</span>
    <a href="<?php esc_html_e($LINKS["privacy-policy"]); ?>" target="_blank" rel="noopener" class="block md:inline font-semibold text-[#017381] hover:underline">Privacy Policy</a>
  </p>
</footer>