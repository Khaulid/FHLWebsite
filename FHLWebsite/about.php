<?php 
    $con = mysqli_connect('localhost', 'root');

    if($con) {
        echo "Connection Successful";
    }
    else {
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'merlinwebsite');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
     $email = $_POST['email'];


$query = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number')";

mysqli_query($con, $query);
header('location:index.php')

?>