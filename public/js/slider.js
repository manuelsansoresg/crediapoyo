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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/slider.js":
/*!********************************!*\
  !*** ./resources/js/slider.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$("#state").change(function () {
  var state = $('#state').val();
  $('#dependency').empty(); //limpiar las dependencias

  var url = '/get_dependency/' + state;
  axios.get(url).then(function (response) {
    var result = response.data;
    $('#dependency').prop("disabled", false);
    $('#alerta-cotizador').hide(1000);

    for (var i_town = 0; i_town < result.length; i_town++) {
      $("#dependency").append(new Option(result[i_town].name, result[i_town].mounth_rate));
    }

    cotizador();
  })["catch"](function (error) {}).then(function () {});
});
$("#dependency").change(function () {
  cotizador();
});
$('#cantidad').rangeslider({
  polyfill: false,
  onSlide: function onSlide(position, value) {
    $('#valor').html('$' + value);

    if ($('#dependency').val() === '') {
      $('#alerta-cotizador').show(1000);
    } else {
      $('#alerta-cotizador').hide(1000);
      cotizador();
    }
  }
});
$('#plazo').rangeslider({
  polyfill: false,
  onSlide: function onSlide(position, value) {
    $('#valor_plazo').html(value + ' quincenas');
    $('#semana_cat').html(value);

    if ($('#dependency').val() === '') {
      $('#alerta-cotizador').show(1000);
    } else {
      $('#alerta-cotizador').hide(1000);
      cotizador();
    } //total = Math.round(total,2);

  }
});

function cotizador() {
  var plazo = $('#plazo').val();
  var monto = $('#cantidad').val();
  var tasa_mensual = $('#dependency').val() / 100;
  var interes = monto * tasa_mensual * plazo / 2;
  var total_monto = monto / plazo;
  var total_interes = interes / plazo;
  var total_iva = total_interes * 0.16;
  var total = total_monto + total_iva + total_interes;
  $('#semanas').html(plazo);
  $('#abono').html('$' + number_format(total, 2) + ' MXN');
}

function number_format(amount, decimals) {
  amount += ''; // por si pasan un numero en vez de un string

  amount = parseFloat(amount.replace(/[^0-9\.]/g, '')); // elimino cualquier cosa que no sea numero o punto

  decimals = decimals || 0; // por si la variable no fue fue pasada
  // si no es un numero o es igual a cero retorno el mismo cero

  if (isNaN(amount) || amount === 0) return parseFloat(0).toFixed(decimals); // si es mayor o menor que cero retorno el valor formateado como numero

  amount = '' + amount.toFixed(decimals);
  var amount_parts = amount.split('.'),
      regexp = /(\d+)(\d{3})/;

  while (regexp.test(amount_parts[0])) {
    amount_parts[0] = amount_parts[0].replace(regexp, '$1' + ',' + '$2');
  }

  return amount_parts.join('.');
}

/***/ }),

/***/ 2:
/*!**************************************!*\
  !*** multi ./resources/js/slider.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\crediapoyo\resources\js\slider.js */"./resources/js/slider.js");


/***/ })

/******/ });