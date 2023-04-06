<?php
include "../../../connect.php";


extract($_POST);

if (isset($_POST['SENDbase64image']) && isset($_POST['SENDverification'])) {
    $sql = "insert into `gradesverification` (base64,	verificationCode	) values('$SENDbase64image','$SENDverification')";
    $result = mysqli_query($con, $sql);
}