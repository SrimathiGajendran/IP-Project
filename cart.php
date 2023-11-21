<html>
<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        table {
            width: 100%;
            border: 1px solid #000;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #000;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #ddd;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tfoot tr {
            background-color: #ddd;
        }

        form {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #000;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #333;
        }

        p {
            margin-top: 10px;
        }
  
</style>

<?php
$page_title = 'Cart';


include 'includes/dbconnection.php';

$sql = "SELECT * from cart";
$result = $con->query($sql);
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name of Chocolate</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price of Chocolate</th>
            <th scope="col">Operation</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $total = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['p_id'];
                $order_id = $row['id'];

                $sql1 = "SELECT * from products_table WHERE p_id='" . $id . "'";
                $result1 = $con->query($sql1);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = $result1->fetch_assoc()) {
                        $total += $row1['price']; ?>
                        <tr>
                            <td style="color : black"><?= $row1['name']; ?></td>
                            <td><?= $row1['min_order']; ?></td>
                            <td>$<?= $row1['price']; ?></td>
                            <td><a href="deletecart.php?id=<?= $row['id']; ?>"><button>Remove</button></a></td>
                        </tr>
            <?php
                    }
                }
            }
            ?></tbody>
    <tfoot>
        <tr>
            <th colspan="2">Total (Before Tax) :</th>
            <td>$<?= $total; ?></td>
        </tr>
        <tr>
            <th colspan="2">Tax :</th>
            <td>$<?= $tax = (($total * 15) / 100); ?></td>
        </tr>
        <tr>
            <th colspan="2">Grand Total :</th>
            <td>$<?= $total + $tax; ?></td>
        </tr>
    </tfoot>
</table><br>
<form action="getemail.php" method="POST">
    <label for="email">Email: </label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required><br>
    <small>Enter your email to proceed checkout.</small>
    <p><button type="submit" class="w3-button w3-black w3-round-xxlarge" name="purchase">Checkout</button></p>
</form><?php
        } else {
        ?><p>There are no items in cart.</p>
<?php
        }
$con->close();
?>
    <button onclick="goBack()">Go Back</button>

<script>
    function goBack() {
        window.history.back();
    }
</script>
</html>

