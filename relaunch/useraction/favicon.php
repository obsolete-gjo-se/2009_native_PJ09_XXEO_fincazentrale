<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Header</title>
<link href="/mimes/styles/main_relaunch.css" rel="stylesheet" type="text/css" />
<base href="http://www.fincazentrale.com" />
<link rel="shortcut icon" type="image/x-icon" href="/mimes/images/favicon.ico">
<?php include '../browsererkennung/browsererkennung.php';
		switch ($ua) 
	  		{
			case "IE6": echo ""; break; // perfekt (Aufnahme in Favoriten notwendig)
			case "IE7": echo ""; break; // perfekt
			case "FF1": echo ""; break; // perfekt
			case "FF3": echo ""; break; // perfekt
			case "IE8": echo ""; break;	// IE Tester zeigt Favicon nicht an
			case "IE5": echo ""; break; // IE Tester zeigt Favicon nicht an
			case "FF2": echo ""; break;	// perfekt
			case "OP9": echo ""; break;	// perfekt
			case "SF3": echo ""; break;	// perfekt
			case "CR1": echo ""; break;	// perfekt
			default   : echo "";		// Standartlösung - Weiche nicht nötwenig
			}
		?>

</head>
<body>
</body>
</html>