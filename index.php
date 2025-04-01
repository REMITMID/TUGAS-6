<?php
include "Connect.php";
$result = $conn->query("SELECT * FROM CUSTOMER");
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>DATA USERS</title>
        <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
</style>
    </head>
    <body>
        <h2>DAFTAR CLIENT</h2>
        <a href="add.php">Tambah Data Client</a>
        <table>
        <tr>
            <th>ID_CUSTOMER</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>AKSI</th>
        </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['ID_CUSTOMER'] ?></td>
                <td><?= $row['NAME'] ?></td>
                <td><?= $row['EMAIL'] ?></td>
                <td>
                    <a href = "edit.php?ID_CUSTOMER=<?= $row['ID_CUSTOMER'] ?>">EDIT</a> |
                    <a href = "delete.php?ID_CUSTOMER=<?= $row['ID_CUSTOMER'] ?>" onclick="return confirm('Yakin ingin menghapus?!')">HAPUS</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>
