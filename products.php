<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload'])) {
    $pros = mysqli_connect('localhost', 'root', '', 'helium_clothing') or die("connection FAILED:" . mysqli_connect_error());
    if (isset($_POST['pname']) && isset($_POST['description']) && isset($_POST['price'])) {

        $pname = $_POST['pname'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $sql = "INSERT INTO products (pname, description, price) VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($pros, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $pname, $description, $price);

        if (mysqli_stmt_execute($stmt)) {
            echo 'You have Successfully added a product to your database!';
        } else {
            echo 'Error occurred: ' . mysqli_error($pros);
        }

        mysqli_stmt_close($stmt);
    }
}

?>
