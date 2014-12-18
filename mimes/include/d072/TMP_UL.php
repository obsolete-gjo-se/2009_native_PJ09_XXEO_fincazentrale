<ul>
	<?php do { ?>
	<li><?php echo $row_D072_Content['Spalte1']; ?></li>
	<?php } while ($row_D072_Content = mysql_fetch_assoc($D072_Content)); ?>
</ul>
