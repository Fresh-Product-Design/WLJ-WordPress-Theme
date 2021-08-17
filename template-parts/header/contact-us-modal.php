<div id="contactUsModal" class="hidden fixed overflow-auto top-0 left-0 right-0 h-screen bg-black/60 backdrop-blur-sm z-50" data-modal>
  <div class="relative md:w-[720px] m-4 md:my-8 md:mx-auto bg-white p-10 rounded-xl">
    <span role="button" data-modal-close class="absolute top-5 right-5 text-2xl text-[#4d4d4d] hover:text-black material-icons-round">close</span>
    <h1 class="font-headline text-5xl sm:text-6xl pt-4 sm:pt-0 tracking-wider uppercase mb-4">Contact Us</h1>
    <p class="text-lg text-[#4d4d4d]">Fill out this form and a member of our team will follow up to create a customized plan to help your organization get even smarter about growth.</p>
    <?php get_template_part( 'template-parts/components/dividers/basic', null, array("line-color" => "bg-[#BFBFBF]", "addt-styles" => "my-10")); ?>
    <?php get_template_part( "template-parts/components/captures/contactFormFull" ); ?>
  </div>
</div>