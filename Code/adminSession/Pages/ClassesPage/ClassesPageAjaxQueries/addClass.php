<?php
include "../../../../connect.php";


extract($_POST);

if (
    isset($_POST['sendClassLevel'])
    && isset($_POST['sendClassNumberofPupils'])
    && isset($_POST['sendClassClassification'])
    && isset($_POST['sendScienceTeacher'])
    && isset($_POST['sendFrenchTeacher'])
    && isset($_POST['sendArabicTeacher'])
    && isset($_POST['sendEnglishTeacher'])

) {
    $nomClasse = $_POST['sendClassLevel'] . 'ème ' . $_POST['sendClassClassification'];


    $sql = "insert into `classestable` (`niveau`, `classification`, `NomClasse`, `nbdélèves`, `ProfFrançais`, `ProfAnglais`, `ProfArabe`, `ProfSciencs`) 
    values('$sendClassLevel','$sendClassClassification','$nomClasse','$sendClassNumberofPupils','$sendFrenchTeacher','$sendEnglishTeacher','$sendArabicTeacher','$sendScienceTeacher')";
    $result = mysqli_query($con, $sql);
}
