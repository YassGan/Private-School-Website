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

function confirmTeacherDelete() {
    hiddendataTeacherDelete = document.getElementById("hiddendataTeacherDelete").value;

    $("#deleteTeacherModal").modal("hide");


    $.ajax({
        url: "deleteTeacher.php",
        type: "post",
        data: {
            SendidTeacherToDelete: hiddendataTeacherDelete
        },
        success: function(data, status) {
            displayTeachersData();
        }
    })

}







function UpdateTeacher() {



    var hiddenDataId = $('#hiddenIdUpdateTeacher').val();
    // alert(hiddenDataId);

    const TeacherName = $("#UpTeacherName").val();
    const TeacherPrénom = $("#UpTeacherPrénom").val();
    const TeacherSex = $("#UpTeacherSex").val();


    const UpTeacherAdresseLogement = $("#UpTeacherAdresseLogement").val();
    const UpTeacherBirthDate = $("#UpTeacherBirthDate").val();
    const UpTeacherEntryDate = $("#UpTeacherEntryDate").val();



    const UpTeacherAdresseEmail = $("#UpTeacherAdresseEmail").val();
    const UpTeacherPhoneNumber = $("#UpTeacherPhoneNumber").val();
    const UpTeacherEmergencyPerson = $("#UpTeacherEmergencyPerson").val();

    const UpTeacherEmergencyPhoneNumber = $("#UpTeacherEmergencyPhoneNumber").val();

    const UpTeacherPhoto = $("#UpTeacherPhoto").val();

    const UpTeacherMatière = $("#UpTeacherMatière").val();




    $.post("updateTeacher.php", {

        hiddenDataIdSend: hiddenDataId,
        TeacherNameSend: TeacherName,
        TeacherPrénomSend: TeacherPrénom,
        TeacherSexSend: TeacherSex,

        UpTeacherAdresseLogementSend: UpTeacherAdresseLogement,
        UpTeacherBirthDateSend: UpTeacherBirthDate,
        UpTeacherEntryDateSend: UpTeacherEntryDate,

        UpTeacherAdresseEmailSend: UpTeacherAdresseEmail,
        UpTeacherPhoneNumberSend: UpTeacherPhoneNumber,
        UpTeacherEmergencyPersonSend: UpTeacherEmergencyPerson,
        UpTeacherPhotoSend: UpTeacherPhoto,


        UpTeacherEmergencyPhoneNumberSend: UpTeacherEmergencyPhoneNumber,

        UpTeacherMatièreSend: UpTeacherMatière



    }, function(data, status) {
        $('#UpdateTeacherPopUp').modal("hide");
        $('#SuccessUpdateTeacher').modal("show");


        displayTeachersData();
    });


}








function viewAutorisation() {
    const hiddenIdCurrentAutorisation = document.getElementById("hiddenIdCurrentAutorisation").value;


    if (hiddenIdCurrentAutorisation == "Yes") {
        const colorChange = document.getElementById("AutorisationColor");
        colorChange.style.color = "green";
    }

    if (hiddenIdCurrentAutorisation == "No") {
        const colorChange = document.getElementById("AutorisationColor");
        colorChange.style.color = "red";
    }

}



function updateAutorisation() {

    const id = document.getElementById("hiddenDataIdTeacher").value;
    const hiddenIdCurrentAutorisation = document.getElementById("hiddenIdCurrentAutorisation").value;


    if (hiddenIdCurrentAutorisation == "Yes") {
        const colorChange = document.getElementById("AutorisationColor");
        colorChange.style.color = "green";
    }

    //   alert("The current id is: " + id + " The current autorisation is " + hiddenIdCurrentAutorisation);
    $.post("updateAutorisationTeacher.php", {
        CurrentAutorisationSend: hiddenIdCurrentAutorisation,
        idSend: id

    }, function(data, status) {
        location.reload();
    });

}




$(document).ready(function() {
    displayTeachersData();

})




function displayTeachersData() {



    var displayTeachersData = "true";
    $.ajax({
        url: "displayTeachers.php",
        type: "post",
        data: {
            displayTeachersDataSend: displayTeachersData
        },
        success: function(data, status) {
            $('#displayTeachersDataTable').html(data);
        }
    })
}





function addNewTeacher() {

    var TeacherName = $('#TeacherName').val();
    var TeacherPrénom = $('#TeacherPrénom').val();
    var TeacherSex = $('#TeacherSex').val();

    var TeacherAdresseLogement = $('#TeacherAdresseLogement').val();
    var TeacherAdresseEmail = $('#TeacherAdresseEmail').val();
    var TeacherPhoneNumber = $('#TeacherPhoneNumber').val();

    var TeacherBirthDate = $('#TeacherBirthDate').val();


    var TeacherEmergencyPerson = $('#TeacherEmergencyPerson').val();
    var TeacherEmergencyPhoneNumber = $('#TeacherEmergencyPhoneNumber').val();

    var TeacherPhoto = $('#TeacherPhoto').val();



    var AddTeacherMatière = $('#AddTeacherMatière').val();



    //     alert("matière " + AddTeacherMatière);
    var newStr = TeacherPhoto.substring(12, TeacherPhoto.length)




    // alert(TeacherName + " / " + TeacherPrénom + " / " + TeacherSex + " / " + TeacherAdresseLogement +
    //     " / " +
    //     TeacherAdresseEmail +
    //     " / " + TeacherPhoneNumber + " / " + TeacherEmergencyPerson + " / " +
    //     TeacherEmergencyPhoneNumber +
    //     " / " + newStr);




    $.ajax({
        url: "addTeacher.php",
        type: 'post',
        data: {
            TeacherNameSend: TeacherName,
            TeacherPrénomSend: TeacherPrénom,
            TeacherSexSend: TeacherSex,


            TeacherBirthDateSend: TeacherBirthDate,



            TeacherAdresseLogementSend: TeacherAdresseLogement,
            TeacherAdresseEmailSend: TeacherAdresseEmail,
            TeacherPhoneNumberSend: TeacherPhoneNumber,

            TeacherEmergencyPersonSend: TeacherEmergencyPerson,
            TeacherEmergencyPhoneNumberSend: TeacherEmergencyPhoneNumber,

            TeacherPhotoSend: newStr,
            TeacherMatièreSend: AddTeacherMatière
        },
        success: function(data, status) {
            $('#addNewTeacherPopUp').modal("hide");


            displayTeachersData();
        }
    })

}










function NewTeacherPopUp() {

    $('#addNewTeacherPopUp').modal("show");

}
