<?php
$tabsOpts = array(
  "tabs" => array(
    array("key" => "risks", "label" => "1. Take the Right Risks", "content-src" => "template-parts/components/tabs/content/rightRisks"),
    array("key" => "strengths", "label" => "2. Play to Your Distinctive Strengths", "content-src" => "template-parts/components/tabs/content/distinctiveStrengths"),
    array("key" => "constraints", "label" => "3. Embrace Constraints", "content-src" => "template-parts/components/tabs/content/embraceConstraints"),
    array("key" => "expectations", "label" => "4. Examine Expectations", "content-src" => "template-parts/components/tabs/content/examineExpectations"),
    array("key" => "grow", "label" => "5. Step Back to Grow", "content-src" => "template-parts/components/tabs/content/stepBackToGrow"),
    array("key" => "failure", "label" => "6. Give Failure Its Due", "content-src" => "template-parts/components/tabs/content/giveFailureItsDue"),
    array("key" => "discovery", "label" => "7. Be Discovery Driven", "content-src" => "template-parts/components/tabs/content/discoveryDriven"),
  )
);
?>
<div class="text-left mb-16 md:mb-20">
  <?php get_template_part( 'template-parts/components/headers/tagline', null, array("label" => "The Seven Accelerants of Growth&trade;", "addt-styles" => "mb-6 font-bold")); ?>
  <p class="text-lg mb-6">Our attitudes and behaviors can either slow or accelerate our growth. The Seven Accelerants are distilled principals that have been proven over the test of time.</p>
  <p class="text-lg mb-10">They help people disrupt themselves by examining patterns, challenge assumptions, and look at problems in new and dynamic ways.</p>
  <?php get_template_part( 'template-parts/components/tabs/linkList', null, $tabsOpts); ?>
</div>