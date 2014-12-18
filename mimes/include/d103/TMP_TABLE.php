	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D103_Content['Spalte1']; ?></td>
		<td><?php echo $row_D103_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D103_Content = mysql_fetch_assoc($D103_Content)); ?>
	</table>
