	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D113_Content['Spalte1']; ?></td>
		<td><?php echo $row_D113_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D113_Content = mysql_fetch_assoc($D113_Content)); ?>
	</table>
