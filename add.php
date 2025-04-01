<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Tambahkan Pelanggan</h2>
        <div class="card p-4">
            <form method="post">
                <?php
                include "Connect.php";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST["NAME"];
                    $email = $_POST["EMAIL"];
                    $sql = "INSERT INTO CUSTOMER (NAME, EMAIL) VALUES ('$name','$email')";
                    if ($conn->query($sql)) {
                        header("Location: index.php");
                    } else {
                        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                    }
                }
                ?>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="NAME" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="EMAIL" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>