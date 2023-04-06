var sideBarTest = 1

function ThreeBarsClick() {
    sideBarTest++;

    if (sideBarTest % 2 == 0) {
        document.getElementById("sideBarWidth").style.width = "0%";
    }
    if (sideBarTest % 2 != 0) {
        document.getElementById("sideBarWidth").style.width = "18%";
    }
}


function gettingPupilPaimentDetails() {
    var PupilIdPaiment = document.getElementById('PaimentsButtonId').value;
    var PupilIdAbsence = document.getElementById('AbsenceButtonId').value;



    var displayData = "true";
    $.ajax({
        url: "gettingPupilPaiment.php",
        type: "post",
        data: {
            SendPupilIdAbsence: PupilIdAbsence
        },
        success: function(data, status) {
            //$('#displayDataTable').html(data);
            $('#PupilPaimentList').html(data);
        }
    })


    $("#pupilPaimentModal").modal("show");


}






function gettingPupilAbsenceDetails() {
    var PupilIdAbsence = document.getElementById('AbsenceButtonId').value;
    // alert("pupil id "+PupilIdAbsence);

    var displayData = "true";
    $.ajax({
        url: "gettingPupilAbsence.php",
        type: "post",
        data: {
            SendPupilIdAbsence: PupilIdAbsence
        },
        success: function(data, status) {
            //$('#displayDataTable').html(data);
            $('#PupilAbsencesList').html(data);
        }
    })


    $("#pupilAbsenceModal").modal("show");

}


function SuccessAddingPopUp() {
    $("#SuccessAddedPupil").modal("show");

}


function UpdatePupilInfo(id) {
    alert("le id cliqué est " + id);
}


$(document).ready(function() {
    displayAllPupils();
})

function displayAllPupils() {
    var displayData = "true";
    $.ajax({
        url: "showAllPupils.php",
        type: "post",
        data: {
            displayDataSend: displayData
        },
        success: function(data, status) {
            $('#AllPupilsContainer').html(data);
        }
    })
}



function NewPupilPopUp() {
    $("#addNewPupilModal").modal("show");
}


function addNewPupil() {


    const PupilName = document.getElementById("PupilName").value;
    const PupilPrénom = document.getElementById("PupilPrénom").value;
    const PupilSex = document.getElementById("PupilSex").value;

    const PupilBirthDate = document.getElementById("PupilBirthDate").value;
    const PupilLevel = document.getElementById("PupilLevel").value;
    const PupilClassification = document.getElementById("PupilClassification").value;

    const PupilFatherPrénom = document.getElementById("PupilFatherPrénom").value;
    const PupilFatherJob = document.getElementById("PupilFatherJob").value;
    const PupilFatherPhone = document.getElementById("PupilFatherPhone").value;

    const PupilFatherEmail = document.getElementById("PupilFatherEmail").value;
    const PupilMotherName = document.getElementById("PupilMotherName").value;
    const PupilMotherJob = document.getElementById("PupilMotherJob").value;

    const PupilMotherPhone = document.getElementById("PupilMotherPhone").value;
    const PupilMotherEmail = document.getElementById("PupilMotherEmail").value;
    const PupilNationality = document.getElementById("PupilNationality").value;

    const PupilEmail = document.getElementById("PupilEmail").value;
    const PupilPassword = document.getElementById("PupilPassword").value;
    const PupilAdress = document.getElementById("PupilAdress").value;

    const PupilPhoto = document.getElementById("PupilPhoto").value;






    $.ajax({
        url: "addPupil.php",
        type: 'post',
        data: {
            PupilNameSend: PupilName,
            PupilPrénomSend: PupilPrénom,
            PupilSexSend: PupilSex,

            PupilBirthDateSend: PupilBirthDate,
            PupilLevelSend: PupilLevel,
            PupilClassificationSend: PupilClassification,

            PupilFatherPrénomSend: PupilFatherPrénom,
            PupilFatherJobSend: PupilFatherJob,
            PupilFatherPhoneSend: PupilFatherPhone,

            PupilFatherEmailSend: PupilFatherEmail,
            PupilMotherNameSend: PupilMotherName,
            PupilMotherJobSend: PupilMotherJob,

            PupilMotherPhoneSend: PupilMotherPhone,
            PupilMotherEmailSend: PupilMotherEmail,
            PupilNationalitySend: PupilNationality,

            PupilEmailSend: PupilEmail,
            PupilPasswordSend: PupilPassword,
            PupilAdressSend: PupilAdress,

            PupilPhotoSend: PupilPhoto
        },
        success: function(data, status) {
            displayPupilsData();
            $("#addNewPupilModal").modal("hide");


        }
    })

}


function displayPupilsData() {
    displayAllPupils();
    SuccessAddingPopUp();
}






