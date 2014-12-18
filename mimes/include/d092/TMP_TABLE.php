	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D092_Content['Spalte1']; ?></td>
		<td><?php echo $row_D092_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D092_Content = mysql_fetch_assoc($D092_Content)); ?>
	</table>
