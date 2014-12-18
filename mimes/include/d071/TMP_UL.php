<ul>
	<?php do { ?>
	<li><?php echo $row_D071_Content['Spalte1']; ?></li>
	<?php } while ($row_D071_Content = mysql_fetch_assoc($D071_Content)); ?>
</ul>
