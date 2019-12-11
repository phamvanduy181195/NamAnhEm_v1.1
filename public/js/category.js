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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/category.js":
/*!*****************************************!*\
  !*** ./resources/assets/js/category.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  //select type category in page index
  $('#category-select-type').on('change', function () {
    var categoryType = $(this).val();
    $.ajax({
      url: CMS_URL + '/admin/category/get-item',
      type: "GET",
      data: {
        type: categoryType
      },
      success: function success(data) {
        if (data.status.code == 200) {
          $('#content-category-table').html(data.response);
        }
      },
      errors: function errors(response) {
        console.log(response);
      }
    });
  }); //submit form index category

  $('#submit-category-index').on('click', function () {
    $.ajax({
      url: CMS_URL + '/admin/category/update-category',
      type: 'POST',
      data: $('#form-category-index').serialize(),
      success: function success(data) {
        swal('', data.status.message, data.status.message_type);
      },
      errors: function errors(response) {
        console.log(response);
      }
    });
  });
  $('#btn-add-category').on('click', function () {
    window.location.href = $(this).data('url');
  }); //hidden input

  $('#input-type-category').css('display', 'none'); //category select type

  $('#cb-type-category').on('change', function () {
    select = $('#sl-type-category').selectize();
    select = select[0].selectize;

    if ($('#cb-type-category').is(":checked")) {
      $('#input-type-category').css('display', 'block');
      $('#text-type').attr('name', 'type');
      $('#sl-type-category').removeAttr('name');
      select.disable();
    } else {
      select.enable();
      $('#input-type-category').css('display', 'none');
      $('#sl-type-category').attr('name', 'type');
      $('#text-type').removeAttr('name');
    }
  }); //delete category

  $(document).on('click', '.btnDeleteCategory', function () {
    $trId = $(this).data('trId');
    swal({
      title: "Are you sure?",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn btn-danger",
      confirmButtonText: "Yes, delete it!",
      closeOnConfirm: false
    }, function () {
      swal("Deleted!", "Delete successfully!", "success");
      $('#' + $trId).remove();
    });
  });
});

/***/ }),

/***/ 4:
/*!***********************************************!*\
  !*** multi ./resources/assets/js/category.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\NamAnhEm\ProjectSample\larabase\resources\assets\js\category.js */"./resources/assets/js/category.js");


/***/ })

/******/ });