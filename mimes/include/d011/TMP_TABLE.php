	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D011_Content['Spalte1']; ?></td>
		<td><?php echo $row_D011_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D011_Content = mysql_fetch_assoc($D011_Content)); ?>
	</table>
