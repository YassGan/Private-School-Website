function RandomVerificationCode(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
        counter += 1;
    }
    return result;
}



function clickedId(id) {
    //getting an array from the php side that contains the highest, lowest grades....
    $.ajax({
        url: "getGradesGeneralInfo.php",
        type: "post",
        data: {
            updateidSend: id
        },
        success: function(data, status) {
            $('#engilshNotes').val(data);
        }
    })





    $.post("getPupilGradesDetails.php", {
        updateidSend: id
    }, function(data, status) {
        var userId = JSON.parse(data);



        const Todaydate = new Date();

        const mm = Todaydate.getMonth() + 1;
        const dd = Todaydate.getDate();
        const yyyy = Todaydate.getFullYear();
        const todayDate = dd + "/" + mm + "/" + yyyy;


        ExtractionDateInfo
        $('#ExtractionDateInfo').html(todayDate);



        $('#Name').html(userId.NomElève + " " + userId.PrénomElève);
        $('#SchoolYear').html(userId.AnnéeScolaire);
        $('#Class').html(userId.ClasseElève);
        $('#period').html(userId.Semestre);



        $('#DateExtraction').html(userId.DateNaissance);
        $('#EnglishGrades').html(userId.noteAnglais);
        $('#EnglishRemarks').html(userId.RemarquesProfAnglais);

        $('#FrenchGrades').html(userId.noteFrançais);
        $('#FrenchRemarks').html(userId.RemarquesProfFrançais);

        $('#ScienceGrades').html(userId.noteSciences);
        $('#ScienceRemarks').html(userId.RemarquesProfSciences);

        $('#ArabicGrades').html(userId.noteArabe);
        $('#ArabicRemarks').html(userId.RemarquesProfArabe);


        $('#GlobalAverageGrades').html(userId.MoyenneGénrale);

        $('#GlobalAverage').html(userId.MoyenneGénrale + '/20');









        var NotesTable = document.getElementById("engilshNotes").value;


        // le meme tab dans php side     $Notes = $maxEnglish . "/" . $maxFrench . "/" . $maxSciences . "/" . $maxArabic . "/" . $minEnglish . "/" . $minFrench . "/" . $minSciences . "/" . $minArabic . "/";

        var NotesTableExtracted = NotesTable.split("/");

        //alert("The notes are " + NotesTableExtracted);

        $('#ArabicHighest').html(NotesTableExtracted[3]);
        $('#ArabicLowest').html(NotesTableExtracted[7]);

        $('#EnglishHighest').html(NotesTableExtracted[0]);
        $('#EnglishLowest').html(NotesTableExtracted[4]);


        $('#FrenchHighest').html(NotesTableExtracted[1]);
        $('#FrenchLowest').html(NotesTableExtracted[5]);


        $('#ScienceHighest').html(NotesTableExtracted[2]);
        $('#ScienceLowest').html(NotesTableExtracted[6]);


        $('#AvgHighest').html(NotesTableExtracted[8]);
        $('#AvgLowest').html(NotesTableExtracted[9]);





        var DirectorRemarks;
        if (userId.MoyenneGénrale >= 15) {
            DirectorRemarks = "Great grades";
        }

        if (userId.MoyenneGénrale < 15 && userId.MoyenneGénrale >= 11) {
            DirectorRemarks = "Not bad grades";
        }

        if (userId.MoyenneGénrale < 11) {
            DirectorRemarks = "Can do better";
        }

        $('#DirectorRemarks').html(DirectorRemarks);















        //  $('#Semestre').html(userId.Semestre);


        // $('#Name').html(userId.NomElève);
        // $('#Name').html(userId.NomElève);
        // $('#Name').html(userId.NomElève);
        // $('#Name').html(userId.NomElève);

        // $('#Name').html(userId.NomElève);
        // $('#Name').html(userId.NomElève);
        // $('#Name').html(userId.NomElève);
        // $('#Name').html(userId.NomElève);


    });

    TéléVerification();
    $("#GradesShowClick").modal("show");

}








function YearChoiceSelect() {
    var classChoice = document.getElementById("classchoice").value;
    var semestre = document.getElementById("semestre").value;
    var scolaryear = document.getElementById("scolaryear").value;

    //   alert(" classChoice " + classChoice + "//" + " semestre " + semestre + "//" + " scolar year " + scolaryear);

    var displayData = "true";
    $.ajax({
        url: "showGradesFiltred.php",
        type: "post",
        data: {
            classChoiceSend: classChoice,
            semestreSend: semestre,
            scolaryearSend: scolaryear,
            displayDataSend: displayData

        },
        success: function(data, status) {
            $('#GradesTable').html(data);
        }
    })
}





function SemestreChoiceSelect() {

    var classChoice = document.getElementById("classchoice").value;
    var semestre = document.getElementById("semestre").value;
    var scolaryear = document.getElementById("scolaryear").value;

    //  alert(" classChoice " + classChoice + "//" + " semestre " + semestre + "//" + " scolar year " + scolaryear);

    var displayData = "true";
    $.ajax({
        url: "showGradesFiltred.php",
        type: "post",
        data: {
            classChoiceSend: classChoice,
            semestreSend: semestre,
            scolaryearSend: scolaryear,
            displayDataSend: displayData

        },
        success: function(data, status) {
            $('#GradesTable').html(data);
        }
    })
}



function classChoiceSelect() {


    var classChoice = document.getElementById("classchoice").value;
    var semestre = document.getElementById("semestre").value;
    var scolaryear = document.getElementById("scolaryear").value;


    //   alert(" classChoice " + classChoice + "//" + " semestre " + semestre + "//" + " scolar year " + scolaryear);

    var displayData = "true";
    $.ajax({
        url: "showGradesFiltred.php",
        type: "post",
        data: {
            classChoiceSend: classChoice,
            semestreSend: semestre,
            scolaryearSend: scolaryear,
            displayDataSend: displayData

        },
        success: function(data, status) {
            $('#GradesTable').html(data);
        }
    })








    // if (classChoice != "Choose_a_year") {
    //     alert("class choice n'est pas nul et la valeur de semestre est " + semestre);


    // } else if (classChoice == "6èmeB") {
    //     alert("C'est une 6èmeB // " + classChoice);

    // } else {
    //     alert("pas de 6ème // ");

    // }


}





// $(document).ready(function() {
//     displayData();
// })


// function displayData() {
//     var displayData = "true";
//     $.ajax({
//         url: "showGradesFiltred.php",
//         type: "post",
//         data: {
//             displayDataSend: displayData
//         },
//         success: function(data, status) {
//             $('#GradesTable').html(data);
//         }
//     })
// }







function addPupilGradesClick() {

    var StudentID = document.getElementById("StudentID").value;
    //  var EmailAddress = document.getElementById("EmailAddress").value;
    var Semestre = document.getElementById("Semestre").value;
    var annéeScolaire = document.getElementById("annéeScolaire").value;

    var noteArabe = document.getElementById("noteArabe").value;
    var ArabTeacherRemarks = document.getElementById("ArabTeacherRemarks").value;
    var noteFrench = document.getElementById("noteFrench").value;
    var FrenchTeacherRemarks = document.getElementById("FrenchTeacherRemarks").value;

    var noteEnglish = document.getElementById("noteEnglish").value;
    var EnglishTeacherRemarks = document.getElementById("EnglishTeacherRemarks").value;
    var noteSciences = document.getElementById("noteSciences").value;
    var SciencesTeacherRemarks = document.getElementById("SciencesTeacherRemarks").value;


    console.log("StudentID" + StudentID);
    //  console.log("EmailAddress" + EmailAddress);
    console.log("Semestre" + Semestre);
    console.log("annéeScolaire" + annéeScolaire);

    console.log("noteArabe" + noteArabe);
    console.log("ArabTeacherRemarks" + ArabTeacherRemarks);
    console.log("noteFrench" + noteFrench);
    console.log("FrenchTeacherRemarks" + FrenchTeacherRemarks);

    console.log("noteEnglish" + noteEnglish);
    console.log("EnglishTeacherRemarks" + EnglishTeacherRemarks);
    console.log("noteSciences" + noteSciences);
    console.log("SciencesTeacherRemarks" + SciencesTeacherRemarks);




    $.ajax({
        url: "addGrades.php",
        type: 'post',
        data: {
            StudentIDSend: StudentID,
            //  EmailAddressSend: EmailAddress,
            SemestreSend: Semestre,
            annéeScolaireSend: annéeScolaire,

            noteArabeSend: noteArabe,
            ArabTeacherRemarksSend: ArabTeacherRemarks,
            noteFrenchSend: noteFrench,
            FrenchTeacherRemarksSend: FrenchTeacherRemarks,

            noteEnglishSend: noteEnglish,
            EnglishTeacherRemarksSend: EnglishTeacherRemarks,
            noteSciencesSend: noteSciences,
            SciencesTeacherRemarksSend: SciencesTeacherRemarks

        },
        success: function(data, status) {
            //displayData();
            displayData();

        }
    })











}









function AddStudentPopUpClick() {
    $("#AddNoteModal").modal("show");
}











var sideBarTest = 1

function ThreeBarsClick() {
    sideBarTest++;

    if (sideBarTest % 2 == 0) {
        document.getElementById("sideBarWidth").style.width = "0%";
    }
    if (sideBarTest % 2 != 0) {
        document.getElementById("sideBarWidth").style.width = "20%";
    }
}
