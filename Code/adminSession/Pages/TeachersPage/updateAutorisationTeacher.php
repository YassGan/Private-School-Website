<?php

include "../../../connect.php";

if (isset($_POST['idSend'])) {
    $CurrentAutorisation = $_POST['CurrentAutorisationSend'];
    $id = $_POST['idSend'];


    if ($CurrentAutorisation == "Yes") {
        $sql = "update `teacherstable` set autorisation='No' where id='$id'";
    }
    if ($CurrentAutorisation == "No") {
        $sql = "update `teacherstable` set autorisation='Yes' where id='$id'";
    }

    $result = mysqli_query($con, $sql);
}
