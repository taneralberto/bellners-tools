/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/index.ts");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/index.ts":
/*!*************************!*\
  !*** ./src/js/index.ts ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\nObject.defineProperty(exports, \"__esModule\", { value: true });\n__webpack_require__(/*! ../../template-parts/components/atoms/atoms */ \"./template-parts/components/atoms/atoms.ts\");\n// import '../../template-parts/components/molecules/molecules';\n// import '../../template-parts/components/organisms/organisms';\n// import '../../template-parts/components/templates/templates';\n/*export * from '../../template-parts/components/atoms/atoms';\nexport * from '../../template-parts/components/molecules/molecules';*/ \n\n\n//# sourceURL=webpack:///./src/js/index.ts?");

/***/ }),

/***/ "./template-parts/components/atoms/atoms.ts":
/*!**************************************************!*\
  !*** ./template-parts/components/atoms/atoms.ts ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\nObject.defineProperty(exports, \"__esModule\", { value: true });\n__webpack_require__(/*! ./next-prev-button/next-prev-button */ \"./template-parts/components/atoms/next-prev-button/next-prev-button.ts\");\n__webpack_require__(/*! ./hamburger/hamburger */ \"./template-parts/components/atoms/hamburger/hamburger.ts\");\n\n\n//# sourceURL=webpack:///./template-parts/components/atoms/atoms.ts?");

/***/ }),

/***/ "./template-parts/components/atoms/hamburger/hamburger.ts":
/*!****************************************************************!*\
  !*** ./template-parts/components/atoms/hamburger/hamburger.ts ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\nclass Menu {\n    constructor() {\n        this.numerone = 1;\n        this.hamburger = document.querySelector('.hamburger');\n        this.menu = document.getElementById('primary-menu');\n        this.menuChildren = this.menu ? [...this.menu.children] : [];\n        //this.menuChildren = Array.from(this.menu.children);\n        this.createSubmenu();\n        this.menuHamburgerHandle();\n    }\n    createSubmenu() {\n        this.menuChildren.map(child => {\n            if (child.classList.contains('menu-item-has-children')) {\n                const dropdownButton = document.createElement('button');\n                dropdownButton.classList.add('menu-item__dropdown');\n                const dropdownArrow = document.createElement('span');\n                dropdownArrow.classList.add('menu-item__dropdown__arrow');\n                dropdownArrow.innerHTML = '<img src=\"https://i.postimg.cc/SX30rdjX/icons8-expand-arrow-26.png\" border=\"0\" alt=\"icons8-expand-arrow-26\"/>';\n                dropdownButton.appendChild(dropdownArrow);\n                child.appendChild(dropdownButton);\n                dropdownButton.addEventListener('click', () => {\n                    const submenu = child.children[1];\n                    submenu.classList.toggle('sub-menu--show');\n                    dropdownArrow.classList.toggle('menu-item__dropdown__arrow--actived');\n                });\n            }\n        });\n    }\n    menuHamburgerHandle() {\n        if (this.hamburger) {\n            this.hamburger.addEventListener('click', () => {\n                var _a;\n                const navLinks = document.querySelector('.header__menu');\n                //const links : NodeListOf<Element> = document.querySelectorAll( '#menu-primary-menu li' );\n                //const bodyContainer = document.querySelector( '.body-container' );\n                //bodyContainer.classList.toggle( 'body-container--overflow-hidden' );\n                //Animate Links\n                if (navLinks) {\n                    navLinks.classList.toggle('header__menu--show');\n                }\n                /*links.forEach(link => {\n                    link.classList.toggle( 'fade' );\n                } );*/\n                //Hamburger Animation\n                (_a = this.hamburger) === null || _a === void 0 ? void 0 : _a.classList.toggle('toggle');\n            });\n        }\n    }\n}\nnew Menu();\n\n\n//# sourceURL=webpack:///./template-parts/components/atoms/hamburger/hamburger.ts?");

/***/ }),

/***/ "./template-parts/components/atoms/next-prev-button/next-prev-button.ts":
/*!******************************************************************************!*\
  !*** ./template-parts/components/atoms/next-prev-button/next-prev-button.ts ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\nfunction nextPrevButtons() {\n    const $productsSlider = document.querySelector('.products-slider');\n    const $nextButton = document.querySelector('.next-button');\n    const $prevButton = document.querySelector('.prev-button');\n    let $$products = document.querySelectorAll('.product-card');\n    let index = 1;\n    const $firstClone = $$products[0].cloneNode(true);\n    const $lastClone = $$products[$$products.length - 1].cloneNode(true);\n    $firstClone.id = 'first-clone';\n    $lastClone.id = 'last-clone';\n    $productsSlider === null || $productsSlider === void 0 ? void 0 : $productsSlider.append($firstClone);\n    $productsSlider === null || $productsSlider === void 0 ? void 0 : $productsSlider.prepend($lastClone);\n    const productsTotalCount = $productsSlider === null || $productsSlider === void 0 ? void 0 : $productsSlider.childElementCount;\n    const productWidth = $$products[index].clientWidth;\n    if ($productsSlider) {\n        $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;\n        const getProducts = () => document.querySelectorAll('.product-card');\n        $productsSlider.addEventListener('transitionend', () => {\n            $$products = getProducts();\n            if ($$products[index].id === $firstClone.id) {\n                //if( $$products[index] === $$products[4] ) {\n                console.log($$products[index]);\n                $productsSlider.style.transition = 'none';\n                index = 1;\n                $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;\n            }\n            if ($$products[index].id === $lastClone.id) {\n                //if( $$products[index] === $$products[4] ) {\n                console.log($$products[index]);\n                $productsSlider.style.transition = 'none';\n                index = $$products.length - 2;\n                $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;\n            }\n        });\n        const moveToNextProduct = () => {\n            $$products = getProducts();\n            if (index >= $$products.length - 1)\n                return;\n            //if( index >= $$products.length - 1 ) return;\n            index++;\n            $productsSlider.style.transition = '150ms ease-out';\n            $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;\n        };\n        const moveToPrevProduct = () => {\n            if (index <= 0)\n                return;\n            index--;\n            $productsSlider.style.transition = '150ms ease-out';\n            $productsSlider.style.transform = `translateX(${-productWidth * index}px)`;\n        };\n        $nextButton === null || $nextButton === void 0 ? void 0 : $nextButton.addEventListener('click', moveToNextProduct);\n        $prevButton === null || $prevButton === void 0 ? void 0 : $prevButton.addEventListener('click', moveToPrevProduct);\n    }\n}\nconst $productsSlider = document.querySelector('.products-slider');\nif ($productsSlider) {\n    nextPrevButtons();\n}\n\n\n//# sourceURL=webpack:///./template-parts/components/atoms/next-prev-button/next-prev-button.ts?");

/***/ })

/******/ });