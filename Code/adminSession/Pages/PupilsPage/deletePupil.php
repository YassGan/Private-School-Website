<?php
include "../../../connect.php";


if (isset($_POST['SendidPupilToDelete'])) {
    $idPupilDelete = $_POST['SendidPupilToDelete'];

    $sql = "delete from `élèvetable` where id=$idPupilDelete";
    $result = mysqli_query($con, $sql);
}