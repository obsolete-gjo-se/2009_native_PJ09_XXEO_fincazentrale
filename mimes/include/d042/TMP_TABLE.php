	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D042_Content['Spalte1']; ?></td>
		<td><?php echo $row_D042_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D042_Content = mysql_fetch_assoc($D042_Content)); ?>
	</table>
