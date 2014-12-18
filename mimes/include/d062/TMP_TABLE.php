	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D062_Content['Spalte1']; ?></td>
		<td><?php echo $row_D062_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D062_Content = mysql_fetch_assoc($D062_Content)); ?>
	</table>
