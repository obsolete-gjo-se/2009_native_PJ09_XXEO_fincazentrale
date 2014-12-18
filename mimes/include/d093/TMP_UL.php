<ul>
	<?php do { ?>
	<li><?php echo $row_D093_Content['Spalte1']; ?></li>
	<?php } while ($row_D093_Content = mysql_fetch_assoc($D093_Content)); ?>
</ul>
