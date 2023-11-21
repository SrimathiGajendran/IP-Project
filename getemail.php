<?php

include 'includes/dbconnection.php';
include('includes/nav.php');
if (isset($_POST['purchase'])) {
    if (empty($_POST['email'])) {
        echo "Email is required and cannot be empty!";
    } else {

        $sql = "TRUNCATE TABLE cart";
        $result = $con->query($sql);

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = test_input($_POST['email']);
?>
        <h3 style="text-align: center;">All Products has been pruchased by <?php echo $_POST['email'] ?></h3>

<?php
    }
}
?>