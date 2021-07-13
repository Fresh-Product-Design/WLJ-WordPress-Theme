<?php require get_template_directory() . "/link-configs.php" ?>

<div class="bg-[#c3dbd8] bg-weathered-blue bg-cover bg-no-repeat overflow-hidden">
  <div class="relative content-container text-center md:text-left py-24 md:py-36">
    <img class="hidden md:block absolute max-w-[350px] lg:max-w-none top-1/6 -right-24 lg:top-4 lg:-right-32" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/books/smartGrowth.png') ?>" alt="" />
    <h1 class="md:max-w-[500px] lg:max-w-[750px] font-headline text-5xl md:text-7xl text-[#C63732] tracking-wider uppercase mb-4">Become a Master of Innovation and Change</h1>
    <h2 class="md:max-w-[400px] lg:max-w-[563px] text-lg md:text-xl font-semibold mb-16">Learn the seven point framework that will help you master change and speed up the learning curve.</h2>
    <h2 class="font-subhead text-2xl text-white font-bold tracking-[0.23em] uppercase mb-4">Available 2022</h2>
    <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Pre Order Today", "href" => $LINKS["smart-growth"]["amazon"])); ?>
  </div>
</div>
