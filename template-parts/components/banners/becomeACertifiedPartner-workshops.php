<?php require get_template_directory() . "/lang/servicesWorkshops.php"; ?>

<div class="bg-white py-24">
  <div class="content-container text-center">
    <img class="mx-auto mb-12" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/icons/certifications@3x.png') ?>" alt="" width="70" height="87" />
    <h2 class="font-subhead font-bold text-3xl md:text-4xl mb-2"><?php esc_html_e($lang["certifiedPartner"]["headline"]); ?></h2>
    <p class="text-[#4d4d4d] md:text-lg mb-10"><?php esc_html_e($lang["certifiedPartner"]["tagline"]); ?></p>
    <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => $lang["certifiedPartner"]["ctaText"], "js-hook" => "fireContactModal", "contact-reason" => "Certification")); ?>
  </div>
</div>