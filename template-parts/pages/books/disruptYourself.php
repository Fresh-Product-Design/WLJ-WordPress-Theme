<?php require get_template_directory() . "/link-configs.php" ?>

<div class="py-24 border-b border-[#BFBFBF]">
  <div class="content-container">
    <img class="w-full max-w-[260px] md:w-auto mb-8 md:mb-0 md:float-left md:max-w-none" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/books/disruptYourself.png') ?>" alt="" />
    <div class="mb-12">
      <h1 class="font-headline leading-snug text-5xl">Disrupt Yourself:&trade;</h1>
      <h2 class="font-headline leading-snug text-4xl mb-8">Master Relentless Change and Speed Up Your Learning Curve</h2>
      <p class="text-[#4d4d4d] mb-4">Consider this simple yet powerful idea: disruptive companies and ideas upend markets by doing something truly different—they see a need, an empty space waiting to be filled, and they dare to create something for which a market may not yet exist.</p>
      <p class="text-[#4d4d4d] mb-4">As president and co-founder of Rose Park Advisors’ Disruptive Innovation Fund with Clayton Christensen, Whitney Johnson utilized the theory of disruptive innovation to invest in publicly traded stocks and private early-stage companies.  In this book, she will help you understand how the frameworks of disruptive innovation can apply to you.</p>
      <p class="text-[#4d4d4d] mb-8">We are living in an era of accelerating disruption—managing the S-curve waves of learning and mastering is a requisite skill.  If you want to be successful in unexpected ways, follow your own disruptive path. Dare to innovate. Do something astonishing. Disrupt yourself&trade;.</p>
      <h6 class="font-subhead font-semibold tracking-widest uppercase">Order from These Retailers</h6>
      <div class="flex flex-wrap">
        <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Amazon", "href" => $LINKS["disrupt-yourself"]["amazon"], "addt-styles" => "mr-2 mt-4")); ?>
        <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Barnes and Noble", "href" => $LINKS["disrupt-yourself"]["barnes"], "addt-styles" => "mr-2 mt-4")); ?>
        <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Harvard Business Press", "href" => $LINKS["disrupt-yourself"]["harvard"], "addt-styles" => "mt-4")); ?>
      </div>
    </div>
    <div class="clear-left bg-white text-center shadow-behind rounded p-8">
      <p class="text-xl mb-12">"Disrupt Yourself reads like a handbook for innovation: it shows the incredible value of recognizing what you are good at and finding unexpected ways to apply those strengths to the marketplace. The dramatic ‘jumps’ that Johnson encourages us to take truly form the basis of creativity and success."</p>
      <p class="font-headline text-2xl tracking-widest uppercase">Steve Wozniak</p>
      <p class="text-lg uppercase">CO-Founder, Apple, INC. & Chief Scientist, Primary Data</p>
    </div>
  </div>
</div>