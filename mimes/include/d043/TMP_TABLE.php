	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D043_Content['Spalte1']; ?></td>
		<td><?php echo $row_D043_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D043_Content = mysql_fetch_assoc($D043_Content)); ?>
	</table>
