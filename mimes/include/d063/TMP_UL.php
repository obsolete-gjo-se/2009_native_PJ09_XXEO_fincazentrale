<ul>
	<?php do { ?>
	<li><?php echo $row_D063_Content['Spalte1']; ?></li>
	<?php } while ($row_D063_Content = mysql_fetch_assoc($D063_Content)); ?>
</ul>
