<ul>
	<?php do { ?>
	<li><?php echo $row_D051_Content['Spalte1']; ?></li>
	<?php } while ($row_D051_Content = mysql_fetch_assoc($D051_Content)); ?>
</ul>
