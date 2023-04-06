<?php
include "../../../connect.php";


extract($_POST);

if (isset($_POST['SendidStudent']) && isset($_POST['SendidDate']) && isset($_POST['SendidPaidMonth'])) {
    $sql = "insert into `tabpaiment` (date,idElève,nomMoisPayé) values('$SendidDate','$SendidStudent','$SendidPaidMonth')";
    $result = mysqli_query($con, $sql);
}
