<ul>
	<?php do { ?>
	<li><?php echo $row_D091_Content['Spalte1']; ?></li>
	<?php } while ($row_D091_Content = mysql_fetch_assoc($D091_Content)); ?>
</ul>
