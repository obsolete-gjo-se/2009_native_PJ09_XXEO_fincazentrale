<script type="text/javascript">
var titel, url;
titel = document.title;
url   = document.URL;
</script>
<?php include '../browsererkennung/browsererkennung.php';
		switch ($ua) 
	  		{
			case "IE6": echo "<li>" . "<a href=\"javascript:window.external.AddFavorite(url, titel);\">Favoriten IE6</a>" . "</li>"; break; // perfekt
			case "IE7": echo "<li>" . "<a href=\"javascript:window.external.AddFavorite(url, titel);\">Favoriten IE7</a>" . "</li>"; break; // perfekt
			case "FF1": echo "<li>" . "<a href=\"javascript:window.sidebar.addPanel(titel,url, '');\">Favoriten FF1</a>" . "</li>"; break; 			// öffnet in sidebar - script suchen oder rausnehmen
			case "FF3": echo "<li>" . "<a href=\"javascript:window.external.addPanel(titel,url, '');\">Favoriten FF3</a>" . "</li>"; break; 		// öffnet in sidebar - script suchen oder rausnehmen
			case "IE8": echo "<li>" . "<a href=\"javascript:window.external.AddFavorite(url, titel);\">Favoriten IE8</a>" . "</li>"; break;			// IE Tester öffnet Fenster - nicht ausreichend!
			case "IE5": echo "<li>" . "<a href=\"javascript:window.external.AddFavorite(url, titel);\">Favoriten IE5</a>" . "</li>"; break; 		// IE Tester gibt Scriptfehler
			case "FF2": echo "<li>" . "<a href=\"javascript:window.external.addPanel(titel,url, '');\">Favoriten FF2</a>" . "</li>"; break;			// öffnet in sidebar - script suchen oder rausnehmen
			case "OP9": echo ""; break;																												// kein Script gefunden - nicht anbieten
			case "SF3": echo ""; break;																												// kein Script gefunden - nicht anbieten
			case "CR1": echo ""; break;																												// kein Script gefunden - nicht anbieten		
			default   : echo "";																													// nicht anbieten
			}
		?>
