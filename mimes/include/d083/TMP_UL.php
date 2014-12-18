<ul>
	<?php do { ?>
	<li><?php echo $row_D083_Content['Spalte1']; ?></li>
	<?php } while ($row_D083_Content = mysql_fetch_assoc($D083_Content)); ?>
</ul>
