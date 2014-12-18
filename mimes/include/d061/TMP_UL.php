<ul>
	<?php do { ?>
	<li><?php echo $row_D061_Content['Spalte1']; ?></li>
	<?php } while ($row_D061_Content = mysql_fetch_assoc($D061_Content)); ?>
</ul>
