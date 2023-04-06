<?php
include "../../../connect.php";


extract($_POST);

if (

    isset($_POST['TeacherNameSend']) &&
    isset($_POST['TeacherPrénomSend']) &&
    isset($_POST['TeacherSexSend']) &&

    isset($_POST['TeacherAdresseLogementSend']) &&
    isset($_POST['TeacherAdresseEmailSend']) &&
    isset($_POST['TeacherPhoneNumberSend']) &&

    isset($_POST['TeacherEmergencyPersonSend']) &&
    isset($_POST['TeacherEmergencyPhoneNumberSend']) &&

    isset($_POST['TeacherPhotoSend']) &&
    isset($_POST['TeacherMatièreSend'])



) {

    $TodayDate = date("Y-m-d");
    $sql = "insert into `teacherstable` (
        Nom,
        Prénom,
        sex,

        DateNaissance,
        DateEntrée,
        AdresseLogement,

        AdresseEmail,
        téléphone,
        PersonneUrgente,

        téléphoneUrgent,
        lienPhoto,
        autorisation,
        matièrepréférée

        
        ) values(
            
            '$TeacherNameSend',
            '$TeacherPrénomSend',
            '$TeacherSexSend',

            '$TeacherBirthDateSend',
            '$TodayDate',
            '$TeacherAdresseLogementSend',

            '$TeacherAdresseEmailSend',
            '$TeacherPhoneNumberSend',
            '$TeacherEmergencyPersonSend',

            '$TeacherEmergencyPhoneNumberSend',
            '$TeacherPhotoSend',
            'No',
            '$TeacherMatièreSend'

           )";
    $result = mysqli_query($con, $sql);
}
