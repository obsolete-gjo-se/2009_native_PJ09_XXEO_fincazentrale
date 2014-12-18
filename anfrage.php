<?php
$sys_webmaster = 'gregory@n-28.com';
$sys_absender = 'From: Fincazentrale <website@fincazentrale.com>';
$sys_betreff = 'Website-Anfrage';
$err[0] = 'Sie haben nicht alle Pflichtfelder ausgefüllt:<br />';
$err[1] = '* Bitte wählen Sie eine Anrede aus <br />';
$err[2] = '* Bitte tragen Sie Ihren Vornamen ein <br />';
$err[3] = '* Bitte tragen Sie Ihren Nachnamen ein <br />';
$err[4] = '* Bitte überprüfen Sie Ihre E-Mailadresse <br />';
$err[5] = '* Bitte wählen Sie einen Anreisetermin <br />';
$err[6] = '* Bitte wählen Sie einen Abreisetermin <br />';
$err[7] = '* Bitte wählen Sie eine Aufenthaltsdauer <br />';
$err[8] = '* Bitte wählen Sie die Anzahl der erwachsenen Reisenden <br />';
$err[9] = '* Der Sicherheitscode (Captcher) war nicht richtig';
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
<title>Anfrage</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<meta name="Description" content="Fragen Sie uns unverbindlich an - Ihre fincazentrale.com" />
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
          <p>Hinweise<br />
            Dieses Formular ist eine unverbindliche Reservierungsanfrage. Alle Angaben werden ausschließlich für die
            Kontaktaufnahme durch Finaczentrale.com benötigt. Es erfolgt keine Weitergabe der Daten an Dritte.<br />
            Pflichtfelder sind durch ein * gekennzeichnet.</p>
          <form name="kontaktformular" action="<?=$_SERVER['PHP_SELF'].$sessionstringnew;?>" method="post">
            <?php 
			
				$anrede = trim(strip_tags($_POST['anrede']));
				$vorname = trim(strip_tags($_POST['vorname']));
				$nachname = trim(strip_tags($_POST['nachname']));
				$email = trim(strip_tags($_POST['email']));
				$telefon = trim(strip_tags($_POST['telefon']));
				$objekt = trim(strip_tags($_POST['objekt']));
				$an_tag = trim(strip_tags($_POST['an_tag']));
				$an_monat = trim(strip_tags($_POST['an_monat']));
				$an_jahr = trim(strip_tags($_POST['an_jahr']));
				$ab_tag = trim(strip_tags($_POST['ab_tag']));
				$ab_monat = trim(strip_tags($_POST['ab_monat']));
				$ab_jahr = trim(strip_tags($_POST['ab_jahr']));
				$dauer = trim(strip_tags($_POST['dauer']));
				$erwachsene = trim(strip_tags($_POST['erwachsene']));
				$kinder = trim(strip_tags($_POST['kinder']));
				$kindesalter = trim(strip_tags($_POST['kindesalter']));
				$flug = trim(strip_tags($_POST['flug']));
				$nachricht = trim(strip_tags($_POST['nachricht']));
				
				// Eingabe Pflichtfelder:
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
					if ($an_tag == '---') {
						$msg .= $err[5];
						$error = true;
						}
					if ($an_monat == '---') {
						$msg .= $err[5];
						$error = true;
						}
					if ($an_jahr == '---') {
						$msg .= $err[5];
						$error = true;
						}
					if ($ab_tag == '---') {
						$msg .= $err[6];
						$error = true;
						}
					if ($ab_monat == '---') {
						$msg .= $err[6];
						$error = true;
						}
					if ($ab_jahr == '---') {
						$msg .= $err[6];
						$error = true;
						}
					if ($dauer == '---') {
						$msg .= $err[7];
						$error = true;
						}
					if ($erwachsene == '') {
						$msg .= $err[8];
						$error = true;
						}
					if (sha1(trim(strip_tags(strtoupper($_POST['code'])))) != $_SESSION['P91Captcha_code']) {
						$msg .= $err[9];
						$error = true;
						}
					$msg .= '</p>';				
					if ($error != true) {
						$sys_nachricht = "*** Anfrageformular - Fincazentrale *** \n\nAnrede: $anrede \nVorname: $vorname \nNachname: $nachname\nE-Mail: $email\nTelefon: $telefon\nObjekt: $objekt\nAnreise: $an_tag/$an_monat/$an_jahr\nAbreise: $ab_tag/$ab_monat/$ab_jahr\nAufenthaltsdauer: $dauer\nErwachsene: $erwachsene\nKinder: $kinder\nKindesalter: $kindesalter\nFlüge gebucht: $flug\n\nNachricht:\n$nachricht\n\nIP: $ip\nHost: $host\nGesendet am $datum um $uhrzeit.";						
						mail($sys_webmaster, $sys_betreff, $sys_nachricht, $sys_absender);
						$anrede = null;
						$vorname = null;
						$nachname = null;
						$email = null;
						$telefon = null;
						$objekt = null;
						$an_tag = null;
						$an_monat = null;
						$an_jahr = null;
						$ab_tag = null;
						$ab_monat = null;
						$ab_jahr = null;
						$dauer = null;
						$erwachsene = null;
						$kinder = null;
						$kindesalter = null;
						$flug = null;
						$nachricht = null;
						echo $ok;
						} else {
							echo $msg;
							}
					}
					?>
            <table border="0">
              <tr>
                <td>Anrede:*</td>
                <td><select name="anrede">
                    <option value="---" <?php if (isset($_POST['anrede']) && $_POST['anrede'] == '---') { echo ' selected="selected"';}?>>bitte wählen...</option>
                    <option value="herr" <?php if (isset($_POST['anrede']) && $_POST['anrede'] == 'herr') { echo ' selected="selected"';}?>>Herr</option>
                    <option value="frau" <?php if (isset($_POST['anrede']) && $_POST['anrede'] == 'frau') { echo ' selected="selected"';}?>>Frau</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Vorname:*</td>
                <td><input name="vorname" type="text" value="<?=$vorname;?>" size="20" maxlength="100"></td>
              </tr>
              <tr>
                <td>Nachname:*</td>
                <td><input name="nachname" type="text" value="<?=$nachname;?>" size="20" maxlength="100"></td>
              </tr>
              <tr>
                <td>E-Mail:*</td>
                <td><input name="email" type="text" value="<?=$email;?>" size="20" maxlength="100"></td>
              </tr>
              <tr>
                <td>Tel:</td>
                <td><input name="telefon" type="text" value="<?=$telefon;?>" size="20" maxlength="100"></td>
              </tr>
              <tr>
                <td>Wunschobjekt:</td>
                <td><select name="objekt">
                    <option value="---" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == '---') { echo ' selected="selected"';}?>>bitte auswählen...</option>
                    <optgroup label="Fincas Campos">
                    <option value="cecilia" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'cecilia') { echo ' selected="selected"';}?>>Cecilia</option>
                    <option value="rafaela" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'rafaela') { echo ' selected="selected"';}?>>Rafaela</option>
                    <option value="juana" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'juana') { echo ' selected="selected"';}?>>Juana</option>
                    <option value="emilia" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'emilia') { echo ' selected="selected"';}?>>Emilia</option>
                    <option value="nykis" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'nykis') { echo ' selected="selected"';}?>>Molin Son Nyikis</option>
                    </optgroup>
                    <optgroup label="Ses Covetes">
                    <option value="lacanova" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'lacanova') { echo ' selected="selected"';}?>>La Canova</option>
                    <option value="coloma" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'coloma') { echo ' selected="selected"';}?>>Coloma</option>
                    <option value="mandarina" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'mandarina') { echo ' selected="selected"';}?>>Mandarina</option>
                    <option value="sasortha" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'sasortha') { echo ' selected="selected"';}?>>Sa Sortha</option>
                    <optgroup label="Ses Salines">
                    <option value="catarina" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'catarina') { echo ' selected="selected"';}?>>Finca Son Catarina</option>
                    <option value="valentina" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'valentina') { echo ' selected="selected"';}?>>Villa Valentina</option>
                    </optgroup>
                    <optgroup label="Calonge/Cala D'or">
                    <option value="sophia" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'sophia') { echo ' selected="selected"';}?>>Sophia</option>
                    </optgroup>
                    <optgroup label="Felanitx">
                    <option value="theresa" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'theresa') { echo ' selected="selected"';}?>>Finca Theresa</option>
                    </optgroup>
                    <optgroup label="Landhotels">
                    <option value="turo" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'turo') { echo ' selected="selected"';}?>>Es Turo</option>
                    <option value="rotes_velles" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'rotes_velles') { echo ' selected="selected"';}?>>Landhotel Ses Rotes Velles</option>
                    <option value="torrent" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'torrent') { echo ' selected="selected"';}?>>Landhotel Es Torrent</option>
                    <option value="son_sala" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'son_sala') { echo ' selected="selected"';}?>>Landhotel Son Sala</option>
                    <option value="seminarhaus" <?php if (isset($_POST['objekt']) && $_POST['objekt'] == 'seminarhaus') { echo ' selected="selected"';}?>>Seminarhaus Llucmajor</option>
                    </optgroup>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Früheste Anreise:*</td>
                <td><select name="an_tag">
                    <option value="---">---</option>
                    <option value="01" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '01') { echo ' selected="selected"';}?>>01</option>
                    <option value="02" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '02') { echo ' selected="selected"';}?>>02</option>
                    <option value="03" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '03') { echo ' selected="selected"';}?>>03</option>
                    <option value="04" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '04') { echo ' selected="selected"';}?>>04</option>
                    <option value="05" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '05') { echo ' selected="selected"';}?>>05</option>
                    <option value="06" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '06') { echo ' selected="selected"';}?>>06</option>
                    <option value="07" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '07') { echo ' selected="selected"';}?>>07</option>
                    <option value="08" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '08') { echo ' selected="selected"';}?>>08</option>
                    <option value="09" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '09') { echo ' selected="selected"';}?>>09</option>
                    <option value="10" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '10') { echo ' selected="selected"';}?>>10</option>
                    <option value="11" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '11') { echo ' selected="selected"';}?>>11</option>
                    <option value="12" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '12') { echo ' selected="selected"';}?>>12</option>
                    <option value="13" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '13') { echo ' selected="selected"';}?>>13</option>
                    <option value="14" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '14') { echo ' selected="selected"';}?>>14</option>
                    <option value="15" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '15') { echo ' selected="selected"';}?>>15</option>
                    <option value="16" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '16') { echo ' selected="selected"';}?>>16</option>
                    <option value="17" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '17') { echo ' selected="selected"';}?>>17</option>
                    <option value="18" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '18') { echo ' selected="selected"';}?>>18</option>
                    <option value="19" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '19') { echo ' selected="selected"';}?>>19</option>
                    <option value="20" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '20') { echo ' selected="selected"';}?>>20</option>
                    <option value="21" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '21') { echo ' selected="selected"';}?>>21</option>
                    <option value="22" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '22') { echo ' selected="selected"';}?>>22</option>
                    <option value="23" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '23') { echo ' selected="selected"';}?>>23</option>
                    <option value="24" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '24') { echo ' selected="selected"';}?>>24</option>
                    <option value="25" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '25') { echo ' selected="selected"';}?>>25</option>
                    <option value="26" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '26') { echo ' selected="selected"';}?>>26</option>
                    <option value="27" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '27') { echo ' selected="selected"';}?>>27</option>
                    <option value="28" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '28') { echo ' selected="selected"';}?>>28</option>
                    <option value="29" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '29') { echo ' selected="selected"';}?>>29</option>
                    <option value="30" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '30') { echo ' selected="selected"';}?>>30</option>
                    <option value="31" <?php if (isset($_POST['an_tag']) && $_POST['an_tag'] == '31') { echo ' selected="selected"';}?>>31</option>
                  </select>
                  <select name="an_monat">
                    <option value="---" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '---') { echo ' selected="selected"';}?>>---</option>
                    <option value="01" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '01') { echo ' selected="selected"';}?>>Januar</option>
                    <option value="02" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '02') { echo ' selected="selected"';}?>>Februar</option>
                    <option value="03" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '03') { echo ' selected="selected"';}?>>März</option>
                    <option value="04" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '04') { echo ' selected="selected"';}?>>April</option>
                    <option value="05" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '05') { echo ' selected="selected"';}?>>Mai</option>
                    <option value="06" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '06') { echo ' selected="selected"';}?>>Juni</option>
                    <option value="07" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '07') { echo ' selected="selected"';}?>>Juli</option>
                    <option value="08" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '08') { echo ' selected="selected"';}?>>August</option>
                    <option value="09" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '09') { echo ' selected="selected"';}?>>September</option>
                    <option value="10" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '10') { echo ' selected="selected"';}?>>Oktober</option>
                    <option value="11" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '11') { echo ' selected="selected"';}?>>November</option>
                    <option value="12" <?php if (isset($_POST['an_monat']) && $_POST['an_monat'] == '12') { echo ' selected="selected"';}?>>Dezember</option>
                  </select>
                  <select name="an_jahr">
                    <option value="---" <?php if (isset($_POST['an_jahr']) && $_POST['an_jahr'] == '---') { echo ' selected="selected"';}?>>---</option>
                    <option value="2009" <?php if (isset($_POST['an_jahr']) && $_POST['an_jahr'] == '2009') { echo ' selected="selected"';}?>>2009</option>
                    <option value="2010" <?php if (isset($_POST['an_jahr']) && $_POST['an_jahr'] == '2010') { echo ' selected="selected"';}?>>2010</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Späteste Abreise:*</td>
                <td><select name="ab_tag">
                    <option value="---">---</option>
                    <option value="01" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '01') { echo ' selected="selected"';}?>>01</option>
                    <option value="02" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '02') { echo ' selected="selected"';}?>>02</option>
                    <option value="03" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '03') { echo ' selected="selected"';}?>>03</option>
                    <option value="04" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '04') { echo ' selected="selected"';}?>>04</option>
                    <option value="05" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '05') { echo ' selected="selected"';}?>>05</option>
                    <option value="06" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '06') { echo ' selected="selected"';}?>>06</option>
                    <option value="07" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '07') { echo ' selected="selected"';}?>>07</option>
                    <option value="08" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '08') { echo ' selected="selected"';}?>>08</option>
                    <option value="09" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '09') { echo ' selected="selected"';}?>>09</option>
                    <option value="10" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '10') { echo ' selected="selected"';}?>>10</option>
                    <option value="11" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '11') { echo ' selected="selected"';}?>>11</option>
                    <option value="12" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '12') { echo ' selected="selected"';}?>>12</option>
                    <option value="13" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '13') { echo ' selected="selected"';}?>>13</option>
                    <option value="14" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '14') { echo ' selected="selected"';}?>>14</option>
                    <option value="15" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '15') { echo ' selected="selected"';}?>>15</option>
                    <option value="16" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '16') { echo ' selected="selected"';}?>>16</option>
                    <option value="17" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '17') { echo ' selected="selected"';}?>>17</option>
                    <option value="18" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '18') { echo ' selected="selected"';}?>>18</option>
                    <option value="19" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '19') { echo ' selected="selected"';}?>>19</option>
                    <option value="20" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '20') { echo ' selected="selected"';}?>>20</option>
                    <option value="21" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '21') { echo ' selected="selected"';}?>>21</option>
                    <option value="22" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '22') { echo ' selected="selected"';}?>>22</option>
                    <option value="23" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '23') { echo ' selected="selected"';}?>>23</option>
                    <option value="24" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '24') { echo ' selected="selected"';}?>>24</option>
                    <option value="25" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '25') { echo ' selected="selected"';}?>>25</option>
                    <option value="26" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '26') { echo ' selected="selected"';}?>>26</option>
                    <option value="27" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '27') { echo ' selected="selected"';}?>>27</option>
                    <option value="28" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '28') { echo ' selected="selected"';}?>>28</option>
                    <option value="29" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '29') { echo ' selected="selected"';}?>>29</option>
                    <option value="30" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '30') { echo ' selected="selected"';}?>>30</option>
                    <option value="31" <?php if (isset($_POST['ab_tag']) && $_POST['ab_tag'] == '31') { echo ' selected="selected"';}?>>31</option>
                  </select>
                  <select name="ab_monat">
                    <option value="---" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '---') { echo ' selected="selected"';}?>>---</option>
                    <option value="01" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '01') { echo ' selected="selected"';}?>>Januar</option>
                    <option value="02" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '02') { echo ' selected="selected"';}?>>Februar</option>
                    <option value="03" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '03') { echo ' selected="selected"';}?>>März</option>
                    <option value="04" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '04') { echo ' selected="selected"';}?>>April</option>
                    <option value="05" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '05') { echo ' selected="selected"';}?>>Mai</option>
                    <option value="06" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '06') { echo ' selected="selected"';}?>>Juni</option>
                    <option value="07" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '07') { echo ' selected="selected"';}?>>Juli</option>
                    <option value="08" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '08') { echo ' selected="selected"';}?>>August</option>
                    <option value="09" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '09') { echo ' selected="selected"';}?>>September</option>
                    <option value="10" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '10') { echo ' selected="selected"';}?>>Oktober</option>
                    <option value="11" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '11') { echo ' selected="selected"';}?>>November</option>
                    <option value="12" <?php if (isset($_POST['ab_monat']) && $_POST['ab_monat'] == '12') { echo ' selected="selected"';}?>>Dezember</option>
                  </select>
                  <select name="ab_jahr">
                    <option value="---" <?php if (isset($_POST['ab_jahr']) && $_POST['ab_jahr'] == '---') { echo ' selected="selected"';}?>>---</option>
                    <option value="2009" <?php if (isset($_POST['ab_jahr']) && $_POST['ab_jahr'] == '2009') { echo ' selected="selected"';}?>>2009</option>
                    <option value="2010" <?php if (isset($_POST['ab_jahr']) && $_POST['ab_jahr'] == '2010') { echo ' selected="selected"';}?>>2010</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Aufenthaltsdauer:*</td>
                <td><select name="dauer">
                    <option value="---" <?php if (isset($_POST['dauer']) && $_POST['dauer'] == '---') { echo ' selected="selected"';}?>>---</option>
                    <option value="7_Tage" <?php if (isset($_POST['dauer']) && $_POST['dauer'] == '7_Tage') { echo ' selected="selected"';}?>>7 Tage</option>
                    <option value="8_Tage" <?php if (isset($_POST['dauer']) && $_POST['dauer'] == '8_Tage') { echo ' selected="selected"';}?>>8 Tage</option>
                    <option value="9_Tage" <?php if (isset($_POST['dauer']) && $_POST['dauer'] == '9_Tage') { echo ' selected="selected"';}?>>9 Tage</option>
                    <option value="10_Tage" <?php if (isset($_POST['dauer']) && $_POST['dauer'] == '10_Tage') { echo ' selected="selected"';}?>>10 Tage</option>
                    <option value="2_Wochen" <?php if (isset($_POST['dauer']) && $_POST['dauer'] == '2_Wochen') { echo ' selected="selected"';}?>>2 Wochen</option>
                    <option value="3_Wochen" <?php if (isset($_POST['dauer']) && $_POST['dauer'] == '3_Wochen') { echo ' selected="selected"';}?>>3 Wochen</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Anzahl Erwachsene:*</td>
                <td><input name="erwachsene" type="text" value="<?=$erwachsene;?>" size="10" maxlength="5" ></td>
              </tr>
              <tr>
                <td>Anzahl Kinder:</td>
                <td><input name="kinder" type="text" value="<?=$kinder;?>" size="10" maxlength="5"></td>
              </tr>
              <tr>
                <td>Alter der Kinder:</td>
                <td><input name="kindesalter" type="text" value="<?=$kindesalter;?>" size="10" maxlength="20"></td>
              </tr>
              <tr>
                <td>Haben Sie  Ihre Fl&uuml;ge bereits  gebucht:</td>
                <td>Ja
                  <input name="flug" value="Ja" type="radio">
                  | Nein
                  <input name="flug" value="Nein" type="radio"></td>
              </tr>
              <tr>
                <td>Ihre Miteilung an uns:</td>
                <td><textarea name="nachricht" cols="40" rows="4" wrap="virtual" id="nachricht"><?=$nachricht;?></textarea>
                </td>
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
