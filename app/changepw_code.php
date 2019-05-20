<?php

require_once ('db/connection.php');

$username = $password = '';

$username = $_POST['username'];
$password = $_POST['password'];

    $sql = "UPDATE users SET password= WHERE id=" . $_SESSION['id'];
    $query = $mysqli->query($sql);

