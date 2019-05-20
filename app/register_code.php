<?php
require_once ('db/connection.php');
$username = $email = $password = '';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
$result = mysqli_query($conn, $sql);

if($result)
{
    header("Location: login.php");
}
else
{
    echo "Error :".$sql;
}
?>