	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D033_Content['Spalte1']; ?></td>
		<td><?php echo $row_D033_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D033_Content = mysql_fetch_assoc($D033_Content)); ?>
	</table>
