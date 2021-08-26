<?php require get_template_directory() . "/lang/servicesCoaching.php"; ?>
<?php
$coaches = array(
  array("name" => "Devanie Helman", "image" => "/src/assets/images/coaches/devanie-helman.png"),
  array("name" => "Doug Jackson", "image" => "/src/assets/images/coaches/doug-jackson.png"),
  array("name" => "Gruffie Clough", "image" => "/src/assets/images/coaches/gruffie-clough.png"),
  array("name" => "Katy Craig", "image" => "/src/assets/images/coaches/katy-craig.png"),
  array("name" => "Logan Davis", "image" => "/src/assets/images/coaches/logan-davis.png"),
  array("name" => "Maureen Breeze", "image" => "/src/assets/images/coaches/maureen-breeze.png"),
  array("name" => "Monica Loup", "image" => "/src/assets/images/coaches/monica-loup.png"),
  array("name" => "Nina Rodd", "image" => "/src/assets/images/coaches/nina-rodd.png"),
  array("name" => "Pierre Powell", "image" => "/src/assets/images/coaches/pierre-powell.png"),
  array("name" => "Ralph Campbell", "image" => "/src/assets/images/coaches/ralph-campbell.png"),
  array("name" => "Stacey Bledsoe", "image" => "/src/assets/images/coaches/stacey-bledose.png"),
  array("name" => "Stephen Ludwig", "image" => "/src/assets/images/coaches/stephen-ludwig.png"),
  array("name" => "Sue Barlow", "image" => "/src/assets/images/coaches/sue-barlow.png"),
  array("name" => "Tony Martignetti", "image" => "/src/assets/images/coaches/tony-martignetti.png"),
);
?>
<div id="coaches" class="content-container py-24">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => $lang["coaches"]["title"], "mb" => "mb-2")); ?>
  <p class="max-w-[1040px] text-[#4d4d4d] text-lg text-center mx-auto mb-16"><?php esc_html_e($lang["coaches"]["text"]); ?></p>
  <div class="grid items-center sm:items-start justify-items-center grid-cols-2 grid-rows-7 sm:grid-cols-3 sm:grid-rows-5 md:grid-cols-4 md:grid-rows-3 gap-x-4 gap-y-4 mx-auto">
      <?php
        foreach ($coaches as $coach)
        {
          get_template_part( 'template-parts/pages/services/coaching/coach', null, $coach);
        }
      ?>
  </div>
</div>