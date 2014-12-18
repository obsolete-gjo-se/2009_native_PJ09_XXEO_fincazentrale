<ul>
	<?php do { ?>
	<li><?php echo $row_D112_Content['Spalte1']; ?></li>
	<?php } while ($row_D112_Content = mysql_fetch_assoc($D112_Content)); ?>
</ul>
