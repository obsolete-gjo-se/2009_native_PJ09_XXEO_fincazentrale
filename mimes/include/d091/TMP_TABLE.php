	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D091_Content['Spalte1']; ?></td>
		<td><?php echo $row_D091_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D091_Content = mysql_fetch_assoc($D091_Content)); ?>
	</table>
