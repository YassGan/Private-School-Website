<?php
include "../../../connect.php";


extract($_POST);

if (

    isset($_POST['PupilNameSend']) &&
    isset($_POST['PupilPrénomSend']) &&
    isset($_POST['PupilSexSend']) &&

    isset($_POST['PupilBirthDateSend']) &&
    isset($_POST['PupilLevelSend']) &&
    isset($_POST['PupilClassificationSend']) &&

    isset($_POST['PupilFatherPrénomSend']) &&
    isset($_POST['PupilFatherJobSend']) &&
    isset($_POST['PupilFatherPhoneSend']) &&

    isset($_POST['PupilFatherEmailSend']) &&
    isset($_POST['PupilMotherNameSend']) &&
    isset($_POST['PupilMotherJobSend']) &&

    isset($_POST['PupilMotherPhoneSend']) &&
    isset($_POST['PupilMotherEmailSend']) &&
    isset($_POST['PupilNationalitySend']) &&

    isset($_POST['PupilEmailSend']) &&
    isset($_POST['PupilPasswordSend']) &&
    isset($_POST['PupilAdressSend']) &&

    isset($_POST['PupilPhotoSend'])


) {

    $Todaydate = date('d-m-y ');

    $sql = "insert into `élèvetable` 
    (
        Nom,
        Prénom,
        sexe,

        DateNaissance,
        DateAjout,
        Niveau,

        classificationA_B,
        adresseLogement,
        nomPère,
        ProfessionPère,

        TelephonePère,
        emailPère,
        nomMère,

        professionmère,
        telephonemère,
        emailMère,

        Nationalitéeleve,
        emailelève,
        lienphotoélève



        
        
        ) 
    values
    (
        
        '$PupilNameSend',
        '$PupilPrénomSend',
        '$PupilSexSend',

        '$PupilBirthDateSend',
        '$Todaydate',
        '$PupilLevelSend',

        '$PupilClassificationSend',
        '$PupilAdressSend',
        '$PupilFatherPrénomSend',
        '$PupilFatherJobSend',

        '$PupilFatherPhoneSend',
        '$PupilFatherEmailSend',
        '$PupilMotherNameSend',

        '$PupilMotherJobSend',
        '$PupilMotherPhoneSend',
        '$PupilMotherEmailSend',

        '$PupilNationalitySend',
        '$PupilEmailSend',
        '$PupilPhotoSend'


        
        
        
        
        )";
    $result = mysqli_query($con, $sql);
} else {
    echo "Error";
}
