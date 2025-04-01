<?php
include "Connect.php";
$id_customer = $_GET["ID_CUSTOMER"];
$conn->query("DELETE FROM CUSTOMER WHERE ID_CUSTOMER=$id_customer");
header("Location: index.php");
?>