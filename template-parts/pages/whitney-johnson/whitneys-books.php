<?php require get_template_directory() . "/link-configs.php" ?>

<div id="podcast" class="bg-white py-24">
  <div class="content-container text-center">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Discover Whitney's Books", "mb" => "mb-8 sm:mb-4")); ?>
    <div class="flex flex-col sm:flex-row justify-evenly flex-wrap space-y-4 mb-8">
      <div class="sm:mt-4">
        <a href="<?php esc_html_e($LINKS["smart-growth"]) ?>" target="_blank" rel="noopener" class="relative group inline-block sm:block border-[2px] border-[#017381] rounded hover:bg-black/10 transition-all duration-300">
          <img class="absolute w-[250px] max-w-none top-2 left-2 group-hover:top-0 group-hover:left-0 transition-all duration-300" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/books/smartGrowth.png') ?>" alt="" />
          <p class="flex w-[200px] items-center justify-center text-[#017381] mt-[19rem] border-t-[2px] border-[#017381]">
            <span class="mr-2 py-1">Preorder Today</span>
            <span class="material-icons-round">arrow_forward</span>
          </p>
        </a>
      </div>
      <div class="sm:mt-4">
        <a href="<?php esc_html_e($LINKS["build-an-a-team"]) ?>" target="_blank" rel="noopener" class="relative group inline-block sm:block border-[2px] border-white hover:border-[#017381] rounded hover:bg-black/10 transition-all duration-300">
          <img class="absolute w-[250px] max-w-none top-2 left-2 group-hover:top-0 group-hover:left-0 transition-all duration-300" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/books/buildAnATeam.png') ?>" alt="" />
          <p class="flex w-[200px] items-center justify-center text-[#017381] mt-[19rem] border-t-[2px] border-white group-hover:border-[#017381] transition-all duration-300">
            <span class="mr-2 py-1">Order Book</span>
            <span class="material-icons-round">arrow_forward</span>
          </p>
        </a>
      </div>
      <div class="sm:mt-4">
        <a href="<?php esc_html_e($LINKS["disrupt-yourself"]) ?>" target="_blank" rel="noopener" class="relative group inline-block sm:block border-[2px] border-white hover:border-[#017381] rounded hover:bg-black/10 transition-all duration-300">
          <img class="absolute w-[250px] max-w-none top-2 left-2 group-hover:top-0 group-hover:left-0 transition-all duration-300" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/books/disruptYourself.png') ?>" alt="" />
          <p class="flex w-[200px] items-center justify-center text-[#017381] mt-[19rem] border-t-[2px] border-white group-hover:border-[#017381] transition-all duration-300">
            <span class="mr-2 py-1">Order Book</span>
            <span class="material-icons-round">arrow_forward</span>
          </p>
        </a>
      </div>
      <div class="sm:mt-4">
        <a href="<?php esc_html_e($LINKS["dare-dream-do"]) ?>" target="_blank" rel="noopener" class="relative group inline-block sm:block border-[2px] border-white hover:border-[#017381] rounded hover:bg-black/10 transition-all duration-300">
          <img class="absolute w-[250px] max-w-none top-2 left-2 group-hover:top-0 group-hover:left-0 transition-all duration-300" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/books/dareDreamDo.png') ?>" alt="" />
          <p class="flex w-[200px] items-center justify-center text-[#017381] mt-[19rem] border-t-[2px] border-white group-hover:border-[#017381] transition-all duration-300">
            <span class="mr-2 py-1">Order Book</span>
            <span class="material-icons-round">arrow_forward</span>
          </p>
        </a>
      </div>
    </div>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'View More Details', 'link' => $LINKS["books"])); ?>
  </div>
</div>