<ul>
	<?php do { ?>
	<li><?php echo $row_D053_Content['Spalte1']; ?></li>
	<?php } while ($row_D053_Content = mysql_fetch_assoc($D053_Content)); ?>
</ul>
