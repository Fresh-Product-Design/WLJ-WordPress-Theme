<?php require get_template_directory() . "/link-configs.php" ?>

<div
  id="resourcesSubMenu"
  class="
    hidden bg-white text-black 
    md:hidden md:group-hover:block md:group-focus:block md:absolute md:top-full md:left-1/2 md:py-8 md:px-4 md:rounded shadow-behind md:backdrop-blur-3xl md:-translate-x-1/2
  "
  style="margin-left: 0;"
>
  <div class="space-y-2 mb-8">
    <a href="<?php esc_html_e($LINKS["newsletter"]); ?>" class="flex items-center font-headline text-xl tracking-widest uppercase hover:text-[#017381]">
      <span>Newletter</span>
      <span class="material-icons-round">keyboard_arrow_right</span>
    </a>
    <hr class="hidden md:block w-12 h-[2px] border-none bg-[#F5D22D]">
  </div>
  <div class="space-y-2">
    <a href="<?php esc_html_e($LINKS["books"]); ?>" class="flex items-center font-headline text-xl tracking-widest uppercase hover:text-[#017381]">
      <span>Books</span>
      <span class="material-icons-round">keyboard_arrow_right</span>
    </a>
    <hr class="hidden md:block w-12 h-[2px] border-none bg-[#F5D22D]">
  </div>
</div>