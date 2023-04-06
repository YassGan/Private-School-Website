<?php


include "../../../connect.php";

if (isset($_POST['SendPupilIdAbsence'])) {
    $SendPupilId = $_POST['SendPupilIdAbsence'];

    $table = '<table class="table">
    <thead>
      <tr>
        <th scope="col">Nom du mois payé</th>
        <th scope="col">Date de paiment</th>
      </tr>
    </thead>';

    $sql = "select * from `tabpaiment` where idElève='$SendPupilId'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $date = $row['date'];
        $MoisPayé = $row['nomMoisPayé'];


        $table .= ' 
        <tr>
            <th scope="col">' . $MoisPayé . '</th>
            <th scope="col">' . $date . '</th>
        </tr>';
    }
    $table .= '</table>';
    echo $table;
}
