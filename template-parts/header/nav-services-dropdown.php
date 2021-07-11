<?php require get_template_directory() . "/link-configs.php" ?>

<!-- md:top-[57px] = 45px (Half of the header, which splits the nav links in half) + 12px (Half the height of a nav link) = 57px (The very bottom of the nav links, matchs top-full of the resources dropdown) -->
<div
  id="servicesSubMenu"
  class="
    hidden bg-white text-black
    md:hidden md:hover:grid md:peer-hover:grid md:peer-focus:grid md:absolute md:left-2 md:right-2 md:top-[57px] md:grid-cols-3 md:grid-rows-2 md:gap-y-6 md:p-8 md:space-y-0 md:shadow-behind md:rounded md:backdrop-blur-3xl
    lg:hover:flex lg:peer-hover:flex lg:peer-focus:flex lg:px-0 lg:justify-evenly lg:grid-cols-none lg:grid-rows-none lg:gap-y-0
  "
  style="margin-left: 0;"
>
  <div class="space-y-2">
    <a href="<?php esc_attr_e($LINKS["services"]["s-curve-insight"]); ?>" class="inline-flex md:flex items-center text-xl tracking-widest font-headline uppercase hover:text-[#017381]">
      <span>S Curve Insight</span>
      <span class="material-icons-round">keyboard_arrow_right</span>
    </a>
    <hr class="hidden md:block w-12 h-[2px] border-none bg-[#F5D22D]">
    <p class="hidden md:block text-[#4D4D4D] text-sm w-[164px]">Find your team's place on the S Curve of Learning&trade;</p>
  </div>
  <div class="space-y-2 md:justify-self-center">
    <a href="<?php esc_attr_e($LINKS["services"]["coaching"]); ?>" class="inline-flex md:flex items-center text-xl tracking-widest font-headline uppercase hover:text-[#017381]">
      <span>Coaching</span>
      <span class="material-icons-round">keyboard_arrow_right</span>
    </a>
    <hr class="hidden md:block w-12 h-[2px] border-none bg-[#F5D22D]">
    <p class="hidden md:block text-[#4D4D4D] text-sm w-[181px]">Get personalized &amp; focused guidance for growth</p>
  </div>
  <div class="space-y-2 md:justify-self-end">
    <a href="<?php esc_attr_e($LINKS["services"]["certification"]); ?>" class="inline-flex md:flex items-center text-xl tracking-widest font-headline uppercase hover:text-[#017381]">
      <span>Certification</span>
      <span class="material-icons-round">keyboard_arrow_right</span>
    </a>
    <hr class="hidden md:block w-12 h-[2px] border-none bg-[#F5D22D]">
    <p class="hidden md:block text-[#4D4D4D] text-sm w-[185px]">Join a community of experts dedicated to growth</p>
  </div>
  <div class="space-y-2">
    <a href="<?php esc_attr_e($LINKS["services"]["speaking"]); ?>" class="inline-flex md:flex items-center text-xl tracking-widest font-headline uppercase hover:text-[#017381]">
      <span>Speaking</span>
      <span class="material-icons-round">keyboard_arrow_right</span>
    </a>
    <hr class="hidden md:block w-12 h-[2px] border-none bg-[#F5D22D]">
    <p class="hidden md:block text-[#4D4D4D] text-sm w-36">Inspire a movement of disruptive growth</p>
  </div>
  <div class="space-y-2 md:justify-self-center">
    <a href="<?php esc_attr_e($LINKS["services"]["workshops"]); ?>" class="inline-flex md:flex items-center text-xl tracking-widest font-headline uppercase hover:text-[#017381]">
      <span>Workshops</span>
      <span class="material-icons-round">keyboard_arrow_right</span>
    </a>
    <hr class="hidden md:block w-12 h-[2px] border-none bg-[#F5D22D]">
    <p class="hidden md:block text-[#4D4D4D] text-sm w-[181px]">Cultivate an entire culture of empowered growth</p>
  </div>
</div>