	<table>
	<?php do { ?>
	<tr>
		<td><?php echo $row_D072_Content['Spalte1']; ?></td>
		<td><?php echo $row_D072_Content['Spalte2']; ?></td>
	</tr>
	<?php } while ($row_D072_Content = mysql_fetch_assoc($D072_Content)); ?>
	</table>
