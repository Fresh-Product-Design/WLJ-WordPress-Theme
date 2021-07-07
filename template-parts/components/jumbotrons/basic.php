<div class="bg-jumbotron bg-cover bg-bottom py-24 md:py-36 text-center">
  <h1 class="font-headline text-[#C63732] text-8xl tracking-widest uppercase"><?php esc_html_e($args['title']) ?></h1>
  <?php if(empty($args['tagline']) === false) { ?>
    <hr class="h-[2px] w-[56px] bg-[#017381] my-8 mx-auto" />
    <p class="text-2xl max-w-[720px] mx-auto" ><?php esc_html_e($args['tagline']) ?></p>
  <?php } ?>
</div>
