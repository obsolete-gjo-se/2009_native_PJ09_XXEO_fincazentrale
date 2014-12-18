<ul>
	<?php do { ?>
	<li><?php echo $row_D011_Content['Spalte1']; ?></li>
	<?php } while ($row_D011_Content = mysql_fetch_assoc($D011_Content)); ?>
</ul>
