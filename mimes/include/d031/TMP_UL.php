<ul>
	<?php do { ?>
	<li><?php echo $row_D031_Content['Spalte1']; ?></li>
	<?php } while ($row_D031_Content = mysql_fetch_assoc($D031_Content)); ?>
</ul>
