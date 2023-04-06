<?php


include "../../../../connect.php";

if (isset($_POST['pupilIdAbsenceSend'])) {
  $pupilIdAbsenceSend=  $_POST['pupilIdAbsenceSend'];
  $table = '<h4>
   Days absence list
    </h4>';

    
  $sql = "select * from `teachersstudentsabsence` where idTeacherStudent='$pupilIdAbsenceSend' ";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['Date'];


    $table .= '<h5> 
                  - '.$id.' 
      <h5/>';
  }
  echo $table;
}
