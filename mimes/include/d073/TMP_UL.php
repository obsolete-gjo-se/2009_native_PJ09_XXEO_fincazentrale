<ul>
	<?php do { ?>
	<li><?php echo $row_D073_Content['Spalte1']; ?></li>
	<?php } while ($row_D073_Content = mysql_fetch_assoc($D073_Content)); ?>
</ul>
