<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Edit Data Customer</h2>
        <div class="card p-4">
            <?php
            include "Connect.php";
            $id_customer = $_GET["ID_CUSTOMER"];
            $result = $conn->query("SELECT * FROM CUSTOMER WHERE ID_CUSTOMER=$id_customer");
            $row = $result->fetch_assoc();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["NAME"];
                $email = $_POST["EMAIL"];
                $sql = "UPDATE CUSTOMER SET NAME='$name', EMAIL='$email' WHERE ID_CUSTOMER=$id_customer";
                if ($conn->query($sql)) {
                    header("Location: index.php");
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
                }
            }
            ?>
            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="NAME" class="form-control" value="<?= $row['NAME'] ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="EMAIL" class="form-control" value="<?= $row['EMAIL'] ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>