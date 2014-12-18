<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>
</head>

<body>

<input name="berta" type="text" value="16" size="100" maxlength="5"  />

<?PHP

$loc = $_SERVER['PHP_SELF'];


/*$loc = $_SERVER['REQUEST_URI'];
$pos = strrpos ($loc, '/');
$loc = substr($loc, $pos + 1);
*/
// $url = 'http://admin:php@www.selfphp3.de:9000/php.php?function=pdf#pdf_arc';

echo '<b>Ursprüngliche URL:</b><br>';

echo $loc . '<br><br>';

echo '<b>Nach den Bestandteilen zerlegt:</b><br>';

$url_array = parse_url ( $url );

while ( list ( $key, $val ) = each ( $url_array ) )
{
  echo $key . ' - ' . $val . '<br>';
}
?>

</body>
</html>
