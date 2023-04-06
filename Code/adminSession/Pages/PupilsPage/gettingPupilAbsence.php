<?php


include "../../../connect.php";

if (isset($_POST['SendPupilIdAbsence'])) {
    $SendPupilId = $_POST['SendPupilIdAbsence'];

    $table = '<table class="table">
    <thead>
      <tr>
        <th scope="col">Date</th>
      </tr>
    </thead>';

    $sql = "select * from `teachersstudentsabsence` where AbsenceState='No' and idTeacherStudent='$SendPupilId'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $Date = $row['Date'];

        $table .= ' <tr>
        <th scope="col">' . $Date . '</th>

      

      </tr>';
    }
    $table .= '</table>';
    echo $table;
}
