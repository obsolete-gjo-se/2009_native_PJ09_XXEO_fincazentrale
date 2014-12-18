	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D021_Content['Spalte1']; ?></td>
		<td><?php echo $row_D021_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D021_Content = mysql_fetch_assoc($D021_Content)); ?>
	</table>
