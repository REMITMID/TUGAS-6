<?php
include "Connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["NAME"];
    $email = $_POST["EMAIL"];
    $sql = "INSERT INTO CUSTOMER (NAME, EMAIL) VALUES ('$name','$email')";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error : " . $conn->error;
}
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>ADD CUSTOMER</title>
    </head>
    <body>
        <h2>Tambahkan Pelanggan</h2>
        <form method ="post">
            Nama <input type="text" name="NAME" required><br>
            Email <input type="email" name="EMAIL" required><br>
            <button type="submit">SIMPAN</button>
        </form>
        <a href="index.php">KEMBALI</a>
    </body>
</html>