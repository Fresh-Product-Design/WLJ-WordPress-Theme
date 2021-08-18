<?php require get_template_directory() . "/link-configs.php" ?>

<div class="bg-[#c3dbd8] bg-weathered-blue bg-cover bg-no-repeat">
  <div class="sm:bg-disrupt-yourself bg-60% lg:bg-contain bg-right-bottom md:bg-right bg-no-repeat content-container text-center sm:text-left py-24 md:py-36">
    <h1 class="font-headline text-5xl md:text-7xl text-[#C63732] tracking-wider uppercase mb-3">Disrupt Yourself</h1>
    <h2 class="font-subhead text-lg md:text-2xl font-semibold tracking-[0.23em] uppercase mb-7">With Whitney Johnson</h2>
    <p class="lg:text-xl max-w-[400px] md:max-w-[510px] xl:max-w-[655px] mx-auto sm:mx-0 mb-16">Tune in every week as Whitney talks personal disruption with the world's best thinkers and doers.</p>
    <h2 class="font-subhead text-2xl font-semibold tracking-[0.23em] uppercase">Subscribe</h2>
    <div class="w-[255px] inline-flex sm:flex justify-evenly sm:justify-start flex-wrap">
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Apple Podcasts", "addt-styles" => "mt-4", "href" => $LINKS["podcast-apple"])); ?>
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Spotify", "addt-styles" => "mt-4 sm:ml-4", "href" => $LINKS["podcast-spotify"])); ?>
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Stitcher", "addt-styles" => "mt-4", "href" => $LINKS["podcast-stitcher"])); ?>
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Google Play", "addt-styles" => "mt-4 sm:ml-4", "href" => $LINKS["podcast-google-play"])); ?>
    </div>
  </div>
</div>
