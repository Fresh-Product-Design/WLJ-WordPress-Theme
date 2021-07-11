<div class="content-container py-24">
  <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Why Disruption Advisors?", "mb" => "mb-2")); ?>
  <p class="max-w-[903px] text-[#4d4d4d] text-lg text-center mx-auto mb-16">We'll work together to create and implement a solution so you can effectively lead your team through change.</p>
  <!-- Why Disruption Advisors Grid -->
  <?php get_template_part( 'template-parts/pages/services/coaching/comparisonGrid' ); ?>
  <!-- What is the S Curve Insight Platform? -->
  <div class="relative flex flex-col lg:flex-row lg:block bg-white p-8 lg:mr-12 rounded-lg">
    <div class="hidden lg:block mb-8 lg:mb-0 text-center lg:absolute lg:-right-12 lg:top-4 lg:bottom-4">
      <img class="inline h-auto lg:h-full w-auto border-4 border-white rounded-lg" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/take-the-assessment.png') ?>" alt="" width="406" height="311">
    </div>
    <div class="lg:pr-4 xl:pr-0 lg:w-2/5 xl:w-2/3">
      <h4 class="font-subhead text-2xl font-bold text-black tracking-widest mb-4">What is the S Curve Insight Platform?</h4>
      <p class="text-[#4d4d4d] mb-4">Backed by over 20 years of research, the S Curve Insight is a proprietary technology framework that:</p>
      <ul class="ml-6 mb-4 text-[#4d4d4d] list-disc space-y-2">
        <li>Pinpoint where your employees are in their S Curve of Learning and their growth journey.</li>
        <li>Recieve actionable insight into their apititude for each of the Seven Accelerants of Growth.</li>
        <li>Empower personal disruption to fuel growth so your organization can reach its collective potential.</li>
      </ul>
      <a class="group inline-flex items-center justify-center font-bold text-[#017381] hover:text-[#143b3f]" href="#">
        <span class="mr-1 group-hover:underline">Learn More About the S Curve Insight</span>
        <span class="material-icons-round mr">arrow_forward</span>
      </a>
    </div>
  </div>
</div>