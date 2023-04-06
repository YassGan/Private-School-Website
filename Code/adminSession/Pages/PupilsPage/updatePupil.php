<?php

include "../../../connect.php";

if (isset($_POST['SendhiddendataToUpdate'])) {
    $IdPupilUpdate = $_POST['SendhiddendataToUpdate'];

    $UpNom = $_POST['SendUpNom'];
    $UpPrénom = $_POST['SendUpPrénom'];
    $Upsexe = $_POST['SendUpsexe'];

    $UpDatNaissance = $_POST['SendUpDatNaissance'];

    $UpDateAjout = $_POST['SendUpDateAjout'];
    $UpNiveau = $_POST['SendUpNiveau'];
    $UpclassificationA_B = $_POST['SendUpclassificationA_B'];



    $UpnomPère = $_POST['SendUpnomPère'];
    $UpProfessionPère = $_POST['SendUpProfessionPère'];
    $UpTelephonePère = $_POST['SendUpTelephonePère'];

    $UpemailPère = $_POST['SendUpemailPère'];
    $UpnomMère = $_POST['SendUpnomMère'];
    $Upprofessionmère = $_POST['SendUpprofessionmère'];



    $Uptelephonemère = $_POST['SendUptelephonemère'];
    $UpemailMère = $_POST['SendUpemailMère'];
    $UpNationalitéeleve = $_POST['SendUpNationalitéeleve'];

    $Upemailelève = $_POST['SendUpemailelève'];
    $UpadresseLogement = $_POST['SendUpadresseLogement'];




    $sql = "update `élèvetable` set 
    Nom='$UpNom',
    Prénom='$UpPrénom',
    sexe='$Upsexe',

    DateNaissance='$UpDatNaissance',
    DateAjout='$UpDateAjout',
    Niveau='$UpNiveau',

    adresseLogement='$UpadresseLogement',
    nomPère='$UpnomPère',
    ProfessionPère='$UpProfessionPère',

    TelephonePère='$UpTelephonePère',
    emailPère='$UpemailPère',
    nomMère='$UpnomMère',

    professionmère='$Upprofessionmère',
    telephonemère='$Uptelephonemère',
    emailMère='$UpemailMère',

    Nationalitéeleve='$UpNationalitéeleve',
    



    emailelève='$Upemailelève'where id='$IdPupilUpdate'";
    $result = mysqli_query($con, $sql);
}
