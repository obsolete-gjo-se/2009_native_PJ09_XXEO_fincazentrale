<ul>
	<?php do { ?>
	<li><?php echo $row_D012_Content['Spalte1']; ?></li>
	<?php } while ($row_D012_Content = mysql_fetch_assoc($D012_Content)); ?>
</ul>
