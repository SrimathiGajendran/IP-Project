<?php
include 'includes/dbconnection.php';

$id = $_GET['id'];
$sql = "DELETE FROM cart WHERE id='" . $id . "'";

if ($con->query($sql) === TRUE)
{
    header("Location:cart.php");
}
else
{
    echo "Error in removing this product from cart";
}

$conn->close();
?>