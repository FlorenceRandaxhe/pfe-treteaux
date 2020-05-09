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

/***/ "./node_modules/in-view/dist/in-view.min.js":
/*!**************************************************!*\
  !*** ./node_modules/in-view/dist/in-view.min.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*!
 * in-view 0.6.1 - Get notified when a DOM element enters or exits the viewport.
 * Copyright (c) 2016 Cam Wiegert <cam@camwiegert.com> - https://camwiegert.github.io/in-view
 * License: MIT
 */
!function(t,e){ true?module.exports=e():undefined}(this,function(){return function(t){function e(r){if(n[r])return n[r].exports;var i=n[r]={exports:{},id:r,loaded:!1};return t[r].call(i.exports,i,i.exports,e),i.loaded=!0,i.exports}var n={};return e.m=t,e.c=n,e.p="",e(0)}([function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}var i=n(2),o=r(i);t.exports=o["default"]},function(t,e){function n(t){var e=typeof t;return null!=t&&("object"==e||"function"==e)}t.exports=n},function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}Object.defineProperty(e,"__esModule",{value:!0});var i=n(9),o=r(i),u=n(3),f=r(u),s=n(4),c=function(){if("undefined"!=typeof window){var t=100,e=["scroll","resize","load"],n={history:[]},r={offset:{},threshold:0,test:s.inViewport},i=(0,o["default"])(function(){n.history.forEach(function(t){n[t].check()})},t);e.forEach(function(t){return addEventListener(t,i)}),window.MutationObserver&&addEventListener("DOMContentLoaded",function(){new MutationObserver(i).observe(document.body,{attributes:!0,childList:!0,subtree:!0})});var u=function(t){if("string"==typeof t){var e=[].slice.call(document.querySelectorAll(t));return n.history.indexOf(t)>-1?n[t].elements=e:(n[t]=(0,f["default"])(e,r),n.history.push(t)),n[t]}};return u.offset=function(t){if(void 0===t)return r.offset;var e=function(t){return"number"==typeof t};return["top","right","bottom","left"].forEach(e(t)?function(e){return r.offset[e]=t}:function(n){return e(t[n])?r.offset[n]=t[n]:null}),r.offset},u.threshold=function(t){return"number"==typeof t&&t>=0&&t<=1?r.threshold=t:r.threshold},u.test=function(t){return"function"==typeof t?r.test=t:r.test},u.is=function(t){return r.test(t,r)},u.offset(0),u}};e["default"]=c()},function(t,e){"use strict";function n(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(e,"__esModule",{value:!0});var r=function(){function t(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}return function(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),e}}(),i=function(){function t(e,r){n(this,t),this.options=r,this.elements=e,this.current=[],this.handlers={enter:[],exit:[]},this.singles={enter:[],exit:[]}}return r(t,[{key:"check",value:function(){var t=this;return this.elements.forEach(function(e){var n=t.options.test(e,t.options),r=t.current.indexOf(e),i=r>-1,o=n&&!i,u=!n&&i;o&&(t.current.push(e),t.emit("enter",e)),u&&(t.current.splice(r,1),t.emit("exit",e))}),this}},{key:"on",value:function(t,e){return this.handlers[t].push(e),this}},{key:"once",value:function(t,e){return this.singles[t].unshift(e),this}},{key:"emit",value:function(t,e){for(;this.singles[t].length;)this.singles[t].pop()(e);for(var n=this.handlers[t].length;--n>-1;)this.handlers[t][n](e);return this}}]),t}();e["default"]=function(t,e){return new i(t,e)}},function(t,e){"use strict";function n(t,e){var n=t.getBoundingClientRect(),r=n.top,i=n.right,o=n.bottom,u=n.left,f=n.width,s=n.height,c={t:o,r:window.innerWidth-u,b:window.innerHeight-r,l:i},a={x:e.threshold*f,y:e.threshold*s};return c.t>e.offset.top+a.y&&c.r>e.offset.right+a.x&&c.b>e.offset.bottom+a.y&&c.l>e.offset.left+a.x}Object.defineProperty(e,"__esModule",{value:!0}),e.inViewport=n},function(t,e){(function(e){var n="object"==typeof e&&e&&e.Object===Object&&e;t.exports=n}).call(e,function(){return this}())},function(t,e,n){var r=n(5),i="object"==typeof self&&self&&self.Object===Object&&self,o=r||i||Function("return this")();t.exports=o},function(t,e,n){function r(t,e,n){function r(e){var n=x,r=m;return x=m=void 0,E=e,w=t.apply(r,n)}function a(t){return E=t,j=setTimeout(h,e),M?r(t):w}function l(t){var n=t-O,r=t-E,i=e-n;return _?c(i,g-r):i}function d(t){var n=t-O,r=t-E;return void 0===O||n>=e||n<0||_&&r>=g}function h(){var t=o();return d(t)?p(t):void(j=setTimeout(h,l(t)))}function p(t){return j=void 0,T&&x?r(t):(x=m=void 0,w)}function v(){void 0!==j&&clearTimeout(j),E=0,x=O=m=j=void 0}function y(){return void 0===j?w:p(o())}function b(){var t=o(),n=d(t);if(x=arguments,m=this,O=t,n){if(void 0===j)return a(O);if(_)return j=setTimeout(h,e),r(O)}return void 0===j&&(j=setTimeout(h,e)),w}var x,m,g,w,j,O,E=0,M=!1,_=!1,T=!0;if("function"!=typeof t)throw new TypeError(f);return e=u(e)||0,i(n)&&(M=!!n.leading,_="maxWait"in n,g=_?s(u(n.maxWait)||0,e):g,T="trailing"in n?!!n.trailing:T),b.cancel=v,b.flush=y,b}var i=n(1),o=n(8),u=n(10),f="Expected a function",s=Math.max,c=Math.min;t.exports=r},function(t,e,n){var r=n(6),i=function(){return r.Date.now()};t.exports=i},function(t,e,n){function r(t,e,n){var r=!0,f=!0;if("function"!=typeof t)throw new TypeError(u);return o(n)&&(r="leading"in n?!!n.leading:r,f="trailing"in n?!!n.trailing:f),i(t,e,{leading:r,maxWait:e,trailing:f})}var i=n(7),o=n(1),u="Expected a function";t.exports=r},function(t,e){function n(t){return t}t.exports=n}])});

/***/ }),

/***/ "./node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js":
/*!************************************************************************!*\
  !*** ./node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*! smooth-scroll v16.1.3 | (c) 2020 Chris Ferdinandi | MIT License | http://github.com/cferdinandi/smooth-scroll */
window.Element&&!Element.prototype.closest&&(Element.prototype.closest=function(e){var t,n=(this.document||this.ownerDocument).querySelectorAll(e),o=this;do{for(t=n.length;0<=--t&&n.item(t)!==o;);}while(t<0&&(o=o.parentElement));return o}),(function(){if("function"==typeof window.CustomEvent)return;function e(e,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var n=document.createEvent("CustomEvent");return n.initCustomEvent(e,t.bubbles,t.cancelable,t.detail),n}e.prototype=window.Event.prototype,window.CustomEvent=e})(),(function(){for(var r=0,e=["ms","moz","webkit","o"],t=0;t<e.length&&!window.requestAnimationFrame;++t)window.requestAnimationFrame=window[e[t]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[e[t]+"CancelAnimationFrame"]||window[e[t]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(e,t){var n=(new Date).getTime(),o=Math.max(0,16-(n-r)),a=window.setTimeout((function(){e(n+o)}),o);return r=n+o,a}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(e){clearTimeout(e)})})(),(function(e,t){ true?!(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = (function(){return t(e)}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)):undefined})("undefined"!=typeof global?global:"undefined"!=typeof window?window:this,(function(M){"use strict";var q={ignore:"[data-scroll-ignore]",header:null,topOnEmptyHash:!0,speed:500,speedAsDuration:!1,durationMax:null,durationMin:null,clip:!0,offset:0,easing:"easeInOutCubic",customEasing:null,updateURL:!0,popstate:!0,emitEvents:!0},I=function(){var n={};return Array.prototype.forEach.call(arguments,(function(e){for(var t in e){if(!e.hasOwnProperty(t))return;n[t]=e[t]}})),n},r=function(e){"#"===e.charAt(0)&&(e=e.substr(1));for(var t,n=String(e),o=n.length,a=-1,r="",i=n.charCodeAt(0);++a<o;){if(0===(t=n.charCodeAt(a)))throw new InvalidCharacterError("Invalid character: the input contains U+0000.");1<=t&&t<=31||127==t||0===a&&48<=t&&t<=57||1===a&&48<=t&&t<=57&&45===i?r+="\\"+t.toString(16)+" ":r+=128<=t||45===t||95===t||48<=t&&t<=57||65<=t&&t<=90||97<=t&&t<=122?n.charAt(a):"\\"+n.charAt(a)}return"#"+r},F=function(){return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight,document.body.offsetHeight,document.documentElement.offsetHeight,document.body.clientHeight,document.documentElement.clientHeight)},L=function(e){return e?(t=e,parseInt(M.getComputedStyle(t).height,10)+e.offsetTop):0;var t},x=function(e,t,n){0===e&&document.body.focus(),n||(e.focus(),document.activeElement!==e&&(e.setAttribute("tabindex","-1"),e.focus(),e.style.outline="none"),M.scrollTo(0,t))},H=function(e,t,n,o){if(t.emitEvents&&"function"==typeof M.CustomEvent){var a=new CustomEvent(e,{bubbles:!0,detail:{anchor:n,toggle:o}});document.dispatchEvent(a)}};return function(o,e){var b,a,A,O,C={};C.cancelScroll=function(e){cancelAnimationFrame(O),O=null,e||H("scrollCancel",b)},C.animateScroll=function(a,r,e){C.cancelScroll();var i=I(b||q,e||{}),c="[object Number]"===Object.prototype.toString.call(a),t=c||!a.tagName?null:a;if(c||t){var s=M.pageYOffset;i.header&&!A&&(A=document.querySelector(i.header));var n,o,u,l,m,d,f,h,p=L(A),g=c?a:(function(e,t,n,o){var a=0;if(e.offsetParent)for(;a+=e.offsetTop,e=e.offsetParent;);return a=Math.max(a-t-n,0),o&&(a=Math.min(a,F()-M.innerHeight)),a})(t,p,parseInt("function"==typeof i.offset?i.offset(a,r):i.offset,10),i.clip),y=g-s,v=F(),w=0,S=(n=y,u=(o=i).speedAsDuration?o.speed:Math.abs(n/1e3*o.speed),o.durationMax&&u>o.durationMax?o.durationMax:o.durationMin&&u<o.durationMin?o.durationMin:parseInt(u,10)),E=function(e){var t,n,o;l||(l=e),w+=e-l,d=s+y*(n=m=1<(m=0===S?0:w/S)?1:m,"easeInQuad"===(t=i).easing&&(o=n*n),"easeOutQuad"===t.easing&&(o=n*(2-n)),"easeInOutQuad"===t.easing&&(o=n<.5?2*n*n:(4-2*n)*n-1),"easeInCubic"===t.easing&&(o=n*n*n),"easeOutCubic"===t.easing&&(o=--n*n*n+1),"easeInOutCubic"===t.easing&&(o=n<.5?4*n*n*n:(n-1)*(2*n-2)*(2*n-2)+1),"easeInQuart"===t.easing&&(o=n*n*n*n),"easeOutQuart"===t.easing&&(o=1- --n*n*n*n),"easeInOutQuart"===t.easing&&(o=n<.5?8*n*n*n*n:1-8*--n*n*n*n),"easeInQuint"===t.easing&&(o=n*n*n*n*n),"easeOutQuint"===t.easing&&(o=1+--n*n*n*n*n),"easeInOutQuint"===t.easing&&(o=n<.5?16*n*n*n*n*n:1+16*--n*n*n*n*n),t.customEasing&&(o=t.customEasing(n)),o||n),M.scrollTo(0,Math.floor(d)),(function(e,t){var n=M.pageYOffset;if(e==t||n==t||(s<t&&M.innerHeight+n)>=v)return C.cancelScroll(!0),x(a,t,c),H("scrollStop",i,a,r),!(O=l=null)})(d,g)||(O=M.requestAnimationFrame(E),l=e)};0===M.pageYOffset&&M.scrollTo(0,0),f=a,h=i,c||history.pushState&&h.updateURL&&history.pushState({smoothScroll:JSON.stringify(h),anchor:f.id},document.title,f===document.documentElement?"#top":"#"+f.id),"matchMedia"in M&&M.matchMedia("(prefers-reduced-motion)").matches?x(a,Math.floor(g),!1):(H("scrollStart",i,a,r),C.cancelScroll(!0),M.requestAnimationFrame(E))}};var t=function(e){if(!e.defaultPrevented&&!(0!==e.button||e.metaKey||e.ctrlKey||e.shiftKey)&&"closest"in e.target&&(a=e.target.closest(o))&&"a"===a.tagName.toLowerCase()&&!e.target.closest(b.ignore)&&a.hostname===M.location.hostname&&a.pathname===M.location.pathname&&/#/.test(a.href)){var t,n;try{t=r(decodeURIComponent(a.hash))}catch(e){t=r(a.hash)}if("#"===t){if(!b.topOnEmptyHash)return;n=document.documentElement}else n=document.querySelector(t);(n=n||"#top"!==t?n:document.documentElement)&&(e.preventDefault(),(function(e){if(history.replaceState&&e.updateURL&&!history.state){var t=M.location.hash;t=t||"",history.replaceState({smoothScroll:JSON.stringify(e),anchor:t||M.pageYOffset},document.title,t||M.location.href)}})(b),C.animateScroll(n,a))}},n=function(e){if(null!==history.state&&history.state.smoothScroll&&history.state.smoothScroll===JSON.stringify(b)){var t=history.state.anchor;"string"==typeof t&&t&&!(t=document.querySelector(r(history.state.anchor)))||C.animateScroll(t,null,{updateURL:!1})}};C.destroy=function(){b&&(document.removeEventListener("click",t,!1),M.removeEventListener("popstate",n,!1),C.cancelScroll(),O=A=a=b=null)};return (function(){if(!("querySelector"in document&&"addEventListener"in M&&"requestAnimationFrame"in M&&"closest"in M.Element.prototype))throw"Smooth Scroll: This browser does not support the required JavaScript methods and browser APIs.";C.destroy(),b=I(q,e||{}),A=b.header?document.querySelector(b.header):null,document.addEventListener("click",t,!1),b.updateURL&&b.popstate&&M.addEventListener("popstate",n,!1)})(),C}}));
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || new Function("return this")();
} catch (e) {
	// This works if the window reference is available
	if (typeof window === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var smooth_scroll__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! smooth-scroll */ "./node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js");
/* harmony import */ var smooth_scroll__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(smooth_scroll__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _parts_Map_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./parts/Map.js */ "./resources/js/parts/Map.js");
/* harmony import */ var _parts_Nav_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./parts/Nav.js */ "./resources/js/parts/Nav.js");
/* harmony import */ var _parts_Dropdown_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./parts/Dropdown.js */ "./resources/js/parts/Dropdown.js");
/* harmony import */ var _parts_Tabs_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./parts/Tabs.js */ "./resources/js/parts/Tabs.js");
/* harmony import */ var _parts_Text_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./parts/Text.js */ "./resources/js/parts/Text.js");
/* harmony import */ var _parts_RestoModal_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./parts/RestoModal.js */ "./resources/js/parts/RestoModal.js");
/* harmony import */ var _parts_SearchModal_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./parts/SearchModal.js */ "./resources/js/parts/SearchModal.js");
/* harmony import */ var _parts_Reveal_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./parts/Reveal.js */ "./resources/js/parts/Reveal.js");









document.body.classList.add('body--js');
var reveal = new _parts_Reveal_js__WEBPACK_IMPORTED_MODULE_8__["default"](document.querySelector('body'));
var scroll = new smooth_scroll__WEBPACK_IMPORTED_MODULE_0___default.a('[data-scroll]');
var nav = new _parts_Nav_js__WEBPACK_IMPORTED_MODULE_2__["default"](document.querySelector('.header'));
var dropdown = new _parts_Dropdown_js__WEBPACK_IMPORTED_MODULE_3__["default"](document.querySelector('.nav'));
var search = new _parts_SearchModal_js__WEBPACK_IMPORTED_MODULE_7__["default"](document.querySelector('.search'));

if (document.querySelector('.aboutSalle')) {
  var text = new _parts_Text_js__WEBPACK_IMPORTED_MODULE_5__["default"](document.querySelector('.aboutSalle'));
}

if (document.querySelector('.renting__tab')) {
  var tab = new _parts_Tabs_js__WEBPACK_IMPORTED_MODULE_4__["default"](document.querySelector('.renting__tab'));
}

if (document.querySelector('.contact__mapContainer')) {
  var map = new _parts_Map_js__WEBPACK_IMPORTED_MODULE_1__["default"](document.querySelector('.contact__mapContainer'));
}

if (document.querySelector('.allRestos')) {
  var resto = new _parts_RestoModal_js__WEBPACK_IMPORTED_MODULE_6__["default"](document.querySelector('.allRestos'));
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
      mapboxgl.accessToken = 'pk.eyJ1IjoiZmxvcmVuY2VyYW5kYXhoZSIsImEiOiJjazl3ZmJ2azMwOGI5M2d1aGRldHlxMjJmIn0.l9b5ADWDn7OQ1D7Obndf0g';
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
      this.createMap(this.modals[i]);
      this.initMap(this.modals[i]);
    }
  }, {
    key: "closeModal",
    value: function closeModal(e, i) {
      e.preventDefault();
      this.modals[i].classList.remove('restoInfo--show');
      document.querySelector('body').classList.remove('layout--scrollblock');
      this.removeMap(this.modals[i]);
    }
  }, {
    key: "createMap",
    value: function createMap(modal) {
      this.mapContent = document.createElement('div');
      this.mapContent.setAttribute('class', 'restoInfo__map');
      this.mapContent.setAttribute('style', 'width: 100%; height: 200px');
      modal.querySelector('.restoInfo__container').appendChild(this.mapContent);
    }
  }, {
    key: "removeMap",
    value: function removeMap(modal) {
      modal.querySelector('.restoInfo__container').removeChild(this.mapContent);
    }
  }, {
    key: "initMap",
    value: function initMap(modal) {
      var _this2 = this;

      this.lat = parseFloat(modal.getAttribute('data-lat'));
      this.lng = parseFloat(modal.getAttribute('data-lng'));
      mapboxgl.accessToken = 'pk.eyJ1IjoiZmxvcmVuY2VyYW5kYXhoZSIsImEiOiJjazl3ZmJ2azMwOGI5M2d1aGRldHlxMjJmIn0.l9b5ADWDn7OQ1D7Obndf0g';
      this.map = new mapboxgl.Map({
        container: this.mapContent,
        center: {
          lat: this.lat,
          lng: this.lng
        },
        zoom: 15,
        style: 'mapbox://styles/florencerandaxhe/ck9oamfii0uix1iliyo6zezeg'
      });
      this.geojson = {
        type: 'FeatureCollection',
        features: [{
          type: 'Feature',
          geometry: {
            type: 'Point',
            coordinates: [5.693863, 50.737120]
          },
          properties: {
            title: 'Les Tréteaux - Centre Culturel de Visé',
            description: 'Visé',
            color: 'pink'
          }
        }, {
          type: 'Feature',
          geometry: {
            type: 'Point',
            coordinates: [this.lng, this.lat]
          },
          properties: {
            title: 'Restaurant',
            description: 'Visé',
            color: 'purple'
          }
        }]
      };
      this.geojson.features.forEach(function (marker) {
        _this2.mark = document.createElement('div');
        _this2.mark.className = 'restoInfo__marker restoInfo__marker--' + marker.properties.color;
        new mapboxgl.Marker(_this2.mark).setLngLat(marker.geometry.coordinates).addTo(_this2.map);
      });
    }
  }]);

  return RestoModal;
}();



/***/ }),

/***/ "./resources/js/parts/Reveal.js":
/*!**************************************!*\
  !*** ./resources/js/parts/Reveal.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Reveal; });
/* harmony import */ var in_view__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! in-view */ "./node_modules/in-view/dist/in-view.min.js");
/* harmony import */ var in_view__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(in_view__WEBPACK_IMPORTED_MODULE_0__);
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }



var Reveal = /*#__PURE__*/function () {
  function Reveal(el) {
    _classCallCheck(this, Reveal);

    this.el = el;
    this.inview = in_view__WEBPACK_IMPORTED_MODULE_0___default()('.hero').on('enter', function (el) {
      return el.classList.add('hero--visible');
    });
    this.inview = in_view__WEBPACK_IMPORTED_MODULE_0___default()('.featuredEvents').on('enter', function (el) {
      return el.classList.add('featuredEvents--visible');
    });
    this.inview = in_view__WEBPACK_IMPORTED_MODULE_0___default()('.reveal').on('enter', function (el) {
      return el.classList.add('reveal--visible');
    });
    this.update();
  }

  _createClass(Reveal, [{
    key: "update",
    value: function update() {
      this.inview.check();
    }
  }]);

  return Reveal;
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