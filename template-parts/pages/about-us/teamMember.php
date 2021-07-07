<div class="w-[265px] md:w-[170px] lg:w-[220px] xl:w-[265px] <?php if(array_key_exists("isEmpty", $args) !== false) { esc_html_e("hidden md:block"); } ?>">
  <?php if(array_key_exists("isEmpty", $args) === false) { ?>
    <img class="w-[265px] md:w-[170px] lg:w-[220px] xl:w-[265px] mb-4 rounded" src="<?php esc_attr_e(get_template_directory_uri() . $args['image']) ?>" alt="" width="265" height="265" />
    <h4 class="font-headline text-2xl tracking-wider leading-none"><?php esc_html_e($args['name']) ?></h4>
    <p class="text-[#4d4d4d]"><?php esc_html_e($args['title']) ?></p>
  <?php } ?>
</div>