<ul>
	<?php do { ?>
	<li><?php echo $row_D041_Content['Spalte1']; ?></li>
	<?php } while ($row_D041_Content = mysql_fetch_assoc($D041_Content)); ?>
</ul>
