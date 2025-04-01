<?php
include "Connect.php";
$id_customer = $_GET["ID_CUSTOMER"];
$result = $conn->query("SELECT * FROM CUSTOMER WHERE ID_CUSTOMER=$id_customer");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["NAME"];
    $email = $_POST["EMAIL"];
    $sql = "UPDATE CUSTOMER SET NAME='$name', EMAIL='$email' WHERE ID_CUSTOMER=$id_customer";

    if($conn->query($sql)) {
        header("Location: index.php");
    } 
    else {
        echo "Error : " . $conn->error;
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>EDIT CUSTOMER</title>
    </head>
    <body>
        <form method = "post">
            Nama : <input type = "text" name="NAME" value="<?= $row ['NAME'] ?>" required><br>
            Email : <input type = "email" name="EMAIL" value="<?= $row['EMAIL'] ?>" required><br>
            <button type="submit">UPDATE</button>
        </from>
        <a href = "index.php">KEMBALI</a>
    </body>
</html>