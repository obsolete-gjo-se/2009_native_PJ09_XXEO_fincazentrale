<ul>
	<?php do { ?>
	<li><?php echo $row_D103_Content['Spalte1']; ?></li>
	<?php } while ($row_D103_Content = mysql_fetch_assoc($D103_Content)); ?>
</ul>
