	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D051_Content['Spalte1']; ?></td>
		<td><?php echo $row_D051_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D051_Content = mysql_fetch_assoc($D051_Content)); ?>
	</table>
