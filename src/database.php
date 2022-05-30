<?php
    $host = '' // fill host
    $user = '' // fill user

    // Create connection
    $conn = new mysqli($host, $user);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    mysqli_select_db($conn, 'ecommerce_store');

    $sql = "SELECT * FROM Products WHERE rating=5 AND type='shoe'";
    $top_shoes = $conn->query($sql);

    $sql = "SELECT * FROM Products WHERE id=4";
    $newest_shoe = $conn->query($sql);

    $sql = "SELECT * FROM Products where type='shoe'";
    $all_shoes = $conn->query($sql);

    $sql = "SELECT * FROM Products where type='accessory'";
    $all_accessories = $conn->query($sql);
?>
