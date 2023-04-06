<?php

include "../../../connect.php";

if (isset($_POST['hiddenDataIdSend'])) {
    $IdTeacherUpdate = $_POST['hiddenDataIdSend'];

    $TeacherName = $_POST['TeacherNameSend'];
    $TeacherPrénom = $_POST['TeacherPrénomSend'];
    $TeacherSex = $_POST['TeacherSexSend'];

    $UpTeacherAdresseLogement = $_POST['UpTeacherAdresseLogementSend'];

    $UpTeacherBirthDate = $_POST['UpTeacherBirthDateSend'];
    $UpTeacherEntryDate = $_POST['UpTeacherEntryDateSend'];
    $UpTeacherAdresseEmail = $_POST['UpTeacherAdresseEmailSend'];



    $UpTeacherPhoneNumber = $_POST['UpTeacherPhoneNumberSend'];
    $UpTeacherEmergencyPerson = $_POST['UpTeacherEmergencyPersonSend'];
    $UpTeacherEmergencyPhoneNumber = $_POST['UpTeacherEmergencyPhoneNumberSend'];

    $UpTeacherPhoto = $_POST['UpTeacherPhotoSend'];

    $UpTeacherMatière = $_POST['UpTeacherMatièreSend'];




    $sql = "update `teacherstable` set 
    Nom='$TeacherName',
    Prénom='$TeacherPrénom',
    sex='$TeacherSex',

    DateNaissance='$UpTeacherBirthDate',
    DateEntrée='$UpTeacherEntryDate',
    AdresseLogement='$UpTeacherAdresseLogement',

    AdresseEmail='$UpTeacherAdresseEmail',
    téléphone='$UpTeacherPhoneNumber',
    PersonneUrgente='$UpTeacherEmergencyPerson',

    téléphoneUrgent='$UpTeacherEmergencyPhoneNumber',
    matièrepréférée='$UpTeacherMatière',


    lienPhoto='$UpTeacherPhoto'where id='$IdTeacherUpdate'";
    $result = mysqli_query($con, $sql);
}
