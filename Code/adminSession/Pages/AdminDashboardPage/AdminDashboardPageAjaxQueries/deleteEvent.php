<?php
include "../../../../connect.php";


if (isset($_POST['deletedUserIdSend'])) {
    $idUserDelete = $_POST['deletedUserIdSend'];

    $sql = "delete from `calendar` where id=$idUserDelete";
    $result = mysqli_query($con, $sql);
}
