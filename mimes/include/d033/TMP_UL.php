<ul>
	<?php do { ?>
	<li><?php echo $row_D033_Content['Spalte1']; ?></li>
	<?php } while ($row_D033_Content = mysql_fetch_assoc($D033_Content)); ?>
</ul>
