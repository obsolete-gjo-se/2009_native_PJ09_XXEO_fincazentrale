<ul>
	<?php do { ?>
	<li><?php echo $row_D022_Content['Spalte1']; ?></li>
	<?php } while ($row_D022_Content = mysql_fetch_assoc($D022_Content)); ?>
</ul>
