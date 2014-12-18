<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>
</head>

<body>
<?php

$menge = 1;
$row_DIVALL_EX = 5;

srand((double)microtime()*1000000);
$start = rand(1,$menge-$row_DIVALL_EX);
if ($start < 1) {$start =1;}
$rows = $row_DIVALL_EX['D011_ROW'];
echo $start;
?>

</body>
</html>
