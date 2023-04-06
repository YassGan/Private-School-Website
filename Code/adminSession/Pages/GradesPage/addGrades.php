<?php
include "../../../connect.php";


extract($_POST);

if (
    isset($_POST['StudentIDSend'])
    && isset($_POST['SemestreSend'])
    && isset($_POST['annéeScolaireSend'])

    && isset($_POST['noteArabeSend'])
    && isset($_POST['ArabTeacherRemarksSend'])
    && isset($_POST['noteFrenchSend'])
    && isset($_POST['FrenchTeacherRemarksSend'])

    && isset($_POST['noteEnglishSend'])
    && isset($_POST['EnglishTeacherRemarksSend'])
    && isset($_POST['noteSciencesSend'])
    && isset($_POST['SciencesTeacherRemarksSend'])

) {



    $sqlSelect = "select * from `élèvetable` ";
    $resultSelect = mysqli_query($con, $sqlSelect);

    while ($row = mysqli_fetch_assoc($resultSelect)) {
        $idElève = $row['id'];


        if ($idElève == $StudentIDSend) {

            $Niveau = $row['Niveau'];
            $classificationA_B = $row['classificationA_B'];
            $emailElève = $row['emailelève'];
            $ClasseElève = $row['Niveau'] . "ème" . $row['classificationA_B'];

            $DateNaissance = $row['DateNaissance'];
            $NomElève = $row['Nom'];
            $PrénomElève = $row['Prénom'];
            $DateNaissance = $row['DateNaissance'];



            $MoyenneGénrale = ($noteArabeSend + $noteFrenchSend + $noteEnglishSend + $noteSciencesSend) / 4;


            $sql = "insert into `gradestable` 
            (idElève,
            AnnéeScolaire,
            Semestre,
            noteArabe,
            
            RemarquesProfArabe,
            noteFrançais,
            RemarquesProfFrançais,
            noteAnglais,
            
            RemarquesProfAnglais,
            noteSciences,
            RemarquesProfSciences,
            MoyenneGénrale,

            NomElève,
            PrénomElève,
            EmailElève,
            DateNaissance,
            ClasseElève
        
        
            
            ) 
            
            values
            
            ('$StudentIDSend',
            '$annéeScolaireSend',
            '$SemestreSend',
            '$noteArabeSend',
        
            '$ArabTeacherRemarksSend',
            '$noteFrenchSend',
            '$FrenchTeacherRemarksSend',
            '$noteEnglishSend',
            
            '$EnglishTeacherRemarksSend',
            '$noteSciencesSend',
            '$SciencesTeacherRemarksSend',
            '$MoyenneGénrale',

            '$NomElève',
            '$PrénomElève',
            '$emailElève',
            '$DateNaissance',
            '$ClasseElève'

            )";


            $result = mysqli_query($con, $sql);
        }
    }
}
