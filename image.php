<?php
    include("database/db.php");

    $id = $_GET['id'];

    $query = "SELECT image FROM task WHERE id = $id";
    $result_task = mysqli_query($conn, $query);

    $img_data = mysqli_fetch_assoc($result_task);

    header("content-type: image/jpg");

    echo $img_data['image'];
?>