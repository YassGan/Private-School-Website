<?php


include "../../../connect.php";


if (($_POST['classChoiceSend'] != "choose_a_class") && ($_POST['semestreSend'] != "Choose_a_semestre") && ($_POST['scolaryearSend'] != "Choose_a_year")) {


  $chosedClass =  $_POST['classChoiceSend'];
  $chosedSemestre = $_POST['semestreSend'];
  $chosedYear = $_POST['scolaryearSend'];



  $table = '<table class="table">
   <thead>
     <tr  >
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


  $sql = "select * from `gradestable` where ClasseElève='$chosedClass' and Semestre='$chosedSemestre' and AnnéeScolaire='$chosedYear' ";

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
       <tr class="gradesElement" onclick="clickedId( ' . $idElève . ')" >
           <th  scope="col">' . $idElève . '</th>
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
} else if (($_POST['classChoiceSend'] != "choose_a_class") && ($_POST['scolaryearSend'] != "Choose_a_year")) {


  $chosedClass =  $_POST['classChoiceSend'];
  $chosedYear = $_POST['scolaryearSend'];


  $table = '<table class="table">
   <thead>
     <tr >
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


  $sql = "select * from `gradestable` where ClasseElève='$chosedClass' and AnnéeScolaire='$chosedYear' ";

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
       <tr class="gradesElement" onclick="clickedId( ' . $idElève . ')" >
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
