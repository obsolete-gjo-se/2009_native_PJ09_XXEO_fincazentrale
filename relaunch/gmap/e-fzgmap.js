/* <![CDATA[ */
			
//Variablendeklaraion:
// _mSvgEnabled = true ;
// _mSvgForced  = true ;
// var setMarker = true;
// var center ;
// var circle ;
// var radius ;
// var marker = [] ;
// var poly = [] ;
// var line ;
var map, cgc, mm, icon, gicon, oicon;
var oMarker = [];
var divId 		= "e-fzGmap";
var startlat     = "51";
var startlon     = "10"; 
var startzoom    = 5;       

//var objlat     = "39.3625";
//var objlon     = "2.9234"; 
//var obj2lat     = "39.3625";
//var obj2lon     = "2.9400"; 
//var text 	= "Hallo Welt"

//###############################################################################

//Alle punkte auf Null setzen
point =  function()
{
	this.id = null;
	this.name = null;
	this.type = null;
	this.lat = null;
	this.lng = null;
	this.description = null;
}
	
// Karte laden:
function initialize() // Funktionsaufruf nach dem Laden der Seite
{
	if (GBrowserIsCompatible())
	{
		map = new GMap2(document.getElementById(divId));
		map.setCenter(new GLatLng(startlat, startlon), startzoom);
		map.setUIToDefault();
		_mPreferMetric = true; 
		map.addControl(new GOverviewMapControl());
		map.enableScrollWheelZoom();
		cgc = new GClientGeocoder();
		mm = new GMarkerManager(map);
		icon = new GIcon();
		icon.image = "http://labs.google.com/ridefinder/images/mm_20_red.png";
		icon.shadow = "http://labs.google.com/ridefinder/images/mm_20_shadow.png";
		icon.iconSize = new GSize(15, 20);
		icon.shadowSize = new GSize(15, 20);
		icon.iconAnchor = new GPoint(6, 20);
		gicon = new GIcon(icon);
		gicon.image = "http://labs.google.com/ridefinder/images/mm_20_orange.png";
		gicon.iconAnchor = new GPoint(-20, 20);
		// ########################################Noch nicht verstanden: BEGINN###############################################
		GEvent.addListener
		( 
	 		map, "click", function(overlay,latlng) // map ist klar, click ist klar, übergebene Parameter overlay und latlng sind unklar
			{ 
				setMapCenter(latlng,100) 
				document.getElementById("umks_ort").value = ""; // umks_ort ist die ID von der Form
			}
		);
		// ########################################Noch nicht verstanden: ENDE###############################################
	}
}

// Das sind zuweisungen an geladene Objekte aus zB Datenbank)
function loadObjects(objects)
{
	var i, markerOptions, newMarker;
	for(i = 0; i < oMarker.length; i++) // vorhandene Marker werden gelöscht
	{
		map.removeOverlay(oMarker[n]);
	}
	oMarker = [];
  // Erstellt das Markierungssymbol für das Ferienobjekt
	oicon = new GIcon();
	oicon.image = "http://maps.google.com/mapfiles/kml/pal5/icon14.png"; 
	oicon.shadow = "";
	oicon.iconSize = new google.maps.Size(32, 32);
	oicon.shadowSize = new google.maps.Size(1, 1);
	oicon.iconAnchor = new google.maps.Point(16, 32);
	oicon.infoWindowAnchor = new google.maps.Point(16, 0);

	for(i = 0; i < objects.length; i++) // Für jedes eingelesene Objekt wird ein Marker erstellt
	{
    	markerOptions = { icon:oicon, draggable: false, title: objects[i].name };
		newMarker = new GMarker(new GLatLng(objects[i].lat,objects[i].lng), markerOptions);
		GEvent.addListener
		(
		 	newMarker, 'click', function()
			{
				newMarker.openInfoWindowHtml('<b>' + n + '</b>');
			}
		);
// ########################################Noch nicht verstanden: BEGINN###############################################				
	oMarker[i] = newMarker;
	oMarker[i] = getNewMarker(objects[i].lat, objects[i].lng,markerOptions, objects[i].seourl); // Funktionsaufruf - getNewMarker()
// ########################################Noch nicht verstanden: ENDE###############################################
	}
	mm.addMarkers(oMarker,0,17); // Markermanager: alle übergebenen im Zoombereich
	mm.refresh(); // Aufruf für MM notwendig
}
// ########################################Noch nicht verstanden: BEGINN###############################################	
// hier verschließt sich mir der Grund der Funktion: kann das heißen, dass dem newMarker aus Funktion davor noch eine URL zugteilt wird?
function getNewMarker(lng, lt, op, seourl) // lat, long, optionen OK, was ist seourl?
{
	var newMarker;
	newMarker = new GMarker(new GLatLng(lng,lt), op);
	GEvent.addListener
	(
	 	newMarker, 'click', function()
		{
			document.location = seourl; // laut selfhtml falsch, weil location unter window gehört
		}
	);
    return newMarker; // gibt den Wert an loadObjects zurück
}
// ########################################Noch nicht verstanden: ENDE###############################################

// ######################################## UNGEPRÜFT ###############################################

function draw()
{
	var bounds ;
	var html = '' ;
	poly = [] ;
	for(var i = 0 ; i < marker.length ;i++)
	{
		poly.push(marker[i].getPoint());
		html += marker[i].getPoint().toUrlValue() + "<br>\n" ;
	}
	if(line)
	{
		map.removeOverlay(line);
	}
	poly.push(marker[0].getPoint());
	html += marker[0].getPoint().toUrlValue() + "<br>\n";
	line = new google.maps.Polyline(poly,'#CC6600', 3, 1);
	map.addOverlay(line);
	html = "Polygon Coordinates:<br>\n" + html + "<br>";
	return ( poly )
}

function drawCircle()
{
	for(var n = 0 ; n < marker.length ; n++)
	{
		map.removeOverlay(marker[n]);
	}
	marker = [];
	var points = [];
	var point = center.getPoint();
	var lat = point.lat();
	var lng = point.lng();
	if (center.oldpoint) // Bewege den Kreis wenn centerpoint sich bewegt
	{
  		var p = radius.getPoint() ;
		var x = point.lat() - center.oldpoint.lat();
  		var y = point.lng() - center.oldpoint.lng();
		radius.setPoint( new google.maps.LatLng( p.lat() + x, p.lng() + y) );
	}
	center.oldpoint = point;
	var Cradius = point.distanceFrom(radius.getPoint()) * 0.000621371192;
	var b = radius.getPoint();
	var meters = distance(point.lat(),point.lng(),b.lat(),b.lng());
	var Ccolor = 'red'; // color
	var Cwidth = 3; // width pixels
	var d2r = Math.PI / 180;
	var r2d = 180 / Math.PI;
	var Clat = (Cradius/3963) * r2d;
	var Clng = Clat/Math.cos(lat*d2r);
	var Cpoints = [];
	var list = '';
	var pointsAnz = 60;
	for (var i = 0 ; i < pointsAnz+1 ; i++)
	{
		var theta = Math.PI * (i/(pointsAnz/2));
		Cx = lng + (Clng * Math.cos(theta));
		Cy = lat + (Clat * Math.sin(theta));
		Cpoints.push(new google.maps.LatLng(Cy,Cx));
		points.push(new google.maps.LatLng(Cy,Cx));
	}
	/* add kreis markers*/
	for(var n = 0 ; n < (points.length -1) ; n++)
	{
		marker[n] = new google.maps.Marker(points[n], {icon:icon, draggable: false, title: n});
		//map.addOverlay(marker[n]);
		marker[n].enableDragging();
		google.maps.Event.addListener(marker[n],'dragend',function() {draw()});
	}
	var poly = draw();
	map.setCenter(center.getPoint(), map.getBoundsZoomLevel(getMBR( poly )));
	/*document.getElementById("distance").innerHTML = "Radius Information<br>Miles:" + Math.round(Cradius * 100)/100 +
	"<br>Kilometer: " + Math.round(meters)/1000 + "<br>Center Koordinaten: " + Math.round(point.lat()*10000)/10000 + "," + Math.round(point.lng()*10000)/10000 ;*/
	document.getElementById("umks_radius").value = Math.round(meters/1000);
	document.getElementById("umks_lat").value = Math.round(point.lat()*10000)/10000;
	document.getElementById("umks_lng").value = Math.round(point.lng()*10000)/10000;
}

/* ]]> */			