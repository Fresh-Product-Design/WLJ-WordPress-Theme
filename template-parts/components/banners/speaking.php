<?php require get_template_directory() . "/link-configs.php" ?>

<div id="speaking" class="relative bg-black sm:bg-speaking bg-right bg-cover bg-no-repeat py-24">
  <div class="absolute z-10 inset-0 bg-black/50 md:bg-transparent backdrop-blur md:backdrop-blur-none"></div>
  <div class="relative content-container xl:text-center z-20">
    <h2 class="font-subhead text-white text-3xl md:text-4xl tracking-[0.23em] uppercase mb-4">Speaking</h2>
    <p class="md:max-w-[370px] lg:max-w-[704px] text-[#F8F8F8] text-lg md:text-xl xl:mx-auto mb-4">Whitney Johnson customizes each keynote, both in-person and virtual, that leaves audiences and organizations energized and inspiredto take new actions for growth.</p>
    <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Invite Whitney to Speak", "js-hook" => "fireContactModal", "addt-styles" => "mr-2 mt-4")); ?>
    <?php get_template_part( 'template-parts/components/buttons/hollow-invert', null, array('label' => 'Learn More', 'href' => $LINKS["services"]["speaking"], "addt-styles" => "mt-4")); ?>
  </div>
</div>