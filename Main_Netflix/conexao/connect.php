<?php
$conn = mysqli_connect("localhost", "root", "", "bdnetflix");


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>