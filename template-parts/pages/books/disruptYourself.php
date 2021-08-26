<?php require get_template_directory() . "/lang/books.php"; ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<div class="py-24 border-b border-[#BFBFBF]">
  <div class="content-container">
    <img class="w-full max-w-[260px] md:w-auto mb-8 md:mb-0 md:float-left md:max-w-none" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/books/disruptYourself.png') ?>" alt="" />
    <div class="mb-12">
      <h1 class="font-headline leading-snug text-5xl"><?php esc_html_e($lang["disruptYourself"]["title"]); ?></h1>
      <h2 class="font-headline leading-snug text-4xl mb-8"><?php esc_html_e($lang["disruptYourself"]["tagline"]); ?></h2>
      <p class="text-[#4d4d4d] mb-4"><?php esc_html_e($lang["disruptYourself"]["text-one"]); ?></p>
      <p class="text-[#4d4d4d] mb-4"><?php esc_html_e($lang["disruptYourself"]["text-two"]); ?></p>
      <p class="text-[#4d4d4d] mb-8"><?php esc_html_e($lang["disruptYourself"]["text-three"]); ?></p>
      <h6 class="font-subhead font-semibold tracking-widest uppercase">Order from These Retailers</h6>
      <div class="flex flex-wrap">
        <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Amazon", "href" => $LINKS["disrupt-yourself"]["amazon"], "addt-styles" => "mr-2 mt-4")); ?>
        <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Barnes and Noble", "href" => $LINKS["disrupt-yourself"]["barnes"], "addt-styles" => "mr-2 mt-4")); ?>
        <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Harvard Business Press", "href" => $LINKS["disrupt-yourself"]["harvard"], "addt-styles" => "mt-4")); ?>
      </div>
    </div>
    <div class="clear-left bg-white text-center shadow-behind rounded p-8">
      <p class="text-xl mb-12"><?php esc_html_e($lang["disruptYourself"]["quote"]); ?></p>
      <p class="font-headline text-2xl tracking-widest uppercase"><?php esc_html_e($lang["disruptYourself"]["quote-name"]); ?></p>
      <p class="text-lg uppercase"><?php esc_html_e($lang["disruptYourself"]["quote-title"]); ?></p>
    </div>
  </div>
</div>