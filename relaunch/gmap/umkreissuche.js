/* <![CDATA[ */	  

// Verstanden:
_mSvgEnabled = true ;
_mSvgForced  = true ;



var setMarker = true;
var center ;
var circle ;
var radius ;
var marker = [] ;
var poly = [] ;
var line ;
var geocoder ;
var icon ;
var gicon ;
var map ;
var oMarker = [];
var mm;

Point =  function(){
	this.id = null;
	this.name = null;
	this.type = null;
	this.lat = null;
	this.lng = null;
	this.description = null;
}

function umks_loadmap()
{

  map = new google.maps.Map2(document.getElementById("map"));

  mm = new google.maps.MarkerManager(map);

  var customUI = map.getDefaultUI();
  //customUI.maptypes.hybrid = false;
  map.setUI(customUI);
  map.disableScrollWheelZoom();

 var start = new google.maps.LatLng(51,10);
 map.setCenter(start, 5);

 /*map.addControl(new google.maps.LargeMapControl());
 map.addControl(new google.maps.MapTypeControl());
 map.addControl(new google.maps.ScaleControl()) ;
 map.addControl(new google.maps.OverviewMapControl()) ;*/
 
 geocoder = new google.maps.ClientGeocoder() ;

 var icon = new google.maps.Icon();
 icon.image = "http://labs.google.com/ridefinder/images/mm_20_red.png";
 icon.shadow = "http://labs.google.com/ridefinder/images/mm_20_shadow.png";
 icon.iconSize = new google.maps.Size(10, 20);
 icon.shadowSize = new google.maps.Size(4, 6);
 icon.iconAnchor = new google.maps.Point(6, 20);

 var gicon = new google.maps.Icon(icon);
 gicon.image = "http://labs.google.com/ridefinder/images/mm_20_orange.png";
 gicon.iconAnchor = new google.maps.Point(-20, 20);

//....................................................................................................................

  //loadObjects(objects);
  //drawGLL(objects);
  //drawList (objects);

  google.maps.Event.addListener(map, "click", function(overlay,latlng){
	setMapCenter(latlng,100)
	document.getElementById("umks_ort").value = "";
  });


}


function loadObjects(objects)
{
	//mm = new GMarkerManager(map);
	for(var n = 0 ; n < oMarker.length ; n++){
		map.removeOverlay( oMarker[n] ) ;
	}
	oMarker = [];

  // Erstellt das Markierungssymbol "tiny"
	var tinyIcon = new google.maps.Icon();
	tinyIcon.image = "http://maps.google.com/mapfiles/kml/pal5/icon14.png";
	tinyIcon.shadow = "";
	tinyIcon.iconSize = new google.maps.Size(32, 32);
	tinyIcon.shadowSize = new google.maps.Size(1, 1);
	tinyIcon.iconAnchor = new google.maps.Point(16, 32);
	tinyIcon.infoWindowAnchor = new google.maps.Point(16, 0);

	for(var n = 0 ; n < objects.length ; n++)
	{
	  // Richtet das GMarkerOptions-Objektliteral ein
    var markerOptions = { icon:tinyIcon, draggable: false, title: objects[n].name };
    
		/*var newMarker = new GMarker(new GLatLng(objects[n].lat,objects[n].lng), markerOptions);
				
		GEvent.addListener(newMarker, 'click', function() {
      newMarker.openInfoWindowHtml('<b>' + n + '</b>');
    });
		
		oMarker[n] = newMarker;*/
		
		oMarker[n] = getNewMarker(objects[n].lat, objects[n].lng,markerOptions, objects[n].seourl);
		
	}
	mm.addMarkers(oMarker,0,17);
	mm.refresh();
}

function getNewMarker(lng, lt, op, seourl){
  var newMarker = new google.maps.Marker(new google.maps.LatLng(lng,lt), op);
  google.maps.Event.addListener(newMarker, 'click', function() {
      document.location = seourl;
            
    });
    
  return newMarker;
}

// Setze...........................................................................................................

function draw()
{
 var bounds ;

 var html = '' ;

 poly = [] ;

 for(var i = 0 ; i < marker.length ;i++)
 {
  poly.push(marker[i].getPoint()) ;
  html += marker[i].getPoint().toUrlValue() + "<br>\n" ;
 }
 if(line)
 {
  map.removeOverlay(line) ;
 }

 poly.push(marker[0].getPoint()) ;

 html += marker[0].getPoint().toUrlValue() + "<br>\n" ;

 line = new google.maps.Polyline(poly,'#CC6600', 3, 1) ;
 map.addOverlay(line) ;

 html = "Polygon Coordinates:<br>\n" + html + "<br>" ;

 //document.getElementById("sidebar").innerHTML = html ;

 return ( poly )
 }

// Setze neuen Kreis.........................................................................................

function drawCircle()
{
 for(var n = 0 ; n < marker.length ; n++)
 {
  map.removeOverlay( marker[n] ) ;
 }

 marker = [] ;
 var points = [] ;
 var point = center.getPoint() ;
 var lat = point.lat() ;
 var lng = point.lng() ;
 if ( center.oldpoint )                 // Bewege den Kreis wenn centerpoint sich bewegt
 {
  var p = radius.getPoint() ;
  var x = point.lat() - center.oldpoint.lat() ;
  var y = point.lng() - center.oldpoint.lng() ;
  radius.setPoint( new google.maps.LatLng( p.lat() + x, p.lng() + y) ) ;
 }
 center.oldpoint = point ;

 var Cradius = point.distanceFrom(radius.getPoint()) * 0.000621371192 ;

 var b = radius.getPoint() ;

 var meters = distance(point.lat(),point.lng(),b.lat(),b.lng()) ;

 var Ccolor = 'red' ;               // color
 var Cwidth = 3 ;                       // width pixels
 var d2r = Math.PI/180 ;                // degrees zu radians
 var r2d = 180/Math.PI ;                // radians zu degrees
 var Clat = (Cradius/3963) * r2d ;      //  3963 als Erderadius

 var Clng = Clat/Math.cos(lat*d2r);
 var Cpoints = [] ;

 var list = '' ;
 var pointsAnz = 60;
 for (var i = 0 ; i < pointsAnz+1 ; i++)
 {
  var theta = Math.PI * (i/(pointsAnz/2)) ;
  Cx = lng + (Clng * Math.cos(theta)) ;
  Cy = lat + (Clat * Math.sin(theta)) ;
  Cpoints.push(new google.maps.LatLng(Cy,Cx)) ;

  points.push(new google.maps.LatLng(Cy,Cx)) ;
 }


/* add kreis markers*/

 for(var n = 0 ; n < (points.length -1) ; n++)
 {

  marker[n] = new google.maps.Marker(points[n], {icon:icon, draggable: false, title: n});
  //map.addOverlay(marker[n]);
  marker[n].enableDragging();
  google.maps.Event.addListener(marker[n],'dragend',function() {draw()});
 }


 var poly = draw() ;

 map.setCenter(center.getPoint(), map.getBoundsZoomLevel(getMBR( poly ))) ;

 //document.getElementById("distance").innerHTML = "Radius Information<br>Miles:" + Math.round(Cradius * 100)/100 + "<br>Kilometer: " + Math.round(meters)/1000 + "<br>Center Koordinaten: " + Math.round(point.lat()*10000)/10000 + "," + Math.round(point.lng()*10000)/10000 ;

 document.getElementById("umks_radius").value = Math.round(meters/1000);
 document.getElementById("umks_lat").value = Math.round(point.lat()*10000)/10000;
 document.getElementById("umks_lng").value = Math.round(point.lng()*10000)/10000;


}

// ######################################## noch nicht übernommen ###############################################


// Finde Adresse und nutze dazu geocoder...


function onChangeOrt(element,eventKeyCode) {

	  exlusiveKeys = " 9 13 16 17 18 33 34 35 36 0 "; //umgeben mit leerzeichen

	  if(exlusiveKeys.indexOf(" "+eventKeyCode+" ") < 0){

	    var func = function() {

	      //_LoadingImg = document.getElementById('PointLoading_' + rowIndex);
	      //_LoadingImg.src = "/backend/gfx/editor/loading.gif";

	    	var address = document.getElementById('umks_ort').value;
	      showAddress(address)


	    };

	    if ( element.zid ) {
	    
	      clearTimeout(element.zid);

	    }

	    element.zid = setTimeout(func,500);

	  }

	}

function onChangeRadius(element,eventKeyCode) {

    exlusiveKeys = " 9 13 16 17 18 33 34 35 36 0 65 190 188 110 "; //umgeben mit leerzeichen

    //alert(eventKeyCode);

    if((exlusiveKeys.indexOf(" "+eventKeyCode+" ") < 0) && parseFloat(element.value) > 0){

      //alert(parseFloat(element.value));

      element.value = element.value.replace(',','.');

      if(parseFloat(element.value) > 500)       
        document.getElementById('umks_radius').value = 500;
      else
        document.getElementById('umks_radius').value = parseFloat(element.value);

	    if(parseFloat(element.value) > 0){
	     var func = function() {
	       setMapCenter(center.getPoint());
	    }
       
    };

      if ( element.zid ) {      
        clearTimeout(element.zid);
      }

      element.zid = setTimeout(func,500);

    }
    
    

  }

function showAddress(address)
{

 geocoder.getLatLng( address, function(point)
 {
  if (!point)

  {
	  document.getElementById("adrressresponse").innerHTML = "Ort nicht gefunden";   
  } else
  {
 	setMapCenter(point);
  }
 }) ;



}




function setMapCenter(point){

   if (center)
   {
    map.removeOverlay( center ) ;
    map.removeOverlay( radius ) ;
   }
   miles = document.getElementById("umks_radius").value;
   
   var centerIcon = new google.maps.Icon(G_DEFAULT_ICON);   
   centerIcon.image = "http://maps.google.com/mapfiles/kml/pal5/icon13.png";
   centerIcon.iconSize = new google.maps.Size(32,32);
   
   center = new google.maps.Marker(point, { icon:centerIcon, draggable: true,  title: "Center"});
   center.enableDragging();
   map.addOverlay(center);
   google.maps.Event.addListener(center,'dragend',function() {drawCircle()});
       
   var radiusIcon = new google.maps.Icon(G_DEFAULT_ICON);   
   radiusIcon.image = "http://maps.google.com/mapfiles/kml/pal5/icon5.png";
   radiusIcon.iconSize = new google.maps.Size(32,32);

   var oldpoint = center.getPoint() ;

   radius = new google.maps.Marker(getRadius(miles,center), { icon:radiusIcon, draggable: true,  title: "Radius"});
   map.addOverlay(radius);
   radius.enableDragging();
   google.maps.Event.addListener(radius,'dragend',function() {drawCircle()});
   drawCircle( ) ;



}
// Kalkulation von Abstand...

function distance(lat1,lng1,lat2,lng2)
{
 var O = Math.PI/180 ;
 var b = lat1 * O ;
 var c = lat2 * O ;
 var d = b - c ;
 var e = (lng1 * O) - (lng2 * O) ;
 var f = 2 * Math.asin(Math.sqrt(Math.pow(Math.sin(d/2),2)+Math.cos(b)*Math.cos(c)*Math.pow(Math.sin(e/2),2)));
 var g = Math.round(f*6378137);
 return g
}

// Finde Radiuspunkte...

function getRadius( kilometers, center )
{
 var point = center.getPoint() ;
 var lat = point.lat() ;	
 var lng = point.lng() ;
 var d2r = Math.PI/180 ;    
 var r2d = 180/Math.PI ;                
 var Clat = (kilometers/6378) * r2d ;   
 var Clng = Clat/Math.cos(lat*d2r);
 Clng = lng + (Clng * Math.cos(0)) ;
 Clat = lat + (Clat * Math.sin(0)) ;
 return(new google.maps.LatLng(Clat,Clng)) ;
}

// Minimum Bounding Viereck...

function getMBR (points)
{
 var minx = 0;
 var miny = 0;
 var maxx = 0;
 var maxy = 0;

 if ( points.length < 4 )
 {
  return ( google.maps.LatLngBounds(new google.maps.Latlng(minx,miny), new google.maps.Latlng(maxx,maxy)) ) ;
 }

 minx = points[0].lat() ;
 miny = points[0].lng() ;
 maxx = points[0].lat() ;
 maxy = points[0].lng() ;

 for(var i = 1; i < points.length ; i++ )
 {
  if ( points[i].lat() > maxx )
  {
   maxx = points[i].lat() ;
  }
  if ( points[i].lat() < minx )
  {
   minx = points[i].lat() ;
  }
  if ( points[i].lng() > maxy )
  {
   maxy = points[i].lng() ;
  }
  if ( points[i].lng() < miny )
  {
   miny = points[i].lng() ;
  }
 }

 return ( new google.maps.LatLngBounds(new google.maps.LatLng(maxx,miny), new google.maps.LatLng(minx,maxy)) ) ;
}


function objRequest(lat,lng,rad){
	//alert(lat + " " + lng + " " + rad);

	$.get("objects.cfm", { lat: lat, lng: lng, rad: rad },
			  function(data){
				$("#list").html(data);
				loadObjects(objects);
			  }
	);

}

function clearMap(){
  map.clearOverlays();
  document.getElementById("umks_ort").value = '';
  document.getElementById("umks_radius").value = 100;
}

/* ]]> */

