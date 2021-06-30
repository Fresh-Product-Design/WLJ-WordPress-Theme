/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/***/ (() => {

// Handle Mobile Menu
var siteNavigation;
var mobileMenuIcon;
var mobileMenuBackdrop;
var isMobileMenuOpen = false;

function openMobileMenu() {
  // Update icon
  mobileMenuIcon.innerText = "close";
  isMobileMenuOpen = true; // Update Body to not scroll

  document.getElementsByTagName('body')[0].classList.add('overflow-hidden'); // Change siteNavigation class to show menu

  siteNavigation.classList.add('flex');
  siteNavigation.classList.remove('hidden'); // Change mobileMenuBackdrop to show

  mobileMenuBackdrop.classList.add('block');
  mobileMenuBackdrop.classList.remove('hidden');
}

function closeMobileMenu() {
  // Update icon
  mobileMenuIcon.innerText = "menu";
  isMobileMenuOpen = false; // Update Body to scroll

  document.getElementsByTagName('body')[0].classList.remove('overflow-hidden'); // Change siteNavigation class to hide menu

  siteNavigation.classList.add('hidden');
  siteNavigation.classList.remove('flex'); // Change mobileMenuBackdrop to hide

  mobileMenuBackdrop.classList.add('hidden');
  mobileMenuBackdrop.classList.remove('block');
}

function setMobileMenuHandler() {
  // Get navigation element references
  siteNavigation = document.getElementById('site-navigation');
  mobileMenuIcon = document.getElementById('mobileMenu');
  mobileMenuBackdrop = document.getElementById('mobileMenu_backdrop');
  mobileMenuIcon.addEventListener('click', function () {
    if (!isMobileMenuOpen) {
      openMobileMenu();
    } else {
      closeMobileMenu();
    }
  });
} // Handle Sub Menus on Mobile


var servicesNavIcon;
var servicesSubMenu;
var isServicesSubMenuOpen = false;
var servicesSubMenuClasses = ["block", "pl-7", "space-y-7"];
var resourcesNavIcon;
var resourcesSubMenu;
var isResourcesSubMenuOpen = false;
var resourcesSubMenuClasses = ["block", "pt-7", "pl-7", "space-y-7"];

function isMobileMenuActive() {
  return Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0) < 768;
} // Only run these functions if the width of the viewport is < 768px


function openMobileNav(type, navIcon, subMenu, classes) {
  switch (type) {
    case "services":
      isServicesSubMenuOpen = true;
      closeMobileNav('resources', resourcesNavIcon, resourcesSubMenu, resourcesSubMenuClasses);
      break;

    case "resources":
      isResourcesSubMenuOpen = true;
      closeMobileNav('services', servicesNavIcon, servicesSubMenu, servicesSubMenuClasses);
      break;
  } // Change icon to up


  navIcon.innerText = "keyboard_arrow_up"; // Add sub menu classes, remove hidden class

  subMenu.classList.remove('hidden');
  classes.forEach(function (classToAdd) {
    subMenu.classList.add(classToAdd);
  });
}

function closeMobileNav(type, navIcon, subMenu, classes) {
  switch (type) {
    case "services":
      isServicesSubMenuOpen = false;
      break;

    case "resources":
      isResourcesSubMenuOpen = false;
      break;
  } // Change icon to down


  navIcon.innerText = "keyboard_arrow_down"; // Remove sub menu classes, add hidden

  subMenu.classList.add('hidden');
  classes.forEach(function (classToRemove) {
    subMenu.classList.remove(classToRemove);
  });
}

function handleMobileNav(type, isOpen, navIcon, subMenu, classes) {
  if (isMobileMenuActive()) {
    if (!isOpen) {
      openMobileNav(type, navIcon, subMenu, classes);
    } else {
      closeMobileNav(type, navIcon, subMenu, classes);
    }
  }
}

function setMobileSubMenuHandler() {
  servicesNavIcon = document.querySelector('#servicesNav .mobileIcon');
  servicesSubMenu = document.getElementById('servicesSubMenu');
  resourcesNavIcon = document.querySelector('#resourcesNav .mobileIcon');
  resourcesSubMenu = document.getElementById('resourcesSubMenu');
  document.getElementById('servicesNav').addEventListener('click', function () {
    handleMobileNav('services', isServicesSubMenuOpen, servicesNavIcon, servicesSubMenu, servicesSubMenuClasses);
  });
  document.getElementById('resourcesNav').addEventListener('click', function () {
    handleMobileNav('resources', isResourcesSubMenuOpen, resourcesNavIcon, resourcesSubMenu, resourcesSubMenuClasses);
  });
} // Run init() on DOMContentLoaded


function init() {
  setMobileMenuHandler();
  setMobileSubMenuHandler();
}

;
window.addEventListener('DOMContentLoaded', init);

/***/ }),

/***/ "./src/app.css":
/*!*********************!*\
  !*** ./src/app.css ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					result = fn();
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/app": 0,
/******/ 			"tailwind": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkWhitney_Johnson_2_0"] = self["webpackChunkWhitney_Johnson_2_0"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["tailwind"], () => (__webpack_require__("./src/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["tailwind"], () => (__webpack_require__("./src/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;