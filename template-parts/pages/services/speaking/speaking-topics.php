<?php require get_template_directory() . "/link-configs.php" ?>

<div id="speaking-topics" class="content-container pb-24">
  <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => "Always customized to your organization's needs.", "text-size" => "text-2xl md:text-3xl lg:text-4xl", "addt-styles" => "mb-6 font-bold")); ?>
  <p class="text-[#4d4d4d] text-lg mb-6">Each keynote (live or virtual) is rigorously tailored to engage, inspire and empower your audience.</p>
  <p class="text-[#4d4d4d] text-lg mb-6">Browse our speaking brochure to learn more.</p>
  <?php get_template_part( 'template-parts/components/buttons/hollow-download', null, array('label' => 'View the Speaking Brochure', 'href' => $LINKS["speaking-packet-dl"], "addt-styles" => "mb-12")); ?>
  <!-- Video Examples -->
  <div class="bg-white p-8 space-y-8 rounded">
    <p class="font-bold text-2xl">Video Examples</p>
    <!-- Disrupt Yourself -->
    <div class="flex flex-col md:flex-row border-b border-[#BFBFBF] pb-8 lg:border-none lg:pb-0">
      <div class="mb-8 md:mb-0 md:mr-8 flex-shrink-0">
        <div class="relative">
          <img class="w-full md:w-[320px] lg:w-[500px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/video-disrupt-yourself.png') ?>" alt="" width="500" height="274" />
        </div>
      </div>
      <div class="space-y-4">
        <h4 class="text-xl font-bold">Disrupt Yourself</h4>
        <p class="text-[#4d4d4d]">We are living in an era of accelerating disruption- managing and mastering the S Curve is a requisite skill. If you want to be successful in unexpected ways, follow your own disruptive path. Dare to innovate. Do something astonishing. Disrupt yourself.</p>
        <a class="group flex items-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal">
          <span class="mr-1 group-hover:underline">Inquire Now</span>
          <span class="material-icons-round mr">arrow_forward</span>
        </a>
      </div>
    </div>
    <!-- Build an A Team -->
    <div class="flex flex-col md:flex-row border-b border-[#BFBFBF] pb-8 lg:border-none lg:pb-0">
      <div class="mb-8 md:mb-0 md:mr-8 flex-shrink-0">
        <div class="relative">
          <img class="w-full md:w-[320px] lg:w-[500px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/video-build-an-a-team.png') ?>" alt="" width="500" height="274" />
        </div>
      </div>
      <div class="space-y-4">
        <h4 class="text-xl font-bold">Build an A Team</h4>
        <p class="text-[#4d4d4d]">We all want opportunities to learn, experiment, and grow in our jobs. The best bosses know this and how to make it happen through thoughtful role design and challenge. The result is a team that learns how to thrive, no matter what the industry throws at them.</p>
        <a class="group flex items-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal">
          <span class="mr-1 group-hover:underline">Inquire Now</span>
          <span class="material-icons-round mr">arrow_forward</span>
        </a>
      </div>
    </div>
    <!-- Smart Growth -->
    <div class="flex flex-col md:flex-row border-b border-[#BFBFBF] pb-8 lg:border-none lg:pb-0">
      <div class="mb-8 md:mb-0 md:mr-8 flex-shrink-0">
        <div class="relative">
          <img class="w-full md:w-[320px] lg:w-[500px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/video-smart-growth.png') ?>" alt="" width="500" height="274" />
        </div>
      </div>
      <div class="space-y-4">
        <h4 class="text-xl font-bold">Smart Growth</h4>
        <p class="text-[#4d4d4d]">Faucibus eget quam interdum pellentesque pretium nisl tristique eget urna aliquam ut lacus mauris maecenas tellus ornare et nec vitae consequat neque maecenas viverra quis morbi tortor vel sollicitudin ornare scelerisque egestas at aliquet viverra faucibus proin nunc euismod est</p>
        <a class="group flex items-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal">
          <span class="mr-1 group-hover:underline">Inquire Now</span>
          <span class="material-icons-round mr">arrow_forward</span>
        </a>
      </div>
    </div>
    <!-- The Next Step -->
    <div class="flex flex-col md:flex-row">
      <div class="mb-8 md:mb-0 md:mr-8 flex-shrink-0">
        <div class="relative">
          <img class="w-full md:w-[320px] lg:w-[500px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/video-next-step.png') ?>" alt="" width="500" height="274" />
        </div>
      </div>
      <div class="space-y-4">
        <h4 class="text-xl font-bold">The Next Step: Lessons on embracing change and continuous improvement</h4>
        <p class="text-[#4d4d4d]">Learn to leverage disruption and build momentum along your S Curveof Learning by leveraging the Seven Accelerants of Growth. Feel confident and move toward continuous improvement rather thansuccumbing to the chaos of change. Whatever the challenges, it is the individual that is the fundamental unit of growth.</p>
        <a class="group flex items-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal">
          <span class="mr-1 group-hover:underline">Inquire Now</span>
          <span class="material-icons-round mr">arrow_forward</span>
        </a>
      </div>
    </div>
  </div>
  <div class="flex flex-col md:flex-row justify-center text-center pt-6 lg:pt-10">
    <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Book Whitney Johnson", "js-hook" => "fireContactModal", "addt-styles" => "md:mr-4 mt-4")); ?>
    <?php get_template_part( 'template-parts/components/buttons/hollow-download', null, array('label' => "View the Speaking Brochure", 'href' => $LINKS["speaking-packet-dl"], "addt-styles" => "mt-4")); ?>
  </div>
</div>