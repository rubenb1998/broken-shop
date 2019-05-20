<?php

require_once ('db/connection.php');


if (isset($_POST['login']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query 		= mysqli_query($conn, "SELECT * FROM users WHERE  password='$password' and username='$username'");
    $row		= mysqli_fetch_array($query);
    $num_row 	= mysqli_num_rows($query);

    if ($num_row > 0)
    {
        $_SESSION['id']=$row['id'];
        header('location:home.php');

    }
    else
    {
        echo 'probeer harder';
    }
}
?>