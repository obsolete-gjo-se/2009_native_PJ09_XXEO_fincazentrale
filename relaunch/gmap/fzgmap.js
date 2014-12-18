
var id 		= "fzGmap";
var clat     = "39.3625";
var clon     = "2.9234"; 
var objlat     = "39.3625";
var objlon     = "2.9234"; 
var obj2lat     = "39.3625";
var obj2lon     = "2.9400"; 
var zoom    = 13;       
var text 	= "Hallo Welt"

function initialize() 
{
	if (GBrowserIsCompatible()) 
	{
       	var map = new GMap2(document.getElementById(id));
		map.setCenter(new GLatLng(clat, clon), zoom);
		map.setUIToDefault();
        //var customUI = map.getDefaultUI();
        //map.setUI(customUI);
		_mPreferMetric = true; 
		//map.addControl(new GScaleControl());
		map.addControl(new GOverviewMapControl());
		map.enableScrollWheelZoom();
		
		// Standartsymbol festlegen
		var greenIcon = new GIcon(G_DEFAULT_ICON);
        greenIcon.image = "http://www.fincazentrale.com/relaunch/gmap/green.png";
		markerOptions = { icon:greenIcon };
		
		//Position Marker festlegen
		var marker = new GLatLng(objlat, objlon);
		var mark = new GMarker(marker, markerOptions);
        map.addOverlay(mark);

		var marker2 = new GLatLng(obj2lat, obj2lon);
		var mark2 = new GMarker(marker2, markerOptions);
        map.addOverlay(mark2);
		
		//Infofenster
		var html   = "";
		html += "<div class='twGmapInfo'>";
		html += "  <p class='headline'>Google Map mit Marker und Infofenster</p>";
		html += "  <p class='img'>";
		html += "    <a href='http://www.flickr.com/photos/progtw/141876989/' ";
		html += "       title='Bild zur Großansicht einfach anklicken' ";
		html += "       onclick='return twPopup540x400(&#039;http://farm4.static.flickr.com/3071/2451950042_483f03020f.jpg?v=0&#039;);'>";
		html += "      <img src='../img/bimDynamo.jpg' ";
		html += "           width='160' height='120' alt='Bild bei flickr' />";
		html += "    </a>";
		html += "  </p>";
		html += "  <p class='text'>Das ist ein Infofenster. Es wurde im Javascript für die Google Maps erstellt.</p>";
		html += "  <p class='twClear'>&nbsp;</p>";
		html += "</div>";
		mark.openInfoWindowHtml(html);
    }
}

/*        // Add 10 markers to the map at random locations
        var bounds = map.getBounds();
        var southWest = bounds.getSouthWest();
        var northEast = bounds.getNorthEast();
        var lngSpan = northEast.lng() - southWest.lng();
        var latSpan = northEast.lat() - southWest.lat();
        for (var i = 0; i < 10; i++) 
		{
          var latlng = new GLatLng(southWest.lat() + latSpan * Math.random(),
                                  southWest.lng() + lngSpan * Math.random());
          map.addOverlay(new GMarker(latlng, markerOptions));
		}

//Marker und Infofenster von twGmap.js:

function setTwMarkers(map) {
	var point  = new GPoint(13.748, 51.041);  //ACHTUNG: (lon, lat) also vertauscht
	var marker = new GMarker(point);
	var html   = "";
	
	html += "<div class='twGmapInfo'>";
	html += "  <p class='headline'>Google Map mit Marker und Infofenster</p>";
	html += "  <p class='img'>";
	html += "    <a href='http://www.flickr.com/photos/progtw/141876989/' ";
	html += "       title='Bild zur Großansicht einfach anklicken' ";
	html += "       onclick='return twPopup540x400(&#039;http://farm4.static.flickr.com/3071/2451950042_483f03020f.jpg?v=0&#039;);'>";
	html += "      <img src='../img/bimDynamo.jpg' ";
	html += "           width='160' height='120' alt='Bild bei flickr' />";
	html += "    </a>"
	html += "  </p>";
	html += "  <p class='text'>Das ist ein Infofenster. Es wurde im Javascript für die Google Maps erstellt.</p>";
	html += "  <p class='twClear'>&nbsp;</p>";
	html += "</div>";
	
	GEvent.addListener(marker, "click", function() {marker.openInfoWindowHtml(html)});	
	map.addOverlay(marker);
	
	return map;
}

*/

