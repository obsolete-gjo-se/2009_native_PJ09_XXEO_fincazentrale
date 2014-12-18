<ul>
	<?php do { ?>
	<li><?php echo $row_D102_Content['Spalte1']; ?></li>
	<?php } while ($row_D102_Content = mysql_fetch_assoc($D102_Content)); ?>
</ul>
