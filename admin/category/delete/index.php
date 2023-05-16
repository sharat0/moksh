<?php
    require('../../../essentials/_config.php');
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM category WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        // delete product where category 
        $sql = "DELETE FROM products WHERE category='$id'";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            echo '<script>close();</script>';

        } else {
            echo '<script>alert("Error")</script>';
        }
    }
    else {
        // redirect to ../
        echo '<script>window.location.href = "../"</script>';
    }
?>