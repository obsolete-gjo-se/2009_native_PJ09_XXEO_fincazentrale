<ul>
	<?php do { ?>
	<li><?php echo $row_D013_Content['Spalte1']; ?></li>
	<?php } while ($row_D013_Content = mysql_fetch_assoc($D013_Content)); ?>
</ul>
