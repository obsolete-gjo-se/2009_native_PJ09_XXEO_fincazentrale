
<table>
    <tr>
        <th>Name</th>
        <th>Kurzbeschreibung</th>
        <th>Wochenpreis</th>
        <th></th>
    </tr>
    <?php do { ?>
        <tr>
            <td><?php echo $row_D071_Content['Spalte1']; ?></td>
            <td><?php echo $row_D071_Content['Spalte2'] . '<br />' . $row_D071_Content['Spalte3']; ?></td>
            <td><?php echo 'ab ' . $row_D071_Content['Spalte4'] . ',00€'; ?></td>
            <td><img src="<?php echo $row_D071_Content['Spalte5']; ?>" alt="<?php echo $row_D071_Content['Spalte6']; ?>" /></td>
        </tr>
        <?php } while ($row_D071_Content = mysql_fetch_assoc($D071_Content)); ?>
</table>
