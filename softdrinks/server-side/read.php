<?php
    header("Access-Control-Allow-Origin: *");
    $con = mysqli_connect("localhost", "root", "", "softdrinks");
    $result = mysqli_query($con, "SELECT * FROM softdrink");
    $softdrink = [];
    while($record = mysqli_fetch_assoc($result))
        $softdrink[] = $record;

    echo json_encode($sofdrink);

    mysqli_close($con);
?>