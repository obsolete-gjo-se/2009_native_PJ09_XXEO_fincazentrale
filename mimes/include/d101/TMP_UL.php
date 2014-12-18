<ul>
	<?php do { ?>
	<li><?php echo $row_D101_Content['Spalte1']; ?></li>
	<?php } while ($row_D101_Content = mysql_fetch_assoc($D101_Content)); ?>
</ul>
