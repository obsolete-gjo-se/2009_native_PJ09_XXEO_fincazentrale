<ul>
	<?php do { ?>
	<li><?php echo $row_D032_Content['Spalte1']; ?></li>
	<?php } while ($row_D032_Content = mysql_fetch_assoc($D032_Content)); ?>
</ul>
