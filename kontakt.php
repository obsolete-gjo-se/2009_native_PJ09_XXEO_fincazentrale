<?php
$sys_webmaster = 'gregory@n-28.com';
$sys_absender = 'From: Fincazentrale <website@fincazentrale.com>';
$sys_betreff = 'Website-Anfrage';
$err[0] = 'Sie haben nicht alle Pflichtfelder ausgefüllt:<br />';
$err[1] = '* Bitte wählen Sie eine Anrede aus <br />';
$err[2] = '* Bitte tragen Sie Ihren Vornamen ein <br />';
$err[3] = '* Bitte tragen Sie Ihren Nachnamen ein <br />';
$err[4] = '* Bitte überprüfen Sie Ihre E-Mailadresse <br />';
$err[5] = '* Bitte tragen Sie Ihre Nachricht ein <br />';
$err[6] = '* Der Sicherheitscode (Captcher) war nicht richtig';
$ok = 'Vielen Dank für Ihre Mitteilung, wir werden uns schnellstmöglich kümmern.';

session_start();
$sessionstringnew = null;
$sessionstringadd = null;
if (!isset($_COOKIE[session_name()])) {
    $sessionstringnew = '?' . session_name() . "=" . session_id();
    $sessionstringadd = '&' . session_name() . "=" . session_id();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Kontakt</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<meta name="Description" content="Nehmen Sie kontakt zu uns auf - Ihre fincazentrale.com" />
<meta name="keywords" content="Kontakt" />
<meta name="language" content="de" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="mimes/styles/main_alt.css" rel="stylesheet" type="text/css" media="screen" />
<base href="http://www.fincazentrale.com" />
<script type="text/javascript">
function Captcha(sid){
	var pas = new Image();
	var heuri = new Date();
	pas.src="/mimes/include/captcha.php?x="+heuri.getTime()+sid;
	document.getElementById("Captcha").src=pas.src;
}
</script>
<!-- InstanceEndEditable -->
</head>
<body>
<div id="header">
<div id="layer"></div>
</div>
<div id="page">
  <div id="pagebg"> 
    <div id="content">
        <div class="post"><!-- InstanceBeginEditable name="EditRegion6" -->
        <div>
          <img src="mimes/images/img08.jpg" alt="Nehmen Sie Kontakt zu uns auf - Ihre fincazentrale.com - nur ein Klick..." width="466" height="152" />
        </div>
        <!-- InstanceEndEditable -->
            <h1 class="title"><!-- InstanceBeginEditable name="H1" -->Nehmen Sie kontakt zu uns auf - Ihre fincazentrale.com:<!-- InstanceEndEditable --></h1>
        <p class="meta"><small><!-- InstanceBeginEditable name="small" -->
          <!-- InstanceEndEditable --></small>
        </p>
        <div class="entry">
        <!-- InstanceBeginEditable name="content" -->
          <p>Alle Felder sind Pflichtfelder und somit zur vollständigen Anfrage auszufüllen.</p>
          <form name="kontaktformular" action="<?=$_SERVER['PHP_SELF'].$sessionstringnew;?>" method="post">
            <?php 
				$anrede = trim(strip_tags($_POST['anrede']));
				$vorname = trim(strip_tags($_POST['vorname']));
				$nachname = trim(strip_tags($_POST['nachname']));
				$email = trim(strip_tags($_POST['email']));
				$nachricht = trim(strip_tags($_POST['nachricht']));
				if (isset($_POST['submit'])) {
					$ip = $_SERVER['REMOTE_ADDR'];
					$host = gethostbyaddr($ip);
					$timestamp = time ();
					$datum = date ("d.m.Y", $timestamp);
					$uhrzeit = date ("H:i:s", $timestamp);
					$msg = '<p>' . $err[0];
					if ($anrede == '---') {
						$msg .= $err[1];
						$error = true;
						}
					if ($vorname == '') {
						$msg .= $err[2];
						$error = true;
						}
					if ($nachname == '') {
						$msg .= $err[3];
						$error = true;
						}
					if (!ereg("^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,6})$", $email)) {
						$msg .= $err[4];
						$error = true;
						}
					if ($nachricht == '') {
						$msg .= $err[5];
						$error = true;
						}
					if (sha1(trim(strip_tags(strtoupper($_POST['code'])))) != $_SESSION['P91Captcha_code']) {
						$msg .= $err[6];
						$error = true;
						}
					$msg .= '</p>';
					if ($error != true) {
						$sys_nachricht = "*** Kontakformular - Fincazentrale *** \n\nAnrede: $anrede \nVorname: $vorname \nNachname: $nachname\nE-Mail: $email\n\nNachricht:\n$nachricht\n\nIP: $ip\nHost: $host\nGesendet am $datum um $uhrzeit.";
						mail($sys_webmaster, $sys_betreff, $sys_nachricht, $sys_absender);
						$anrede = null;
						$vorname = null;
						$nachname = null;
						$email = null;
						$nachricht = null;
						echo $ok;
						} else {
							echo $msg;
							}
					}?>
            <table>
              <tr>
                <td>Anrede:*</td>
                <td><select name="anrede" size="1">
                	<option value="---" <?php if (isset($_POST['anrede']) && $_POST['anrede'] == '---') { echo ' selected="selected"';}?>>---</option>
                	<option value="Herr" <?php if (isset($_POST['anrede']) && $_POST['anrede'] == 'Herr') { echo ' selected="selected"';}?>>Herr</option>
                	<option value="Frau" <?php if (isset($_POST['anrede']) && $_POST['anrede'] == 'Frau') { echo ' selected="selected"';}?>>Frau</option>
                    </select>
                </td>
              </tr>
              <tr>
                <td>Vorname:*</td>
                <td><input name="vorname" type="text" value="<?=$vorname;?>" size="40" maxlength="100"></td>
              </tr>
              <tr>
                <td>Nachname:*</td>
                <td><input name="nachname" type="text" value="<?=$nachname;?>" size="40" maxlength="100"></td>
              </tr>
              <tr>
                <td>E-Mail:*</td>
                <td><input name="email" type="text" id="email" value="<?=$email;?>" size="40" maxlength="100"></td>
              </tr>
              <tr>
                <td>Nachricht:*</td>
                <td><textarea name="nachricht" cols="37" rows="5" wrap="VIRTUAL" id="nachricht"><?=$nachricht;?></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Captcher:</td>
                <td><img src="/mimes/include/captcha.php<?=$sessionstringnew;?>" alt="Captcha" border="1" id="Captcha" /><br />
                  <a href="javascript:Captcha('<?=$sessionstringadd;?>');">Captcher erneuern</a></td>
              </tr>
              <tr>
                <td>Captcher eingeben:*</td>
                <td><input name="code" type="text" id="code" size="20" maxlength="50" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Senden" name="submit">
              </tr>
            </table>
          </form>
          <!-- InstanceEndEditable --></div>
        </div>
    </div>
    <div id="sidebar">
      <ul>
        <li>
          <h3>fincazentrale.com</h3>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/objekte.html">Objektübersicht</a></li>
            <li><a href="anfrage.php">Anfrage</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="agb.html">AGB</a></li>
            <li><a href="impressum.html">Impressum</a></li>
          </ul>
        </li>
        <li>
        <!-- InstanceBeginEditable name="EditRegion7" -->
          <h3 id="3-3">Appartments in Spanien</h3>
          <ul>
            <li>Appartments in Palma</li>
            <li>Appartments in Andratx</li>
            <li>Appartments in S&oacute;ller</li>
            <li>Appartments in Pollenca</li>
            <li>Appartments in Art&aacute;</li>
          </ul>
          <h3 id="2-5.07">Der kleine Reisesprachf&uuml;hrer - </h3>
          <table>
            <tr>
              <td>nach rechts</td>
              <td>a la derecha</td>
            </tr>
            <tr>
              <td>nach links</td>
              <td>a la izquierda</td>
            </tr>
            <tr>
              <td>immer gerade aus</td>
              <td>todo recto</td>
            </tr>
            <tr>
              <td>nahe</td>
              <td>cerca</td>
            </tr>
            <tr>
              <td>weit</td>
              <td>lejos</td>
            </tr>
            <tr>
              <td>hoch</td>
              <td>alto</td>
            </tr>
          </table>
          <!-- InstanceEndEditable -->
        </li>
        <li>
        <h3>Garantiert fehlerfrei programmiert</h3>
        <ul>
            <li>Diese Seite wurde durch das W3C Konsortium geprüft und als fehlerfrei eingestuft.</li>
            <li><img src="mimes/images/valid-xhtml10.png" alt="geprüft" /> <img src="mimes/images/valid-css2-blue.png" alt="geprüft" /></li>
        </ul>
        </li>
          <li>
          <h3>Die schönsten Strände</h3>
          <ul>
          	<li>Platja de Palma</li>
          	<li>EsTrenc</li>
          	<li>Cala Mesquida</li>
          	<li>Can Pastilla</li>
          	<li>Cala Pi</li>
          </ul>
          </li>
        </li>
      </ul>
    </div>
    <div style="clear: both;">&nbsp;</div>
  </div>
</div>
<div id="footer">
  <p>
  <a href="/maps/sitemap01.php">sitemap01</a> |
  <a href="/maps/sitemap02.php">sitemap02</a> |
  <a href="/maps/sitemap03.php">sitemap03</a> |
  <a href="/maps/sitemap04.php">sitemap04</a> |
  <a href="/maps/sitemap05.php">sitemap05</a> |
  <a href="/maps/sitemap06.php">sitemap06</a> |
  <a href="/maps/sitemap07.php">sitemap07</a> |
  <a href="/maps/sitemap08.php">sitemap08</a> |
  <a href="/maps/sitemap09.php">sitemap09</a> |
  <a href="/maps/sitemap10.php">sitemap10</a> |
  <a href="/maps/sitemap11.php">sitemap11</a> |
  <a href="/maps/sitemap12.php">sitemap12</a> |
  <a href="/maps/sitemap13.php">sitemap13</a> |
  <a href="/maps/sitemap14.php">sitemap14</a> |
  <a href="/maps/sitemap15.php">sitemap15</a> |
  <a href="/maps/sitemap16.php">sitemap16</a> |
  <a href="/maps/sitemap17.php">sitemap17</a> |
  <a href="/maps/sitemap18.php">sitemap18</a>
  </p>
</div>
<script src="mimes/scripts/google1.js" type="text/javascript"></script>
<script src="mimes/scripts/google2.js" type="text/javascript"></script>
</body>
<!-- InstanceEnd --></html>
