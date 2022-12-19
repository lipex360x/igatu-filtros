/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/Search.js":
/*!*******************************!*\
  !*** ./src/scripts/Search.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Search)
/* harmony export */ });
class Search {
  constructor() {
    this.typingTimer;
    this.previousValue;
    this.isSpinnerVisible = false;
    this.showOverlay = true;
    // this.menuSection = document.querySelector('.menu-section')
    // this.searchToggle = this.menuSection.querySelector('.search-toggle')

    this.searchOverlay = document.querySelector('.search-overlay');
    this.closeButton = document.querySelector('.search-close');
    this.searchField = document.querySelector('.search-field');
    this.searchSpiner = document.querySelector('.spinner-loader');
    this.searchResult = document.querySelector('.search-results');
    this.events();
  }
  events() {
    document.addEventListener('keydown', e => this.keyPressDispatcher(e));

    // this.searchToggle.addEventListener('click', () => this.openOverlay())
    this.closeButton.addEventListener('click', () => this.closeOverlay());
    this.searchField.addEventListener('keyup', () => this.typingLogic());
  }
  typingLogic = () => {
    if (this.searchField.value != this.previousValue) {
      if (!this.isSpinnerVisible) {
        this.searchSpiner.classList.add('show');
      }
      clearTimeout(this.typingTimer);
      if (this.searchField.value) {
        this.typingTimer = setTimeout(this.getResults, 600);
        this.searchResult.innerHTML = "<div class='spinner-loader show'></div>";
      } else {
        this.searchResult.innerHTML = "";
      }
    }
    this.previousValue = this.searchField.value;
  };
  openOverlay = () => {
    this.showOverlay = true;
    document.body.style.overflow = 'hidden';
    this.searchOverlay.classList.add('on');
    setTimeout(() => this.searchField.focus(), 301);
  };
  closeOverlay = () => {
    this.showOverlay = false;
    document.body.style.overflow = 'initial';
    this.searchOverlay.classList.remove('on');
    this.searchField.value = '';
  };
  getResults = () => {
    this.searchSpiner.classList.remove('show');
    this.searchResult.innerHTML = "<p>Results</p>";
  };
  keyPressDispatcher = e => {
    if (e.keyCode == 83 && document.activeElement.tagName != 'INPUT' && document.activeElement.tagName != 'TEXTAREA') this.openOverlay();
    if (e.keyCode == 27 && this.showOverlay) this.closeOverlay();
  };
}

/***/ }),

/***/ "./src/scripts/index.js":
/*!******************************!*\
  !*** ./src/scripts/index.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Search__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Search */ "./src/scripts/Search.js");

const search = new _Search__WEBPACK_IMPORTED_MODULE_0__["default"]();

/***/ }),

/***/ "./src/styles/_index.scss":
/*!********************************!*\
  !*** ./src/styles/_index.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

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
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
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
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_index_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/_index.scss */ "./src/styles/_index.scss");
/* harmony import */ var _scripts_index__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/index */ "./src/scripts/index.js");


})();

/******/ })()
;
//# sourceMappingURL=index.js.map