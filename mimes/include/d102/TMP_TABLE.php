	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D102_Content['Spalte1']; ?></td>
		<td><?php echo $row_D102_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D102_Content = mysql_fetch_assoc($D102_Content)); ?>
	</table>
