	<table>
	<?php do { ?>
	<tr>
		<td><img src="<?php echo $row_D102_Content['Spalte1']; ?>" alt="" /></td>
		<td><img src="<?php echo $row_D102_Content['Spalte2']; ?>" alt="" /></td>
	</tr>
	<?php } while ($row_D102_Content = mysql_fetch_assoc($D102_Content)); ?>
	</table>
