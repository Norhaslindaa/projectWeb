<h1>Senarai Nama Kereta</h1>
<table border="1">
    <tr>
        <th>Bil</th>
        <th>Carname</th>
        <th>Carbrand</th>
        <th>Priceperhour</th>
        <th>Priceperday</th>
        <th>Priceperweek</th>
        <th>Tindakan</th>
    </tr>
    <?php
    $bil = 1;
    $sql = " SELECT * FROM car ORDER BY carname";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->carname; ?></td>
            <td><?php echo $row->carbrand; ?></td>
            <td><?php echo $row->priceperhour; ?></td>
            <td><?php echo $row->priceperday; ?></td>
            <td><?php echo $row->priceperweek; ?></td>
            <td>
                <a href="reset.php?idcar=<?php echo $row->idcar; ?>">Reset</a>
                |
                <a href="edit.php?menu=edit&idcar=<?php echo $row->idcar; ?>">Edit</a>
                |
                <a href="delete.php?idcar=<?php echo $row->idcar; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>