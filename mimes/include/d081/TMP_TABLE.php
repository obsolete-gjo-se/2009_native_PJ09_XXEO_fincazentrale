	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D081_Content['Spalte1']; ?></td>
		<td><?php echo $row_D081_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D081_Content = mysql_fetch_assoc($D081_Content)); ?>
	</table>
