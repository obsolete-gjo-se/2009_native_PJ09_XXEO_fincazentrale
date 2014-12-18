	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D041_Content['Spalte1']; ?></td>
		<td><?php echo $row_D041_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D041_Content = mysql_fetch_assoc($D041_Content)); ?>
	</table>
