<script type="text/javascript">
var titel, url;
titel = document.title;
url   = document.URL;
</script>
<?php include '../browsererkennung/browsererkennung.php';
	switch ($ua) 
	{
		case "IE6": echo "<li>" . "<a href=\"javascript:document.body.style.behavior='url(#default#homepage)';
									document.body.sethomepage(url);\">Startseite IE6</a>" . "</li>"; break; 							// perfekt
		case "IE7": echo "<li>" . "<a href=\"javascript:document.body.style.behavior='url(#default#homepage)';
									document.body.sethomepage(url);\">Startseite IE7</a>" . "</li>"; break; 							// perfekt
		case "FF1": echo "<li>" . ""; break; 																								// kein Script gefunden - nicht anbieten
		case "FF3": echo "<li>" . ""; break; 																								// kein Script gefunden - nicht anbieten
		case "IE8": echo "<li>" . "<a href=\"javascript:document.body.style.behavior='url(#default#homepage)';
									document.body.sethomepage(url);\">Startseite IE8</a>" . "</li>"; break;								// perfekt
		case "IE5": echo "<li>" . "<a href=\"javascript:document.body.style.behavior='url(#default#homepage)';
									document.body.sethomepage(url);\">Startseite IE5</a>" . "</li>"; break; 							// IE Tester gibt Scriptfehler - soll aber ab > 4 funktionieren
		case "FF2": echo ""; break;																										// kein Script gefunden - nicht anbieten
		case "OP9": echo ""; break;																										// kein Script gefunden - nicht anbieten
		case "SF3": echo ""; break;																										// kein Script gefunden - nicht anbieten
		case "CR1": echo ""; break;																										// kein Script gefunden - nicht anbieten		
		default   : echo "";																											// nicht anbieten
	}
?>