<?php
include "../../../../connect.php";


if (isset($_POST['SendidToDelete'])) {
    $idUserDelete = $_POST['SendidToDelete'];

    $sql = "delete from `classestable` where id=$idUserDelete";
    $result = mysqli_query($con, $sql);
}
