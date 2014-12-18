<ul>
	<?php do { ?>
	<li><?php echo $row_D111_Content['Spalte1']; ?></li>
	<?php } while ($row_D111_Content = mysql_fetch_assoc($D111_Content)); ?>
</ul>
