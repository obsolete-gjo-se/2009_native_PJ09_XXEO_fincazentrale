// JavaScript Document
/* DWScroller Dan Webb, Vivabit Sept 2005

 * Bashed about messily for @media 2006 site

 * Requires: lib.js

 */

 

 var DWScroller = {

	scrollClass : "scroller",

	buttonClass : "scrollBtn",

	styleSheetPath : "scroller.css",

	Scroller : function(obj) {

		var currentLeft = 0, vel = 0, targetLeft = 0, img = obj.getElementsByTagName("img")[0];

		var imgWidth = img.parentNode.parentNode.offsetWidth;

		var acc = 3, deacc = 2, animating = false, leftBtn, rightBtn;

		var images = img.parentNode.parentNode.parentNode;

		var scroller = this;

		

		function getMaxWidth() {

			return imgWidth * (images.childNodes.length - 2) - images.parentNode.offsetWidth;

		}

		

		this.drawButtons = function() {

			leftBtn = document.createElement("div");

			rightBtn = document.createElement("div");

			var inner = obj.getElementsByTagName("div")[0];



			leftBtn.className = rightBtn.className = DWScroller.buttonClass;

			leftBtn.className += " left";

			rightBtn.className += " right";



			inner.appendChild(leftBtn);

			inner.appendChild(rightBtn);



			leftBtn.onmousedown = function() {

					animating=true;

					scroller.moveLeft();

			}

			

			leftBtn.onmouseup = rightBtn.onmouseup = function() {

				animating=false;

			}



			rightBtn.onmousedown = function() {

					animating=true;

					scroller.moveRight();

			}



			this.updateButtons();

		}



		this.updateButtons = function() {

			var maxWidth = getMaxWidth();

			leftBtn.style.display = (currentLeft == 0)?"none":"block";

			rightBtn.style.display = (currentLeft == -maxWidth)?"none":"block";

		}



		this.moveLeft = function() {

				currentLeft += 10;

				scroller.move();

				if (animating) setTimeout(scroller.moveLeft, 50);

				else {

					targetLeft = currentLeft + 20;

					scroller.dec();

				}

		}



		this.moveRight = function() {

				currentLeft -= 10;

				scroller.move();

				if (animating) setTimeout(scroller.moveRight, 50);

				else {

					targetLeft = currentLeft - 20;

					scroller.dec();

				}

		}



		this.dec = function() {

			if (animating) return;

			vel = Math.round((vel+(targetLeft-currentLeft)*1/acc)/deacc);

			currentLeft += vel;

			scroller.move();

			if (vel!=0) setTimeout(scroller.dec, 50);

			else {

				currentLeft = targetLeft;

				scroller.move();

			}

			scroller.updateButtons();

		}

		

		this.move = function() {

			var maxWidth = getMaxWidth();

			if (currentLeft > 0) currentLeft = 0;

			if (currentLeft < -maxWidth) currentLeft = -maxWidth;

			images.style.left = currentLeft + "px";

		}



		this.drawButtons();

	},

	init : function() {

		if (document.getElementsByTagName && !document.all) {

			// apply scroller stylesheet

			document.write("<link rel='stylesheet' href='../" + this.styleSheetPath + "' type='text/css' />");

			

			// find scroller elements

			addLoadEvent(function() {

				var divs = document.getElementsByTagName("DIV");

				for (var i = 0; i < divs.length; i++) {

					if (divs[i].className.indexOf(DWScroller.scrollClass)>=0)

						new DWScroller.Scroller(divs[i]);

				}

			});

			

			

		}

	}

}



DWScroller.init();
