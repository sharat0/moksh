<?php

    include '_config.php';

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the visitor's IP address exists in the database
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $sql = "SELECT * FROM visitors WHERE ip_address = '$ip_address'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        // If the IP address is not in the database, insert a new row with the IP address and set the visit count to 1
        $sql = "INSERT INTO visitors (ip_address, visit_count) VALUES ('$ip_address', 1)";
        mysqli_query($conn, $sql);
    } else {
        // If the IP address is in the database, update the visit count by 1
        $row = mysqli_fetch_assoc($result);
        $visit_count = $row['visit_count'] ++;
        $sql = "UPDATE visitors SET visit_count = $visit_count WHERE ip_address = '$ip_address'";
        mysqli_query($conn, $sql);
    }
    mysqli_close($conn);

?>