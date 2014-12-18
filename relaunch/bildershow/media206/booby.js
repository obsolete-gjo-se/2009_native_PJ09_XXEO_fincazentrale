// JavaScript Document
function clickArea(tagName, className) {

	var els = document.getElementsByTagName(tagName);

	for (var i = 0; i < els.length; i++) if (els[i].className.indexOf(className)>=0) {

		els[i].onmouseover=function() {this.className+=" soopahover"}

		els[i].onmouseout=function() {this.className=this.className.replace(new RegExp(" soopahover\\b"), "")}

		els[i].onclick = function () {location.href = this.getElementsByTagName("a")[0].href}

   }

}



window.onload = function() {

   clickArea("div", "soopalink");

}