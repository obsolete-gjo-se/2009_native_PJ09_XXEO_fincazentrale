<?php
// Kontaktformular.org

// Einstellungen
// Ihre E-Mailadresse
$sys_webmaster = 'gregory@n-28.com';

// Absender || Muster(From: NAME <EMAIL>) // Beispiel: 'From: Max Mustermann <max@musterdomain.tld>'
$sys_absender = 'From: Kontaktformular <system@domain.tld>';

// Betreff
$sys_betreff = 'Kontaktformular-Anfrage';

// Nachrichten
// Nicht alle Felder ausgefüllt
$err[0] = 'Fehler, Sie haben nicht alle Felder ausgefüllt:';
// Kein Name eingegeben
$err[1] = '<br />- Ungültiger Name';
// Ungültige E-Mailadresse eingegeben
$err[2] = '<br />- Ungültiger E-Mailadresse';
// Kein Betreff eingegeben
$err[3] = '<br />- Ungültiger Betreff';
// Keine Nachricht eingegeben
$err[4] = '<br />- Ungültige Nachricht';
// Ungültiger Sicherheitscode
$err[5] = '<br />- Ungültiger Sicherheitscode';
// Alle Felder sind OK
$ok = 'Vielen Dank für Ihre Nachricht, wir werden Sie demnächst bearbeiten!<br /><br />';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
session_start();
$sessionstringnew = null;
$sessionstringadd = null;
if (!isset($_COOKIE[session_name()])) {
    $sessionstringnew = '?' . session_name() . "=" . session_id();
    $sessionstringadd = '&' . session_name() . "=" . session_id();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontaktformular</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}
body {
	background-color: #FFFFFF;
}
a:link, a:visited, a:active {
	color: #0066FF;
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
-->
</style>
<script type="text/javascript">
function P91Captcha(sid){
	var pas = new Image();
	var heuri = new Date();
	pas.src="captcha_form.php?x="+heuri.getTime()+sid;
	document.getElementById("P91Captcha").src=pas.src;
}
</script>
</head>
<body>
<p><strong>Kontaktformular:</strong></p>
<form name="kontaktformular" action="<?=$_SERVER['../../kontaktvorlage/PHP_SELF'].$sessionstringnew;
?>" method="post">
<table style="width:500px">
<tr>
	<td colspan="2">
	<?php
	$name = trim(strip_tags($_POST['name']));
	$email = trim(strip_tags($_POST['email']));
	$betreff = trim(strip_tags($_POST['betreff']));
	$nachricht = trim(strip_tags($_POST['nachricht']));
	$homepage = trim(strip_tags($_POST['homepage']));
	if (isset($_POST['submit'])) {
		$ip = $_SERVER['REMOTE_ADDR'];
		$host = gethostbyaddr($ip);
		$timestamp = time ();
		$datum = date ("d.m.Y", $timestamp);
		$uhrzeit = date ("H:i:s", $timestamp);
		$msg = '<span style="color:red">' . $err[0];
		if ($name == '') {
			$msg .= $err[1];
			$error = true;
		}
		if (!ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,6})$", $email)) {
			$msg .= $err[2];
			$error = true;
		}
		if ($betreff == '') {
			$msg .= $err[3];
			$error = true;
		}
		if ($nachricht == '') {
			$msg .= $err[4];
			$error = true;
		}
		if (sha1(trim(strip_tags(strtoupper($_POST['code'])))) != $_SESSION['P91Captcha_code']) {
			$msg .= $err[5];
			$error = true;
		}
		$msg .= '</span><br /><br />';
		if ($error != true) {
			$sys_nachricht = "-- Kontakformularanfrage --\n\nBetreff: $betreff\nName: $name\nE-Mail: $email\nHomepage: $homepage\n\nNachricht:\n$nachricht\n\nIP: $ip\nHost: $host\nGesendet am $datum um $uhrzeit.";
			mail($sys_webmaster, $sys_betreff, $sys_nachricht, $sys_absender);
			$name = null;
			$betreff = null;
			$email = null;
			$nachricht = null;
		  $homepage = null;
			echo $ok;
		} else {
			echo $msg;
		}
	}
	
	?></td>
</tr>
<tr>
	<td style="width:150px"><strong>Name:</strong></td>
	<td><input name="name" type="text" value="<?=$name;
	?>" size="40" maxlength="100"></td>
</tr>
<tr>
	<td style="width:150px"><p><strong>E-Mail Adresse:</strong><br></td>
	<td><input name="email" type="text" id="email" value="<?=$email;
	?>" size="40" maxlength="100"></td>
</tr>
<tr>
	<td style="width:150px"><strong>Betreff:</strong></td>
	<td><INPUT NAME="betreff" TYPE="text" id="betreff" value="<?=$betreff;
	?>" SIZE="40" maxlength="50"></td>
</tr>
<tr>
	<td style="width:150px"><strong>Homepage:</strong></td>
	<td><INPUT NAME="homepage" TYPE="text" id="homepage" value="<?=$homepage;
	?>" SIZE="40" maxlength="50"></td>
</tr>
<tr>
	<td style="width:150px"><strong>Nachricht:</strong></td>
	<td><textarea name="nachricht" cols="40" rows="10" wrap="VIRTUAL" id="nachricht"><?=$nachricht;
	?></textarea></td>
</tr>
<tr>
<td style="width:150px">&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
<td style="width:150px"><strong>Sicherheitscode:</strong></td>
	<td><img src="captcha_form.php<?=$sessionstringnew;?>" alt="Captcha" border="1" id="P91Captcha" /><br />
	<a href="javascript:P91Captcha('<?=$sessionstringadd;?>');">Neuer Code?</a></td>
</tr>
<tr>
	<td style="width:150px"><strong>Sicherheitscode <br>
	wiederholen: </strong></td>
	<td><input name="code" type="text" id="code" size="20" maxlength="50" /></td>
</tr>
<tr>
	<td style="width:150px">&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr>
	<td style="width:150px">&nbsp;</td>
	<td><input type="submit" value="Abschicken" name="submit">
	<!-- Hinweis darf nicht entfernt werden! -->
	<p><span style="font-size:10px; font-family:Verdana, Arial, Helvetica, sans-serif">
	&copy; Script Powered by <a href="http://www.kontaktformular.org" title="kostenloses Kontaktformular">kostenloses Kontaktformular</a></span></p>
	<!-- Hinweis darf nicht entfernt werden! --></td>
</tr>
</table>
</form>
</body>
</html>
