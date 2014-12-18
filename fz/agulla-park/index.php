<?php require_once('../../mimes/include/Connections/xxeo.php'); ?>
<?php include '../../mimes/include/path.php';?>
<?php include '../../mimes/include/function_exists.php';?>
<?php include '../../mimes/include/sql-allgemein.php';?>
<?php include '../../mimes/include/sql-exist.php';?>
<?php include '../../mimes/include/DIVALL_Exist.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de"><!-- #BeginTemplate "/Templates/landingpage.dwt" --><!-- DW6 -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="robots" content="<?php echo $row_Allgemein['Robots']; ?>" />
<meta name="description" content="<?php echo $row_Allgemein['Meta Description']; ?>" />
<meta name="keywords" content="<?php echo $row_Allgemein['Meta Keywords']; ?>" />
<base href="http://www.fincazentrale.com" />
<link rel="stylesheet" type="text/css" href="/mimes/styles/<?php echo $row_Allgemein['CSS']; ?>" />
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
            <div><img src="../../mimes/images/img08.jpg" alt="Mallorca" width="466" height="152" /></div>
            <div id="div01">
                <?php include '../../mimes/include/d011/'. $row_Allgemein['H1_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D011_EX'] == 'WAHR') {include '../../mimes/include/d011/'. 'TMP_' . $row_D011_TMP['D011_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D012_EX'] == 'WAHR') {include '../../mimes/include/d012/'. 'TMP_' . $row_D012_TMP['D012_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D013_EX'] == 'WAHR') {include '../../mimes/include/d013/'. 'TMP_' . $row_D013_TMP['D013_TMP'] . '.php'; }?>
            </div>
        <div class="entry">
                    <div id="div02">
                <?php include '../../mimes/include/d021/'. $row_Allgemein['H21_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D021_EX'] == 'WAHR') {include '../../mimes/include/d021/'. 'TMP_' . $row_D021_TMP['D021_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D022_EX'] == 'WAHR') {include '../../mimes/include/d022/'. 'TMP_' . $row_D022_TMP['D022_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D023_EX'] == 'WAHR') {include '../../mimes/include/d023/'. 'TMP_' . $row_D023_TMP['D023_TMP'] . '.php'; }?>
            </div>
                        <div id="div03">
                <?php include '../../mimes/include/d031/'. $row_Allgemein['H22_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D031_EX'] == 'WAHR') {include '../../mimes/include/d031/'. 'TMP_' . $row_D031_TMP['D031_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D032_EX'] == 'WAHR') {include '../../mimes/include/d032/'. 'TMP_' . $row_D032_TMP['D032_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D033_EX'] == 'WAHR') {include '../../mimes/include/d033/'. 'TMP_' . $row_D033_TMP['D033_TMP'] . '.php'; }?>
            </div>
            <div id="div04">
                <?php include '../../mimes/include/d041/'. $row_Allgemein['H23_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D041_EX'] == 'WAHR') {include '../../mimes/include/d041/'. 'TMP_' . $row_D041_TMP['D041_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D042_EX'] == 'WAHR') {include '../../mimes/include/d042/'. 'TMP_' . $row_D042_TMP['D042_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D043_EX'] == 'WAHR') {include '../../mimes/include/d043/'. 'TMP_' . $row_D043_TMP['D043_TMP'] . '.php'; }?>
            </div>
            <div id="div05">
                <?php include '../../mimes/include/d051/'. $row_Allgemein['H24_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D051_EX'] == 'WAHR') {include '../../mimes/include/d051/'. 'TMP_' . $row_D051_TMP['D051_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D052_EX'] == 'WAHR') {include '../../mimes/include/d052/'. 'TMP_' . $row_D052_TMP['D052_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D053_EX'] == 'WAHR') {include '../../mimes/include/d053/'. 'TMP_' . $row_D053_TMP['D053_TMP'] . '.php'; }?>
            </div>
            <div id="div06">
                <?php include '../../mimes/include/d061/'. $row_Allgemein['H25_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D061_EX'] == 'WAHR') {include '../../mimes/include/d061/'. 'TMP_' . $row_D061_TMP['D061_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D062_EX'] == 'WAHR') {include '../../mimes/include/d062/'. 'TMP_' . $row_D062_TMP['D062_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D063_EX'] == 'WAHR') {include '../../mimes/include/d063/'. 'TMP_' . $row_D063_TMP['D063_TMP'] . '.php'; }?>
            </div>
            <div id="div07">
                <?php include '../../mimes/include/d071/'. $row_Allgemein['H26_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D071_EX'] == 'WAHR') {include '../../mimes/include/d071/'. 'TMP_' . $row_D071_TMP['D071_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D072_EX'] == 'WAHR') {include '../../mimes/include/d072/'. 'TMP_' . $row_D072_TMP['D072_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D073_EX'] == 'WAHR') {include '../../mimes/include/d073/'. 'TMP_' . $row_D073_TMP['D073_TMP'] . '.php'; }?>
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
            <li><a href="../../anfrage.php">Anfrage</a></li>
            <li><a href="../../kontakt.php">Kontakt </a></li>
            <li><a href="../../agb.html">AGB</a></li>
            <li><a href="../../impressum.html">Impressum</a></li>
          </ul>
        </li>
		<li>
             <div id="div08">
                <?php include '../../mimes/include/d081/'. $row_Allgemein['H31_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D081_EX'] == 'WAHR') {include '../../mimes/include/d081/'. 'TMP_' . $row_D081_TMP['D081_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D082_EX'] == 'WAHR') {include '../../mimes/include/d082/'. 'TMP_' . $row_D082_TMP['D082_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D083_EX'] == 'WAHR') {include '../../mimes/include/d083/'. 'TMP_' . $row_D083_TMP['D083_TMP'] . '.php'; }?>
            </div></li>
		<li>
            <div id="div09">
                <?php include '../../mimes/include/d091/'. $row_Allgemein['H32_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D091_EX'] == 'WAHR') {include '../../mimes/include/d091/'. 'TMP_' . $row_D091_TMP['D091_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D092_EX'] == 'WAHR') {include '../../mimes/include/d092/'. 'TMP_' . $row_D092_TMP['D092_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D093_EX'] == 'WAHR') {include '../../mimes/include/d093/'. 'TMP_' . $row_D093_TMP['D093_TMP'] . '.php'; }?>
            </div></li>
		<li>
            <div id="div10">
                <?php include '../../mimes/include/d101/'. $row_Allgemein['H33_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D101_EX'] == 'WAHR') {include '../../mimes/include/d101/'. 'TMP_' . $row_D101_TMP['D101_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D102_EX'] == 'WAHR') {include '../../mimes/include/d102/'. 'TMP_' . $row_D102_TMP['D102_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D103_EX'] == 'WAHR') {include '../../mimes/include/d103/'. 'TMP_' . $row_D103_TMP['D103_TMP'] . '.php'; }?>
            </div></li>
		<li>
            <div id="div11">
                <?php include '../../mimes/include/d111/'. $row_Allgemein['H34_T'] . '.php';?>
                <?php if ($row_DIVALL_EX['D111_EX'] == 'WAHR') {include '../../mimes/include/d111/'. 'TMP_' . $row_D111_TMP['D111_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D112_EX'] == 'WAHR') {include '../../mimes/include/d112/'. 'TMP_' . $row_D112_TMP['D112_TMP'] . '.php'; }?>
                <?php if ($row_DIVALL_EX['D113_EX'] == 'WAHR') {include '../../mimes/include/d113/'. 'TMP_' . $row_D113_TMP['D113_TMP'] . '.php'; }?>
            </div></li>
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
<?php include '../../mimes/include/Free_Result.php';?>