<?php require get_template_directory() . "/link-configs.php" ?>

<?php if(is_front_page() === false) { ?>
  <div id="contactUs" class="content-container flex flex-col lg:flex-row py-24">
    <div class="flex flex-col">
      <div class="order-2 lg:order-1 pb-8 lg:pb-16 lg:mb-16 lg:border-b lg:border-[#BFBFBF]">
        <h2 class="text-2xl font-bold font-subhead tracking-widest mb-2 uppercase">Contact Us</h2>
        <p class="text-[#4d4d4d] max-w-[366px]">Fill out this form and a member of our team will follow up to create a customized plan for your high-growth organization.</p>
      </div>
      <div class="order-1 lg:order-2 pb-8 lg:pb-0">
        <h3 class="text-xl font-bold mb-2">Media &amp; Press Inquiries</h3>
        <p class="text-[#4d4d4d] max-w-[310px] mb-4">including requesting Whitney as a guest on your podcast</p>
        <?php get_template_part( "template-parts/components/buttons/hollow", null, array("label" => "Media & Press Inquiries", "link" => $LINKS["services"]["speaking"])); ?>
      </div>
    </div>
    <div class="lg:flex-grow">
      <?php get_template_part( "template-parts/components/captures/contactForm", null, array("classes" => "max-w-[608px] ml-auto") ); ?>
    </div>
  </div>
<?php } ?>