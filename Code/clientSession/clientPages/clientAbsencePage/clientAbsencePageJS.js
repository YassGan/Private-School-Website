

function gettingPupilAbsence(){

    let pupilIdAbsence=document.getElementById("hiddenPupilId").value;
   
    $.ajax({
        url: "clientAbsenceAJAXQueries/showingPupilAbsence.php",
        type: "post",
        data: {
            pupilIdAbsenceSend: pupilIdAbsence
        },
        success: function(data, status) {
            $('#PupilAbsenceList').html(data);
        }
    })

}