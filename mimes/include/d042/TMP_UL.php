<ul>
	<?php do { ?>
	<li><?php echo $row_D042_Content['Spalte1']; ?></li>
	<?php } while ($row_D042_Content = mysql_fetch_assoc($D042_Content)); ?>
</ul>
