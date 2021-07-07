<div class="bg-[#C8E1DE] pt-8 lg:pb-8">
  <div class="content-container flex justify-evenly flex-wrap">
    <?php
    foreach ($args as $key => $link)
    { 
      print_r('<a class="font-headline text-xl text-[#017381] px-2 pb-8 lg:pb-0 uppercase tracking-widest" href="'.$link.'">'.$key.'</a>');
    } 
    ?>
  </div>
</div>