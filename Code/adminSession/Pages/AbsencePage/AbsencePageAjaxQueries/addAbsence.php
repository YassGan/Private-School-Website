<?php
include "../../../connect.php";


extract($_POST);

if (isset($_POST['SendidElèveSendtoDatabase']) && isset($_POST['SendAbsenceStatue']) && isset($_POST['SendDateInput'])) {

    $sqlSelectLatestDate = "select * from  `latestdateabsencewasdone`";
    $resultSelectLatestDate = mysqli_query($con, $sqlSelectLatestDate);
    // $numLatest = mysqli_num_rows($resultSelectLatestDate);

    while ($row = mysqli_fetch_assoc($resultSelectLatestDate)) {
        $LatestDate = $row['LatestDay_Absence_was_done'];

        if ($LatestDate < $_POST['SendDateInput']) {

            $sqlUpdateLatestDate = "update `latestdateabsencewasdone` set 
             LatestDay_Absence_was_done='$SendDateInput'";
            $resultUpdateLatestDate = mysqli_query($con, $sqlUpdateLatestDate);
        }
        // if ($LatestDate < $_POST['SendDateInput']) {
        //     $sqlUpdateLatestDate = "update `latestdateabsencewasdone` set 
        //     LatestDay_Absence_was_done='$SendDateInput'";
        //     $resultUpdateLatestDate = mysqli_query($con, $sqlUpdateLatestDate);

        // }
        // if ($LatestDate == $_POST['SendDateInput']) {
        //     $sqlDate = "insert into `teachersstudentsabsence` (idTeacherStudent,Date,AbsenceState) values('testDateComparisonEqual','testDateComparisonEqual','testDateComparisonEqual')";
        //     $resultsqlDate = mysqli_query($con, $sqlDate);
        // }
    }












    $sqlSelect = "select * from  `teachersstudentsabsence` where Date='$SendDateInput' and idTeacherStudent='$SendidElèveSendtoDatabase' ";
    $resultSelect = mysqli_query($con, $sqlSelect);
    $num = mysqli_num_rows($resultSelect);
    if ($num >= 1) {
        $sql2 = "insert into `teachersstudentsabsence` (idTeacherStudent,Date,AbsenceState) values('PupilFoundToUpdate','PupilFoundToUpdate','PupilFoundToUpdate')";
        $result2 = mysqli_query($con, $sql2);


        $sql = "update `teachersstudentsabsence` set 
        AbsenceState='$SendAbsenceStatue',
        idTeacherStudent='$SendidElèveSendtoDatabase',
        Date='$SendDateInput' where idTeacherStudent='$SendidElèveSendtoDatabase' and Date='$SendDateInput' ";
        $result = mysqli_query($con, $sql);
    } else {
        $sql = "insert into `teachersstudentsabsence` (idTeacherStudent,Date,AbsenceState) values('$SendidElèveSendtoDatabase','$SendDateInput','$SendAbsenceStatue')";
        $result = mysqli_query($con, $sql);
    }
}