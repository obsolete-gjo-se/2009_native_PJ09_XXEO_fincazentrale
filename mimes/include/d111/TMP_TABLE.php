	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D111_Content['Spalte1']; ?></td>
		<td><?php echo $row_D111_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D111_Content = mysql_fetch_assoc($D111_Content)); ?>
	</table>
