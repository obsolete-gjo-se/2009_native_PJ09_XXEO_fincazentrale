	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D052_Content['Spalte1']; ?></td>
		<td><?php echo $row_D052_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D052_Content = mysql_fetch_assoc($D052_Content)); ?>
	</table>
