	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D083_Content['Spalte1']; ?></td>
		<td><?php echo $row_D083_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D083_Content = mysql_fetch_assoc($D083_Content)); ?>
	</table>
