<?php
    $id = $_GET["id"];
    include 'config.php';
    $query = "DELETE FROM user WHERE id = $id";
    $result = mysqli_query($conn, $query);
    header("Location: view_users.php");
?>