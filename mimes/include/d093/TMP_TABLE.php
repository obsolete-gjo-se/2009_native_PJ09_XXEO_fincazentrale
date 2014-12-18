	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D093_Content['Spalte1']; ?></td>
		<td><?php echo $row_D093_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D093_Content = mysql_fetch_assoc($D093_Content)); ?>
	</table>
