	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D061_Content['Spalte1']; ?></td>
		<td><?php echo $row_D061_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D061_Content = mysql_fetch_assoc($D061_Content)); ?>
	</table>
