<script type="text/javascript">
var titel, url;
titel = document.title;
url   = document.URL;
</script>
<?php include '../browsererkennung/browsererkennung.php';
	switch ($ua) 
	{
		case "IE6": echo "<li>" . "<a href=\"javascript:window.print()\">IE 6 drucken</a>" . "</li>"; break; 	// perfekt
		case "IE7": echo "<li>" . "<a href=\"javascript:window.print()\">IE 7 drucken</a>" . "</li>"; break; 	// perfekt
		case "FF1": echo "<li>" . "<a href=\"javascript:window.print()\">FF 1 drucken</a>" . "</li>"; break; 	// perfekt
		case "FF3": echo "<li>" . "<a href=\"javascript:window.print()\">FF 3 drucken</a>" . "</li>"; break; 	// perfekt
		case "IE8": echo "<li>" . "<a href=\"javascript:window.print()\">IE 8 drucken</a>" . "</li>"; break;	// IE Tester gibt Scriptfehler - soll aber ab > 5 funktionieren
		case "IE5": echo "<li>" . "<a href=\"javascript:window.print()\">IE 5 drucken</a>" . "</li>"; break; 	// IE Tester gibt Scriptfehler - soll aber ab > 5 funktionieren
		case "FF2": echo "<li>" . "<a href=\"javascript:window.print()\">FF 2 drucken</a>" . "</li>"; break;	// perfekt
		case "OP9": echo "<li>" . "<a href=\"javascript:window.print()\">OP 9 drucken</a>" . "</li>"; break;	// perfekt
		case "SF3": echo "<li>" . "<a href=\"javascript:window.print()\">SF 3 drucken</a>" . "</li>"; break;	// perfekt
		case "CR1": echo "<li>" . "<a href=\"javascript:window.print()\">CR 1 drucken</a>" . "</li>"; break;	// perfekt
		default   : echo "";																					// Standartlösung - Weiche nicht nötwenig
	}
?>

