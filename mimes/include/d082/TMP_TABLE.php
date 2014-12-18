	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D082_Content['Spalte1']; ?></td>
		<td><?php echo $row_D082_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D082_Content = mysql_fetch_assoc($D082_Content)); ?>
	</table>
