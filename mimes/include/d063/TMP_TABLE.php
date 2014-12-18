	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D063_Content['Spalte1']; ?></td>
		<td><?php echo $row_D063_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D063_Content = mysql_fetch_assoc($D063_Content)); ?>
	</table>
