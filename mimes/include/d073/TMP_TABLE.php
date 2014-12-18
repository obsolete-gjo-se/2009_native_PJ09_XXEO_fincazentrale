	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D073_Content['Spalte1']; ?></td>
		<td><?php echo $row_D073_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D073_Content = mysql_fetch_assoc($D073_Content)); ?>
	</table>
