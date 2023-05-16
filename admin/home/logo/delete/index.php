<?php
require('../../../../essentials/_config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // delete image from uploads directory
    $sql = "SELECT * FROM logo WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $img = $row['img'];
    // delete from uploads directory
    unlink('../../../../uploads/logo/' . $img);
    // delete from db
    $sql = "DELETE FROM logo WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>close();</script>';

    } else {
        echo '<script>alert("Error")</script>';
    }
} else {
    // redirect to ../
    echo '<script>window.location.href = "../"</script>';
}
?>