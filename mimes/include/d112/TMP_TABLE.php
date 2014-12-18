	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D112_Content['Spalte1']; ?></td>
		<td><?php echo $row_D112_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D112_Content = mysql_fetch_assoc($D112_Content)); ?>
	</table>
