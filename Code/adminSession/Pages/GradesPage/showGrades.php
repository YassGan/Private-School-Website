<?php


include "../../../connect.php";

if (isset($_POST['displayDataSend'])) {
    $table = '<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">First, Second Name</th>
        <th scope="col">Class</th>
        <th scope="col">Arabic grade</th>
        <th scope="col">French grade</th>
        <th scope="col">Science grade</th>

        <th scope="col">English grande</th>
        <th scope="col">Average</th>

      </tr>
    </thead>';

    $sql = "select * from `gradestable`";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $idElève = $row['idElève'];
        $NomElève = $row['NomElève'];
        $PrénomElève = $row['PrénomElève'];
        $ClasseElève = $row['ClasseElève'];


        $noteAnglais = $row['noteAnglais'];
        $noteSciences = $row['noteSciences'];
        $noteFrançais = $row['noteFrançais'];
        $noteArabe = $row['noteArabe'];
        $MoyenneGénérale = $row['MoyenneGénrale'];




        $table .= ' 
        <tr>
            <th scope="col">' . $idElève . '</th>
            <th scope="col">' . $NomElève . ' ' . $PrénomElève . '</th>
            <th scope="col">' . $ClasseElève . '</th>
            <th scope="col">' . $noteArabe . '</th>
            <th scope="col">' . $noteFrançais . '</th>
            <th scope="col">' . $noteSciences . '</th>
            <th scope="col">' . $noteAnglais . '</th>
            <th scope="col">' . $MoyenneGénérale . '</th>
        </tr>
        
        
        ';
    }
    $table .= '</table>';
    echo $table;
}
