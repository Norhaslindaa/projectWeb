<?php
require '../conn.php';

$idcustomer = $_GET['idcustomer'];
$sql = "SELECT username FROM customer WHERE idcustomer = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idcustomer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$password = password_hash($username, PASSWORD_DEFAULT);
$stmt->close();

$sql = "UPDATE customer SET password = ? WHERE idcustomer = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $password, $idcustomer);
$stmt->execute();

header('location: index.php?menu=senarai');