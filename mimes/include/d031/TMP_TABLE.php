	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D031_Content['Spalte1']; ?></td>
		<td><?php echo $row_D031_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D031_Content = mysql_fetch_assoc($D031_Content)); ?>
	</table>
