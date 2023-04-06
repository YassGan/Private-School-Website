<?php
include "../../../connect.php";


if (isset($_POST['SendidTeacherToDelete'])) {
    $idPupilDelete = $_POST['SendidTeacherToDelete'];

    $sql = "delete from `teacherstable` where id=$idPupilDelete";
    $result = mysqli_query($con, $sql);
}
