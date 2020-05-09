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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _parts_Map_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./parts/Map.js */ "./resources/js/parts/Map.js");
/* harmony import */ var _parts_Nav_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./parts/Nav.js */ "./resources/js/parts/Nav.js");
/* harmony import */ var _parts_Dropdown_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./parts/Dropdown.js */ "./resources/js/parts/Dropdown.js");
/* harmony import */ var _parts_Tabs_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./parts/Tabs.js */ "./resources/js/parts/Tabs.js");
/* harmony import */ var _parts_Text_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./parts/Text.js */ "./resources/js/parts/Text.js");
/* harmony import */ var _parts_RestoModal_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./parts/RestoModal.js */ "./resources/js/parts/RestoModal.js");
/* harmony import */ var _parts_SearchModal_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./parts/SearchModal.js */ "./resources/js/parts/SearchModal.js");







var nav = new _parts_Nav_js__WEBPACK_IMPORTED_MODULE_1__["default"](document.querySelector('.header'));
var dropdown = new _parts_Dropdown_js__WEBPACK_IMPORTED_MODULE_2__["default"](document.querySelector('.nav'));
var search = new _parts_SearchModal_js__WEBPACK_IMPORTED_MODULE_6__["default"](document.querySelector('.search'));

if (document.querySelector('.aboutSalle')) {
  var text = new _parts_Text_js__WEBPACK_IMPORTED_MODULE_4__["default"](document.querySelector('.aboutSalle'));
}

if (document.querySelector('.renting__tab')) {
  var tab = new _parts_Tabs_js__WEBPACK_IMPORTED_MODULE_3__["default"](document.querySelector('.renting__tab'));
}

if (document.querySelector('.contact__mapContainer')) {
  var map = new _parts_Map_js__WEBPACK_IMPORTED_MODULE_0__["default"](document.querySelector('.contact__mapContainer'));
}

if (document.querySelector('.allRestos')) {
  var resto = new _parts_RestoModal_js__WEBPACK_IMPORTED_MODULE_5__["default"](document.querySelector('.allRestos'));
}

/***/ }),

/***/ "./resources/js/parts/Dropdown.js":
/*!****************************************!*\
  !*** ./resources/js/parts/Dropdown.js ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Dropdown; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Dropdown = /*#__PURE__*/function () {
  function Dropdown(el) {
    _classCallCheck(this, Dropdown);

    this.isVisible = false;
    this.el = el;
    this.getElements();
    this.setEvents();
  }

  _createClass(Dropdown, [{
    key: "getElements",
    value: function getElements() {
      this.dropdown = this.el.querySelectorAll('.nav__item--dropdown');
      this.isMobile = document.documentElement.clientWidth < 760;
    }
  }, {
    key: "setEvents",
    value: function setEvents() {
      var _this = this;

      this.el.classList.add('nav--js');

      var _loop = function _loop(i) {
        _this.dropdown[i].querySelector('.nav__link--dropdown').addEventListener('click', function (event) {
          return _this.dropdownToggle(event, i);
        });
      };

      for (var i = 0; i < this.dropdown.length; i++) {
        _loop(i);
      }
    }
  }, {
    key: "dropdownToggle",
    value: function dropdownToggle(event, i) {
      event.preventDefault();
      if (!this.isMobile) return;

      if (this.isVisible) {
        this.hideNav(i);
      } else {
        this.showNav(i);
      }
    }
  }, {
    key: "hideNav",
    value: function hideNav(i) {
      this.isVisible = false;
      this.dropdown[i].querySelector('.nav__list_sub').classList.remove('nav__list_sub--show');
    }
  }, {
    key: "showNav",
    value: function showNav(i) {
      this.isVisible = true;
      this.dropdown[i].querySelector('.nav__list_sub').classList.add('nav__list_sub--show');
    }
  }]);

  return Dropdown;
}();



/***/ }),

/***/ "./resources/js/parts/Map.js":
/*!***********************************!*\
  !*** ./resources/js/parts/Map.js ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Map; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Map = /*#__PURE__*/function () {
  function Map(el) {
    _classCallCheck(this, Map);

    this.el = el;
    this.getElements();
    this.initMap();
  }

  _createClass(Map, [{
    key: "getElements",
    value: function getElements() {
      this.mapContent = this.el.querySelector('#map');
      this.lat = parseFloat(this.el.getAttribute('data-lat'));
      this.lng = parseFloat(this.el.getAttribute('data-lng'));
    }
  }, {
    key: "initMap",
    value: function initMap() {
      this.map = new mapboxgl.Map({
        container: this.mapContent,
        center: {
          lat: this.lat,
          lng: this.lng
        },
        zoom: 15,
        style: 'mapbox://styles/florencerandaxhe/ck9oamfii0uix1iliyo6zezeg'
      });
      this.marker = new mapboxgl.Marker().setLngLat({
        lat: this.lat,
        lng: this.lng
      }).addTo(this.map);
    }
  }]);

  return Map;
}();



/***/ }),

/***/ "./resources/js/parts/Nav.js":
/*!***********************************!*\
  !*** ./resources/js/parts/Nav.js ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Nav; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Nav = /*#__PURE__*/function () {
  function Nav(el) {
    _classCallCheck(this, Nav);

    this.isVisible = false;
    this.navVisible = false;
    this.el = el;
    this.getElements();
    this.setEvents();
  }

  _createClass(Nav, [{
    key: "getElements",
    value: function getElements() {
      this.burger = this.el.querySelector('.header__responsive');
      this.isMobile = document.documentElement.clientWidth < 760;
    }
  }, {
    key: "setEvents",
    value: function setEvents() {
      var _this = this;

      this.burger.addEventListener('click', function (event) {
        return _this.eventToggle(event);
      });
    }
  }, {
    key: "eventToggle",
    value: function eventToggle(event) {
      event.preventDefault();
      if (!this.isMobile) return;

      if (this.isVisible) {
        this.hide();
      } else {
        this.show();
      }
    }
  }, {
    key: "show",
    value: function show() {
      this.el.classList.add('header--show');
      this.isVisible = true;
      document.querySelector('body').classList.add('layout--scrollblock');
    }
  }, {
    key: "hide",
    value: function hide() {
      this.el.classList.remove('header--show');
      this.isVisible = false;
      document.querySelector('body').classList.remove('layout--scrollblock');
    }
  }]);

  return Nav;
}();



/***/ }),

/***/ "./resources/js/parts/RestoModal.js":
/*!******************************************!*\
  !*** ./resources/js/parts/RestoModal.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return RestoModal; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var RestoModal = /*#__PURE__*/function () {
  function RestoModal(el) {
    _classCallCheck(this, RestoModal);

    this.el = el;
    this.getElements();
    this.setEvents();
  }

  _createClass(RestoModal, [{
    key: "getElements",
    value: function getElements() {
      this.links = this.el.querySelectorAll('.restoCard__link');
      this.modals = this.el.querySelectorAll('.restoInfo');
      this.overlay = this.el.querySelectorAll('.restoInfo__hide');
      this.close = this.el.querySelectorAll('.restoInfo__close');
    }
  }, {
    key: "setEvents",
    value: function setEvents() {
      var _this = this;

      var _loop = function _loop(i) {
        _this.links[i].addEventListener('click', function (e) {
          return _this.openModal(e, i);
        });
      };

      for (var i = 0; i < this.links.length; i++) {
        _loop(i);
      }

      var _loop2 = function _loop2(_i) {
        _this.overlay[_i].addEventListener('click', function (e) {
          return _this.closeModal(e, _i);
        });
      };

      for (var _i = 0; _i < this.overlay.length; _i++) {
        _loop2(_i);
      }

      var _loop3 = function _loop3(_i2) {
        _this.close[_i2].addEventListener('click', function (e) {
          return _this.closeModal(e, _i2);
        });
      };

      for (var _i2 = 0; _i2 < this.close.length; _i2++) {
        _loop3(_i2);
      }
    }
  }, {
    key: "openModal",
    value: function openModal(e, i) {
      e.preventDefault();
      document.querySelector('body').classList.add('layout--scrollblock');
      this.modals[i].classList.add('restoInfo--show');
    }
  }, {
    key: "closeModal",
    value: function closeModal(e, i) {
      e.preventDefault();
      this.modals[i].classList.remove('restoInfo--show');
      document.querySelector('body').classList.remove('layout--scrollblock');
    }
  }]);

  return RestoModal;
}();



/***/ }),

/***/ "./resources/js/parts/SearchModal.js":
/*!*******************************************!*\
  !*** ./resources/js/parts/SearchModal.js ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SearchModal; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var SearchModal = /*#__PURE__*/function () {
  function SearchModal(el) {
    _classCallCheck(this, SearchModal);

    this.el = el;
    this.getElements();
    this.setEvents();
  }

  _createClass(SearchModal, [{
    key: "getElements",
    value: function getElements() {
      this.link = this.el.querySelector('.search__link');
      this.modal = this.el.querySelector('.search__container');
      this.overlay = this.el.querySelector('.search__hide');
      this.close = this.el.querySelector('.search__close');
    }
  }, {
    key: "setEvents",
    value: function setEvents() {
      var _this = this;

      this.link.addEventListener('click', function (event) {
        return _this.openModal(event);
      });
      this.overlay.addEventListener('click', function (event) {
        return _this.closeModal(event);
      });
      this.close.addEventListener('click', function (event) {
        return _this.closeModal(event);
      });
    }
  }, {
    key: "openModal",
    value: function openModal(event) {
      event.preventDefault();
      document.querySelector('body').classList.add('layout--scrollblock');
      this.modal.classList.add('search__container--show');
    }
  }, {
    key: "closeModal",
    value: function closeModal(event) {
      event.preventDefault();
      document.querySelector('body').classList.remove('layout--scrollblock');
      this.modal.classList.remove('search__container--show');
    }
  }]);

  return SearchModal;
}();



/***/ }),

/***/ "./resources/js/parts/Tabs.js":
/*!************************************!*\
  !*** ./resources/js/parts/Tabs.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Tabs; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Tabs = /*#__PURE__*/function () {
  function Tabs(el) {
    _classCallCheck(this, Tabs);

    this.el = el;
    this.getElements();
    this.setEvent();
  }

  _createClass(Tabs, [{
    key: "getElements",
    value: function getElements() {
      this.tabLinks = document.querySelectorAll(".tabs__item");
      this.tabContents = document.querySelectorAll(".rentingInfo");
    }
  }, {
    key: "setEvent",
    value: function setEvent() {
      var _this = this;

      this.el.querySelector('.renting__intro').classList.remove('renting__intro--sticky');
      this.el.querySelector('.renting__content').classList.add('renting__content--js');
      this.tabLinks.forEach(function (tablink) {
        _this.setDefaultTab(tablink);

        tablink.addEventListener("click", function (e) {
          return _this.openTabs(e, tablink);
        });
      });
    }
  }, {
    key: "setDefaultTab",
    value: function setDefaultTab(tablink) {
      if (tablink.dataset.tab === "salle") {
        tablink.classList.add("tabs__item--active");
      }

      document.querySelector("#salle").classList.add("rentingInfo--active");
    }
  }, {
    key: "openTabs",
    value: function openTabs(e, tablink) {
      e.preventDefault();
      this.tab = tablink.dataset.tab;
      this.tabContents.forEach(function (tabContent) {
        tabContent.classList.remove("rentingInfo--active");
      });
      this.tabLinks.forEach(function (tabLink) {
        tabLink.classList.remove("tabs__item--active");
      });
      document.querySelector("#" + this.tab).classList.add("rentingInfo--active");
      tablink.classList.add("tabs__item--active");
    }
  }]);

  return Tabs;
}();



/***/ }),

/***/ "./resources/js/parts/Text.js":
/*!************************************!*\
  !*** ./resources/js/parts/Text.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Text; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Text = /*#__PURE__*/function () {
  function Text(el) {
    _classCallCheck(this, Text);

    this.el = el;
    this.getElements();
    this.setEvents();
  }

  _createClass(Text, [{
    key: "getElements",
    value: function getElements() {
      this.textPath = this.el.querySelector('#text-path');
    }
  }, {
    key: "setEvents",
    value: function setEvents() {
      var _this = this;

      console.log('test');
      window.addEventListener('scroll', function (e) {
        return _this.onScroll();
      });
    }
  }, {
    key: "updatePath",
    value: function updatePath(offset) {
      this.textPath.setAttribute('startOffset', offset);
    }
  }, {
    key: "onScroll",
    value: function onScroll() {
      var _this2 = this;

      requestAnimationFrame(function () {
        _this2.updatePath(window.scrollY - 1200);
      });
    }
  }]);

  return Text;
}();



/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\wamp64\www\pfe-treteaux\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\wamp64\www\pfe-treteaux\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });