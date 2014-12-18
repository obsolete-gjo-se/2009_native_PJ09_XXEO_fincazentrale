	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D101_Content['Spalte1']; ?></td>
		<td><?php echo $row_D101_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D101_Content = mysql_fetch_assoc($D101_Content)); ?>
	</table>
