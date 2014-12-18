<ul>
	<?php do { ?>
	<li><?php echo $row_D021_Content['Spalte1']; ?></li>
	<?php } while ($row_D021_Content = mysql_fetch_assoc($D021_Content)); ?>
</ul>
