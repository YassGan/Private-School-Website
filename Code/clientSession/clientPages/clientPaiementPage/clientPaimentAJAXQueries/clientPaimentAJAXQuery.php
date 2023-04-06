

<?php


include "../../../../connect.php";

if (isset($_POST['pupilIdPaiment'])) {

    
    $user_id = $_POST['pupilIdPaiment'];
    $sql = "select * from `tabpaiment` where idElève='$user_id'";
    $result = mysqli_query($con, $sql);
    $response = [];
    $i=0;
    while ($row = mysqli_fetch_assoc($result)) {
        $response[$i] = $row;
        $i++;
    }
    echo json_encode($response);
}
 else {
    $response['status'] = 200;
    $response['message'] = "invalid or data not found";
}



