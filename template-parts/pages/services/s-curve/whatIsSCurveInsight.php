<div class="content-container py-24 text-[#4d4d4d]">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "What is the S Curve Insight&trade; Platform?", "mb" => "mb-4")); ?>
  <p class="text-lg mb-16 text-center">This Platform is a powerful tool for growing yourself, to grow your people, to grow your organization.</p>
  <div class="flex mb-12">
    <div class="flex-grow pr-8 space-y-8 text-lg">
      <p>Backed by over 20 years of research, consulting, and coaching, the S Curve Insight Platform is a proprietary technology framework that pinpoints  where your employees are in their growth journey. </p>
      <p>Aftering taking our assessment, individuals receive actionable insight on how to grow faster in their current role using the Seven Accelerants of Growth.</p>
      <p>Through customized training, group and individual coaching, we help individuals grow so your organization can reach its potential.</p>
    </div>
    <div class="hidden md:block flex-shrink-0">
      <img class="h-auto w-[300px] lg:w-[473px] rounded" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/take-the-assessment.png') ?>" alt="" width="473" height="370" />
    </div>
  </div>
  <div class="bg-white p-8 shadow-card-sm rounded text-center">
    <h4 class="font-bold text-black text-xl mb-4 md:mb-8">What can this do for your team?</h4>
    <div class="flex justify-center md:justify-between flex-wrap mb-8 text-left">
      <p class="bg-check-green bg-left bg-no-repeat px-8 lg:pr-0 mt-4 max-w-[284px] xl:max-w-[357px]">Show you where each team member is in their growth journey.</p>
      <div class="flex items-center"><p class="bg-check-green bg-left bg-no-repeat px-8 lg:pr-0 mt-4 max-w-[284px] xl:max-w-[375px]">Identify the right Accelerants to further fuel growth.</p></div>
      <p class="bg-check-green bg-left bg-no-repeat px-8 lg:pr-0 mt-4 justify-self-end max-w-[284px] xl:max-w-[375px]">Assess the health of your Ecosystem and reveal opportunities for transformation.</p>
    </div>
    <?php get_template_part( 'template-parts/components/buttons/hollow', null, array('label' => 'Contact Us to See a Demo', "js-hook" => "fireContactModal", "contact-reason" => "S Curve Insight Platform")); ?>
  </div>
</div>