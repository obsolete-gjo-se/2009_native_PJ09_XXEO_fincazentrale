	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D023_Content['Spalte1']; ?></td>
		<td><?php echo $row_D023_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D023_Content = mysql_fetch_assoc($D023_Content)); ?>
	</table>
