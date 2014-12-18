// JavaScript Document

/* ImageGallery Dan Webb, Vivabit Jan 2006

 * Requires: lib.js

 */

 

 var ImageGallery = {

 	thumbId : "thumbs",

 	imgId : "photo_img",

 	imagePath : "images/ly/",

 	init : function() {

 		addLoadEvent(function() {

		 	if (!document.getElementById) return;

		 	var thumbs = document.getElementById(ImageGallery.thumbId).getElementsByTagName("A");

		 	Array.each(thumbs, function(thumb) {

		 		thumb.onclick = function() {

		 			$(ImageGallery.imgId).src = ImageGallery.imagePath + this.href.replace(/.*photo=(.*)#.*/, "$1.jpg");

		 			return false;

		 		}

		 	});

		 });

 	}

 }

 

 ImageGallery.init();