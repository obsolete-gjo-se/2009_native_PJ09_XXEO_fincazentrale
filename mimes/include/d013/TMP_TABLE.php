	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D013_Content['Spalte1']; ?></td>
		<td><?php echo $row_D013_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D013_Content = mysql_fetch_assoc($D013_Content)); ?>
	</table>
