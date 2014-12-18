<ul>
	<?php do { ?>
	<li><?php echo $row_D043_Content['Spalte1']; ?></li>
	<?php } while ($row_D043_Content = mysql_fetch_assoc($D043_Content)); ?>
</ul>
