<?php 
$browser = $HTTP_USER_AGENT;												// Marktanteile Stand: Mai 2009 von http://www.webhits.de/deutsch/index.shtml?webstats.html
if (eregi("Chrome/1", $browser, $regs)){$ua = "CR1";}						//  0,2%
else if (eregi("Version/3.2.2 Safari", $browser, $regs)){$ua = "SF3";}		//  1,1%
else if (eregi("Opera/9", $browser, $regs)){$ua = "OP9";}					//  1,2% (7 & 8 & 9)
else if (eregi("Firefox/2", $browser, $regs)){$ua = "FF2";}					//  1,3%
else if (eregi("msie 5.5", $browser, $regs)){$ua = "IE5";}					//  1,6%
else if (eregi("msie 8.0", $browser, $regs)){$ua = "IE8";}					//  1,6%
else if (eregi("Firefox/3", $browser, $regs)){$ua = "FF3";}					// 10,2%
else if (eregi("Firefox/1", $browser, $regs)){$ua = "FF1";}					// 13,4%
else if (eregi("msie 7.0", $browser, $regs)){$ua = "IE7";}					// 18,8%
else if (eregi("msie 6.0", $browser, $regs)){$ua = "IE6";}					// 42,0%
else{$ua = "?";}															// der natscape 4 fehlt noch mit ca. 1,2%
?>

