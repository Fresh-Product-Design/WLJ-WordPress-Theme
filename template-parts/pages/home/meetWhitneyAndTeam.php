<?php require get_template_directory() . "/link-configs.php" ?>

<div class="content-container flex flex-col md:flex-row py-24">
  <img class="mx-auto mb-8 md:mb-0 md:ml-0 md:mr-10 md:w-[225px] md:h-[225px] lg:w-[390px] lg:h-[390px]" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/staff/whitneyJohnson.png') ?>" alt="" width="390" height="390" />
  <div class="flex-grow text-[#4d4d4d] text-lg">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Meet Whitney & the Team", "mb" => "mb-8", "align" => "text-left")); ?>
    <p class="mb-8">Whitney Johnson is the CEO of Disruption Advisors and one of the fifty leading business thinkers in the world as named by Thinkers50 – an expert at helping leaders grow their people to grow their organization. Whitney is an award-winning author, world-class keynote speaker, frequent lecturer for Harvard Business School's Corporate Learning, and an executive coach and advisors to CEOs.</p>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'More About The Team', 'href' => $LINKS["about-us"])); ?>
  </div>
</div>