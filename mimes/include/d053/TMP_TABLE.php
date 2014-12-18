	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D053_Content['Spalte1']; ?></td>
		<td><?php echo $row_D053_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D053_Content = mysql_fetch_assoc($D053_Content)); ?>
	</table>
