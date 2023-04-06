<?php
include "../../../../connect.php";


extract($_POST);

if (isset($_POST['titleNameSend']) && isset($_POST['dateEventSend']) && isset($_POST['couleurChoisieSend'])) {
    $d = strtotime("today");
    $todayDate = date("Y-m-d ", $d);
    //echo "$dateEventSend";
    $sql = "insert into `calendar`(dateAjout,dateChoisie,EventTitle,CouleurChoisie)values('$todayDate','$dateEventSend','$titleNameSend','$couleurChoisieSend')";

    $result = mysqli_query($con, $sql);
}
