<?php require_once('../mimes/include/Connections/xxeo.php'); ?>
<?php include '../mimes/include/path.php';?>
<?php include '../mimes/include/function_exists.php';?>
<?php
$SM = 6;
mysql_select_db($database_xxeo, $xxeo);
$query_sitemap = "SELECT `Pfad`, `Keyword` FROM `sites-abfrage` WHERE SM LIKE '$SM'";
$sitemap = mysql_query($query_sitemap, $xxeo) or die(mysql_error());
$row_Allgemein = mysql_fetch_assoc($sitemap);
$totalRows_Allgemein = mysql_num_rows($sitemap);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de"><!-- #BeginTemplate "/Templates/sitemaps.dwt" --><!-- DW6 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="robots" content="<?php echo $row_Allgemein['Robots']; ?>" />
<meta name="description" content="<?php echo $row_Allgemein['Meta Description']; ?>" />
<meta name="keywords" content="<?php echo $row_Allgemein['Meta Keywords']; ?>" />
<base href="http://www.fincazentrale.com" />
<link rel="stylesheet" type="text/css" href="/mimes/styles/main.css" />
<title><?php echo $row_Allgemein['Meta Titel']; ?></title>
</head>
<body>
<div id="header">
<div id="layer"></div>
</div>
<div id="page">
  <div id="pagebg"> 
    <div id="content">
        <div class="post">
            <div><img src="../mimes/images/img08.jpg" alt="Mallorca" width="466" height="152" /></div>
            <div id="div01">
                <h1>Sitemap</h1>
            </div>
        <div class="entry">
            <div id="div01">
            	<?php include '../mimes/include/d011/TMP_UL_sitemap.php';?>
            </div>
		</div>
     </div>
    </div>
    <div id="sidebar">
      <ul>
        <li>
          <h3>fincazentrale.com</h3>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/objekte.html">Objektübersicht</a></li>
            <li><a href="../anfrage.php">Anfrage</a></li>
            <li><a href="../kontakt.php">Kontakt </a></li>
            <li><a href="../agb.html">AGB</a></li>
            <li><a href="../impressum.html">Impressum</a></li>
          </ul>
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
<script src="/mimes/scripts/google1.js" type="text/javascript"></script>
<script src="/mimes/scripts/google2.js" type="text/javascript"></script>
</body>
<!-- #EndTemplate --></html>
<?php mysql_free_result($sitemap); ?>