	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D022_Content['Spalte1']; ?></td>
		<td><?php echo $row_D022_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D022_Content = mysql_fetch_assoc($D022_Content)); ?>
	</table>
