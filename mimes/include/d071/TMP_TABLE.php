	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D071_Content['Spalte1']; ?></td>
		<td><?php echo $row_D071_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D071_Content = mysql_fetch_assoc($D071_Content)); ?>
	</table>
