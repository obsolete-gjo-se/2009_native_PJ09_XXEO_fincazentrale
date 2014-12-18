// JavaScript Document
function addLoadEvent(func) {

  var oldonload = window.onload;

  if (typeof window.onload != 'function') {

    window.onload = func;

  } else {

    window.onload = function() {

      oldonload();

      func();

    }

  }

}



function $() {

  var elements = [];

  for (var i = 0; i < arguments.length; i++) {

    var element = arguments[i];

    if (typeof element == 'string')

      element = document.getElementById(element);

    if (arguments.length == 1) return element;

    elements.push(element);

  }

  return elements;

}



// Iterations and array funcs

Array.each = function(a, func) { for (var i = 0; i < a.length; i++) func(a[i], i); return a }



Array.select = function(a, func) { 

	var arr = []; 

	Array.each(a, function(e, i) {if (func(e, i)) arr.push(e)});

	return arr; 

}



Array.collect = function(a, func) {

	var arr = [];

	Array.each(a, function(e, i) {var r = func(e, i); if (r) arr.push(r)});

	return arr; 

}



Array.prototype.contains = function(t) {

	for (var i = 0; i < this.length; i++) if (t == this[i]) return true;

	return false;

}



Object.keys = function(o) {

	var keys = [];

	for (var key in o) keys.push(key);

	return keys; 

}



Object.each = function(o, func) { for (var key in o) func(o[i], key); return o }