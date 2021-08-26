<?php require get_template_directory() . "/lang/servicesWorkshops.php"; ?>

<div id="workshop-topics" class="content-container py-24">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["workshopTopics"]["title"], "mb" => "mb-2")); ?>
  <p class="text-lg text-[#4d4d4d] text-center mb-10"><?php esc_html_e($lang["workshopTopics"]["tagline"]); ?></p>
  <div class="sm:grid sm:grid-cols-2 sm:grid-rows-2 xl:grid-cols-4 xl:grid-rows-1 space-y-4 sm:space-y-0 gap-4 mb-24">
    <!-- Disrupt Yourself -->
    <div class="sm:flex flex-col bg-white py-8 px-6 shadow-card-sm rounded">
      <h4 class="font-bold text-xl"><?php esc_html_e($lang["topicOne"]["title"]); ?></h4>
      <h5 class="text-lg"><?php esc_html_e($lang["topicOne"]["tagline"]); ?></h5>
      <hr class="h-[3px] w-[54px] bg-[#F5D22D] mt-3 mb-6" />
      <div class="sm:flex-grow space-y-6">
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicOne"]["bulletOne"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicOne"]["bulletTwo"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicOne"]["bulletThree"]); ?></p>
      </div>
      <a class="group flex items-center pt-10 font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Workshops">
        <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["topicOne"]["ctaText"]); ?></span>
        <span class="material-icons-round mr">arrow_forward</span>
      </a>
    </div>
    <!-- Building A Teams -->
    <div class="sm:flex flex-col bg-white py-8 px-6 shadow-card-sm rounded">
      <h4 class="font-bold text-xl"><?php esc_html_e($lang["topicTwo"]["title"]); ?></h4>
      <h5 class="text-lg"><?php esc_html_e($lang["topicTwo"]["tagline"]); ?></h5>
      <hr class="h-[3px] w-[54px] bg-[#F5D22D] mt-3 mb-6" />
      <div class="sm:flex-grow space-y-6">
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicTwo"]["bulletOne"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicTwo"]["bulletTwo"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicTwo"]["bulletThree"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicTwo"]["bulletFour"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicTwo"]["bulletFive"]); ?></p>
      </div>
      <a class="group flex items-center pt-10 font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Workshops">
        <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["topicTwo"]["ctaText"]); ?></span>
        <span class="material-icons-round mr">arrow_forward</span>
      </a>
    </div>
    <!-- Leading Through Change -->
    <div class="sm:flex flex-col bg-white py-8 px-6 shadow-card-sm rounded">
      <h4 class="font-bold text-xl"><?php esc_html_e($lang["topicThree"]["title"]); ?></h4>
      <h5 class="text-lg"><?php esc_html_e($lang["topicThree"]["tagline"]); ?></h5>
      <hr class="h-[3px] w-[54px] bg-[#F5D22D] mt-3 mb-6" />
      <div class="sm:flex-grow space-y-6">
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicThree"]["bulletOne"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicThree"]["bulletTwo"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicThree"]["bulletThree"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicThree"]["bulletFour"]); ?></p>
      </div>
      <a class="group flex items-center pt-10 font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Workshops">
        <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["topicThree"]["ctaText"]); ?></span>
        <span class="material-icons-round mr">arrow_forward</span>
      </a>
    </div>
    <!-- Smart Growth -->
    <div class="sm:flex flex-col bg-white py-8 px-6 shadow-card-sm rounded">
      <h4 class="font-bold text-xl"><?php esc_html_e($lang["topicFour"]["title"]); ?></h4>
      <h5 class="text-lg"><?php esc_html_e($lang["topicFour"]["tagline"]); ?></h5>
      <hr class="h-[3px] w-[54px] bg-[#F5D22D] mt-3 mb-6" />
      <div class="sm:flex-grow space-y-6">
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicFour"]["bulletOne"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicFour"]["bulletTwo"]); ?></p>
        <p class="bg-plus-blue bg-workshop-plus-fix bg-no-repeat pl-8"><?php esc_html_e($lang["topicFour"]["bulletThree"]); ?></p>
      </div>
      <a class="group flex items-center pt-10 font-bold text-[#017381] hover:text-[#143b3f] cursor-pointer" data-js="fireContactModal" data-reason="Workshops">
        <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["topicFour"]["ctaText"]); ?></span>
        <span class="material-icons-round mr">arrow_forward</span>
      </a>
    </div>
  </div>
  <?php get_template_part( 'template-parts/pages/services/whatIsSCurveInsight' ); ?>
</div>