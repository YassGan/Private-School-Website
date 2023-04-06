<?php


include "../../../connect.php";

if (isset($_POST['updateidSend'])) {

    $user_id = $_POST['updateidSend'];
    $EnglishNotes = [];
    $ArabicNotes = [];
    $FrenchNotes = [];
    $SciencesNotes = [];



    $sql2 = "select * from `gradestable` where idElève='$user_id'";
    $result2 = mysqli_query($con, $sql2);

    while ($row = mysqli_fetch_assoc($result2)) {
        $class = $row["ClasseElève"];
    }



    $sql = "select * from `gradestable` where ClasseElève='$class'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($EnglishNotes, $row["noteAnglais"]);
        array_push($ArabicNotes, $row["noteArabe"]);
        array_push($FrenchNotes, $row["noteFrançais"]);
        array_push($SciencesNotes, $row["noteSciences"]);
    }

    $maxEnglish = max($EnglishNotes);
    $maxFrench = max($FrenchNotes);
    $maxSciences = max($SciencesNotes);
    $maxArabic = max($ArabicNotes);

    $minEnglish = min($EnglishNotes);
    $minFrench = min($FrenchNotes);
    $minSciences = min($SciencesNotes);
    $minArabic = min($ArabicNotes);


    $avgEnglish = array_sum($EnglishNotes) / count($EnglishNotes);
    $avgFrench = array_sum($FrenchNotes) / count($FrenchNotes);
    $avgSciences = array_sum($SciencesNotes) / count($SciencesNotes);
    $avgArabic = array_sum($ArabicNotes) / count($ArabicNotes);



    $avgHighest = ($maxEnglish + $maxFrench + $maxSciences + $maxArabic) / 4;
    $avgLowest = ($minEnglish + $minFrench + $minSciences + $minArabic) / 4;




    $Notes = $maxEnglish . "/" . $maxFrench . "/" . $maxSciences . "/" . $maxArabic . "/" . $minEnglish . "/" . $minFrench . "/" . $minSciences . "/" . $minArabic . "/" . $avgHighest . "/" . $avgLowest;


    echo ($Notes);
}