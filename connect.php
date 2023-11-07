<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'helium_clothing') or die("connection Failed:" .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])  && isset($_POST['address'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $sql = "INSERT INTO users (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

        $query = mysqli_query($conn, $sql);
        if($query){
            echo 'Successfully uploaded';
        }
        else{
            echo 'Error occurred';
        }
    }
}

?>
