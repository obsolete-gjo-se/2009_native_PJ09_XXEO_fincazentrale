<ul>
	<?php do { ?>
	<li><?php echo $row_D023_Content['Spalte1']; ?></li>
	<?php } while ($row_D023_Content = mysql_fetch_assoc($D023_Content)); ?>
</ul>
