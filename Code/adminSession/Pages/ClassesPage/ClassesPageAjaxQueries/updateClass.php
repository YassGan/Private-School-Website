<?php

include "../../../../connect.php";

if (isset($_POST['hiddenDataIdSend'])) {
    $IdClassUpdate = $_POST['hiddenDataIdSend'];

    $UpdatelevelId = $_POST['SendUpdatelevelId'];

    $UpdatePupilNumber = $_POST['SendUpdatePupilNumber'];
    $UpdateClassClassification = $_POST['SendUpdateClassClassification'];
    $UpdateScienceTeacher = $_POST['SendUpdateScienceTeacher'];

    $UpdateFrenchTeacher = $_POST['SendUpdateFrenchTeacher'];
    $UpdateArabicTeacher = $_POST['SendUpdateArabicTeacher'];
    $UpdateEnglishTeacher = $_POST['SendUpdateEnglishTeacher'];

    $UpdateNomClasse = $UpdatelevelId . "ème " . $UpdateClassClassification;








    $sql = "update `classestable` set 
    niveau='$UpdatelevelId',
    classification='$UpdateClassClassification',
    NomClasse='$UpdateNomClasse',

    nbdélèves='$UpdatePupilNumber',
    ProfFrançais='$UpdateFrenchTeacher',
    ProfAnglais='$UpdateEnglishTeacher',

    ProfArabe='$UpdateArabicTeacher',
    ProfSciencs='$UpdateScienceTeacher'where id='$IdClassUpdate'";
    $result = mysqli_query($con, $sql);
}
