<ul>
	<?php do { ?>
	<li><?php echo $row_D052_Content['Spalte1']; ?></li>
	<?php } while ($row_D052_Content = mysql_fetch_assoc($D052_Content)); ?>
</ul>
