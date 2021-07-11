<?php
function getBasicTabClasses($index) {
  $tabClasses = "w-full text-xl font-bold p-6 border-b-[3px]";
  // If first in index, set as active
  $tabClasses .= $index === 0 ? " text-[#017381] border-[#017381]" : " text-[#4d4d4d] border-[#cccccc]";
  esc_attr_e($tabClasses);
}

function getLinkListTabClasses($index) {
  $tabClasses = "flex items-center justify-start font-bold text-lg lg:text-xl text-left";
  // If first in index, set as active
  $tabClasses .= $index === 0 ? " text-[#808080]" : " text-[#017381] group";
  esc_attr_e($tabClasses);
}

function getContentClasses($index) {
  esc_attr_e($index === 0 ? "block" : "hidden");
}
?>