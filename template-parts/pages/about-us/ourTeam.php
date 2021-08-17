<?php
$teamMembers = array(
  array("name" => "Chelsea Smith", "title" => "Director of Business Development", "image" => "/src/assets/images/staff/chelseasmith.jpg"),
  array("name" => "Maddie McDaniel", "title" => "Marketing Associate", "image" => "/src/assets/images/staff/maddiemcdaniel.jpg"),
  array("name" => "Frank Morgan", "title" => "Writer", "image" => "/src/assets/images/staff/frankmorgan.jpg"),
  array("name" => "Jen Burt", "title" => "Controller", "image" => "/src/assets/images/staff/jenburt.jpg"),
  array("name" => "Jennifer Ross", "title" => "Senior Marketing Manager", "image" => "/src/assets/images/staff/jenniferross.jpg"),
  array("name" => "Kurt Wilson", "title" => "Director of Diagnostics & Feedback", "image" => "/src/assets/images/staff/kurtwilson.jpg"),
  array("name" => "Linda Elliott", "title" => "Executive Assistant & Assessment Manager", "image" => "/src/assets/images/staff/lindaelliott.jpg"),
  array("name" => "Stephen Ludwig", "title" => "Director of Marketing", "image" => "/src/assets/images/staff/stephenludwig.jpg"),
  array("isEmpty" => true), // This is to help desktop "center" the remaining two members
  array("name" => "Tim Weeks", "title" => "CFO", "image" => "/src/assets/images/staff/timweeks.jpg"),
  array("name" => "Whitney Jobe", "title" => "Audio Engineer", "image" => "/src/assets/images/staff/whitneyjobe.jpg"),
);
?>

<div id="team" class="bg-white py-24">
  <div class="content-container">
    <?php get_template_part( 'template-parts/components/headers/basic', null, array("label" => "Our Team")); ?>
    <div class="grid items-center sm:items-start justify-items-center grid-cols-1 grid-rows-10 sm:grid-cols-2 sm:grid-rows-5 md:grid-cols-4 md:grid-rows-3 gap-x-2 gap-y-4 mx-auto">
      <?php
        foreach ($teamMembers as $member)
        {
          get_template_part( 'template-parts/pages/about-us/teamMember', null, $member);
        }
      ?>
    </div>
  </div>
</div>