<ul>
	<?php do { ?>
	<li><?php echo $row_D082_Content['Spalte1']; ?></li>
	<?php } while ($row_D082_Content = mysql_fetch_assoc($D082_Content)); ?>
</ul>
