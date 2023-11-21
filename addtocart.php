<?php
include 'includes/dbconnection.php';
if (!empty($_GET)) {
    $id = $_GET['id'];
    $sql = "INSERT INTO cart (p_id) VALUES('$id')";

    if ($result = $con->query($sql)) {
        header("Location:shop.php");
    } else {
        header("Location:shop.php");
    }
} else {
    header("Location:shop.php");
}
?>