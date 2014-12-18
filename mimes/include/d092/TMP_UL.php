<ul>
	<?php do { ?>
	<li><?php echo $row_D092_Content['Spalte1']; ?></li>
	<?php } while ($row_D092_Content = mysql_fetch_assoc($D092_Content)); ?>
</ul>
