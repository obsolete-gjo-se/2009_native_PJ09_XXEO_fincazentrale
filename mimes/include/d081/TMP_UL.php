<ul>
	<?php do { ?>
	<li><?php echo $row_D081_Content['Spalte1']; ?></li>
	<?php } while ($row_D081_Content = mysql_fetch_assoc($D081_Content)); ?>
</ul>
