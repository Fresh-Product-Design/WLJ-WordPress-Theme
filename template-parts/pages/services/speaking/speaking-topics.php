<?php require get_template_directory() . "/lang/servicesSpeaking.php"; ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<div id="speaking-topics" class="content-container pb-24">
  <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => $lang["speakingTopics"]["title"], "text-size" => "text-2xl md:text-3xl lg:text-4xl", "addt-styles" => "mb-6 font-bold")); ?>
  <p class="text-[#4d4d4d] text-lg mb-6"><?php esc_html_e($lang["speakingTopics"]["text-one"]); ?></p>
  <p class="text-[#4d4d4d] text-lg mb-6"><?php esc_html_e($lang["speakingTopics"]["text-two"]); ?></p>
  <?php get_template_part( 'template-parts/components/buttons/hollow-download', null, array('label' => $lang["speakingTopics"]["downloadText"], 'href' => $LINKS["speaking-packet-dl"], "addt-styles" => "mb-12")); ?>
  <!-- Video Examples -->
  <div class="bg-white p-8 space-y-8 rounded">
    <p class="font-bold text-2xl"><?php esc_html_e($lang["speakingTopics"]["examplesTitle"]); ?></p>
    <!-- Disrupt Yourself -->
    <div class="flex flex-col md:flex-row border-b border-[#d4d4d4] pb-8">
      <div class="mb-8 md:mb-0 md:mr-8 flex-shrink-0">
        <div class="relative">
          <img class="w-full md:w-[320px] lg:w-[500px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/video-disrupt-yourself.png') ?>" alt="" width="500" height="274" />
        </div>
      </div>
      <div>
        <h4 class="text-xl font-bold"><?php esc_html_e($lang["topicOne"]["headline"]); ?></h4>
        <h5 class="text-lg mb-4"><?php esc_html_e($lang["topicOne"]["tagline"]); ?></h5>
        <div class="space-y-4">
          <p class="text-[#4d4d4d]"><?php esc_html_e($lang["topicOne"]["text-one"]); ?></p>
          <p class="text-[#4d4d4d]"><?php esc_html_e($lang["topicOne"]["text-two"]); ?></p>
          <a class="group flex items-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Speaking">
            <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["topicOne"]["ctaText"]); ?></span>
            <span class="material-icons-round mr">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>
    <!-- Build an A Team -->
    <div class="flex flex-col md:flex-row border-b border-[#d4d4d4] pb-8">
      <div class="mb-8 md:mb-0 md:mr-8 flex-shrink-0">
        <div class="relative">
          <img class="w-full md:w-[320px] lg:w-[500px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/video-build-an-a-team.png') ?>" alt="" width="500" height="274" />
        </div>
      </div>
      <div class="space-y-4">
        <h4 class="text-xl font-bold"><?php esc_html_e($lang["topicTwo"]["headline"]); ?></h4>
        <p class="text-[#4d4d4d]"><?php esc_html_e($lang["topicTwo"]["text"]); ?></p>
        <a class="group flex items-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Speaking">
          <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["topicTwo"]["ctaText"]); ?></span>
          <span class="material-icons-round mr">arrow_forward</span>
        </a>
      </div>
    </div>
    <!-- Smart Growth -->
    <div class="flex flex-col md:flex-row border-b border-[#d4d4d4] pb-8">
      <div class="mb-8 md:mb-0 md:mr-8 flex-shrink-0">
        <div class="relative">
          <img class="w-full md:w-[320px] lg:w-[500px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/video-smart-growth.png') ?>" alt="" width="500" height="274" />
        </div>
      </div>
      <div class="space-y-4">
        <h4 class="text-xl font-bold"><?php esc_html_e($lang["topicThree"]["headline"]); ?></h4>
        <p class="text-[#4d4d4d]"><?php esc_html_e($lang["topicThree"]["text-one"]); ?></p>
        <p class="text-[#4d4d4d]"><?php esc_html_e($lang["topicThree"]["text-two"]); ?></p>
        <a class="group flex items-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Speaking">
          <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["topicThree"]["ctaText"]); ?></span>
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
        <h4 class="text-xl font-bold"><?php esc_html_e($lang["topicFour"]["headline"]); ?></h4>
        <p class="text-[#4d4d4d]"><?php esc_html_e($lang["topicFour"]["text"]); ?></p>
        <a class="group flex items-center font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Speaking">
          <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["topicFour"]["ctaText"]); ?></span>
          <span class="material-icons-round mr">arrow_forward</span>
        </a>
      </div>
    </div>
  </div>
  <div class="flex flex-col md:flex-row justify-center text-center pt-6 lg:pt-10">
    <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => $lang["speakingTopics"]["bottomCtaText"], "js-hook" => "fireContactModal", "contact-reason" => "Speaking", "addt-styles" => "md:mr-4 mt-4")); ?>
    <?php get_template_part( 'template-parts/components/buttons/hollow-download', null, array('label' => $lang["speakingTopics"]["downloadText"], 'href' => $LINKS["speaking-packet-dl"], "addt-styles" => "mt-4")); ?>
  </div>
</div>