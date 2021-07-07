<div class="flex items-center justify-center lg:justify-start">
  <input class="text-[14px] px-4 py-3 mr-4 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="email" placeholder="Your Email Address" />
  <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Sign Up", "js-hook" => "captureLead")); ?>
</div>