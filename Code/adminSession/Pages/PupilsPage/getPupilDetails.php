<?php

include "../../../connect.php";

if (isset($_POST['PupilClickedIdSend'])) {
    $user_id = $_POST['PupilClickedIdSend'];
    $sql = "select * from `élèvetable` where id='$user_id'";
    $result = mysqli_query($con, $sql);
    $response = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status'] = 200;
    $response['message'] = "invalid or data not found";
}
