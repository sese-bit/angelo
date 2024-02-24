<?php
    header("Access-Control-Allow-Origin: *");
    $con = mysqli_connect("localhost", "root", "", "softdrinks");
    if(isset($_POST['data'])) {
        $data = json_decode($_POST['data']);
        $strSql = "INSERT INTO softdrink(name, type, owner, founder, date_est) 
                VALUES(
                    '" . $data->name . "', 
                    '" . $data->type . "', 
                    '" . $data->owner . "',
                    '" . $data->founder . "', 
                    '" . $data->date_est . "')";
        
        if(mysqli_query($con, $strSql))
            echo json_encode(["data" => "Success"]);
        else
            echo json_encode(["data" => "Failed"]);
    }
    mysqli_close($con);
?>