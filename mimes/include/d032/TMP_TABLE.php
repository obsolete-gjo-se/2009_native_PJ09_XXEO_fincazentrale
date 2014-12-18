	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D032_Content['Spalte1']; ?></td>
		<td><?php echo $row_D032_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D032_Content = mysql_fetch_assoc($D032_Content)); ?>
	</table>
