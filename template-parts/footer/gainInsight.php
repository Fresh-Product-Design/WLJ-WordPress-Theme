<div class="bg-[#C8E1DE] py-12">
  <div class="content-container text-center sm:text-left">
    <h4 class="font-bold text-xl mb-2">Gain insight into growth, adaptability and agility</h4>
    <p class="text-[#4d4d4d] text-lg mb-6 sm:mb-4">Download our free resources outlining the Accelerants of Growth—including books, podcasts and TEDtalks to help you move up your S Curve of Learning.</p>
    <div class="inline-flex flex-col sm:flex-row sm:items-center sm:justify-center lg:justify-start space-y-2 sm:space-y-0">
      <input class="text-[14px] px-4 py-3 sm:mr-4 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="firstName" placeholder="Your First Name" />  
      <input class="text-[14px] px-4 py-3 sm:mr-4 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="email" placeholder="Your Email Address" />
      <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Sign Up", "js-hook" => "captureLeadWithName")); ?>
    </div>
  </div>
</div>