<ul>
	<?php do { ?>
	<li><?php echo $row_D062_Content['Spalte1']; ?></li>
	<?php } while ($row_D062_Content = mysql_fetch_assoc($D062_Content)); ?>
</ul>
