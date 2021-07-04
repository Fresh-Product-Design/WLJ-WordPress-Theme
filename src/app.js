// Handle Mobile Menu
let siteNavigation;
let siteNavContainer;
let mobileMenuIcon;
let mobileMenuBackdrop;
let isMobileMenuOpen = false;

function openMobileMenu() {
  // Update icon
  mobileMenuIcon.innerText = "close";
  isMobileMenuOpen = true;
  // Update Body to not scroll
  document.getElementsByTagName('body')[0].classList.add('overflow-hidden');
  // Change siteNavigation class to show menu
  siteNavigation.classList.add('flex');
  siteNavigation.classList.remove('hidden');
  // Change mobileMenuBackdrop to show
  mobileMenuBackdrop.classList.add('block');
  mobileMenuBackdrop.classList.remove('hidden');
  // Show nav container
  siteNavContainer.classList.add('block');
  siteNavContainer.classList.remove('hidden');
}
function closeMobileMenu() {
  // Update icon
  mobileMenuIcon.innerText = "menu";
  isMobileMenuOpen = false;
  // Update Body to scroll
  document.getElementsByTagName('body')[0].classList.remove('overflow-hidden');
  // Change siteNavigation class to hide menu
  siteNavigation.classList.add('hidden');
  siteNavigation.classList.remove('flex');
  // Change mobileMenuBackdrop to hide
  mobileMenuBackdrop.classList.add('hidden');
  mobileMenuBackdrop.classList.remove('block');
  // Hide nav container
  siteNavContainer.classList.add('hidden');
  siteNavContainer.classList.remove('block');
}

function setMobileMenuHandler() {
  // Get navigation element references
  siteNavContainer = document.getElementById('site-navigation-container');
  siteNavigation = document.getElementById('site-navigation');
  mobileMenuIcon = document.getElementById('mobileMenu');
  mobileMenuBackdrop = document.getElementById('mobileMenu_backdrop');

  mobileMenuIcon.addEventListener('click', function() {
    if (!isMobileMenuOpen) {
      openMobileMenu();
    } else {
      closeMobileMenu();
    }
  });
}

// Handle Sub Menus on Mobile
let servicesNavIcon;
let servicesSubMenu;
let isServicesSubMenuOpen = false;
let servicesSubMenuClasses = ["block", "pl-7", "space-y-7"];

let resourcesNavIcon;
let resourcesSubMenu;
let isResourcesSubMenuOpen = false;
let resourcesSubMenuClasses = ["block", "pt-7", "pl-7", "space-y-7"];

function isMobileMenuActive() { return Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0) < 768 }

// Only run these functions if the width of the viewport is < 768px
function openMobileNav(type, navIcon, subMenu, classes) {
  switch(type) {
    case "services":
      isServicesSubMenuOpen = true;
      closeMobileNav('resources', resourcesNavIcon, resourcesSubMenu, resourcesSubMenuClasses);
      break;
    case "resources":
      isResourcesSubMenuOpen = true;
      closeMobileNav('services', servicesNavIcon, servicesSubMenu, servicesSubMenuClasses);
      break;
  }
  // Change icon to up
  navIcon.innerText = "keyboard_arrow_up";
  // Add sub menu classes, remove hidden class
  subMenu.classList.remove('hidden');
  classes.forEach(function (classToAdd) {
    subMenu.classList.add(classToAdd);
  });
}
function closeMobileNav(type, navIcon, subMenu, classes) {
  switch(type) {
    case "services":
      isServicesSubMenuOpen = false;
      break;
    case "resources":
      isResourcesSubMenuOpen = false;
      break;
  }
  // Change icon to down
  navIcon.innerText = "keyboard_arrow_down";
  // Remove sub menu classes, add hidden
  subMenu.classList.add('hidden');
  classes.forEach(function (classToRemove) {
    subMenu.classList.remove(classToRemove);
  });
}
function handleMobileNav(type, isOpen, navIcon, subMenu, classes) {
  if (isMobileMenuActive()) {
    if (!isOpen) {
      openMobileNav(type, navIcon, subMenu, classes)
    } else {
      closeMobileNav(type, navIcon, subMenu, classes)
    }
  }
}

function setMobileSubMenuHandler() {
  servicesNavIcon = document.querySelector('#servicesNav .mobileIcon');
  servicesSubMenu = document.getElementById('servicesSubMenu');

  resourcesNavIcon = document.querySelector('#resourcesNav .mobileIcon');
  resourcesSubMenu = document.getElementById('resourcesSubMenu');

  document.getElementById('servicesNav').addEventListener('click', function() {
    handleMobileNav('services', isServicesSubMenuOpen, servicesNavIcon, servicesSubMenu, servicesSubMenuClasses);
  });
  document.getElementById('resourcesNav').addEventListener('click', function() {
    handleMobileNav('resources', isResourcesSubMenuOpen, resourcesNavIcon, resourcesSubMenu, resourcesSubMenuClasses);
  });
}

// Run init() on DOMContentLoaded
function init() {
  setMobileMenuHandler();
  setMobileSubMenuHandler();
};
window.addEventListener('DOMContentLoaded', init);