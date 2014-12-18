	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D012_Content['Spalte1']; ?></td>
		<td><?php echo $row_D012_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D012_Content = mysql_fetch_assoc($D012_Content)); ?>
	</table>
