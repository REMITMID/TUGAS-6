<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Daftar Client</h2>
        <a href="add.php" class="btn btn-primary mb-3">Tambah Data Client</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Customer</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "Connect.php";
                $result = $conn->query("SELECT * FROM CUSTOMER");
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['ID_CUSTOMER'] ?></td>
                        <td><?= $row['NAME'] ?></td>
                        <td><?= $row['EMAIL'] ?></td>
                        <td>
                            <a href="edit.php?ID_CUSTOMER=<?= $row['ID_CUSTOMER'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?ID_CUSTOMER=<?= $row['ID_CUSTOMER'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?!')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>