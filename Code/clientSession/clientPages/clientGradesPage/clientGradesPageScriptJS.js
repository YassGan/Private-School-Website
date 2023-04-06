








function PupilAllGradesResultsShowing(idGrade){

    let displayData=true;
    $.ajax({
        url: "PupilAllGradesResultsShowingAJAXQueries/PupilAllGradesResultsShowing.php",
        type: "post",
        data: {
            displayDataSend: displayData,
            idGradeSend:idGrade
        },
        success: function(data, status) {
            $('#container').html(data);
        }
    })
}



function getTodayDate() {
    const today = new Date();
    const options = { day: '2-digit', month: '2-digit', year: 'numeric' };
    return today.toLocaleDateString('fr-FR', options);
  }



function BigGradesFormatPopUpLancher(id){
    $("#GradesShowClick").modal("show");

    $.post("PupilAllGradesResultsShowingAJAXQueries/GradesGettingDetails.php", {
        GradesIdSend: id
    }, function(data, status) {
        var userId = JSON.parse(data);
        $('#Name').html(userId.NomElève+" "+userId.PrénomElève);
        $('#SchoolYear').html(userId.AnnéeScolaire);
        $('#Class').html(userId.ClasseElève);
        $('#period').html(userId.Semestre);

        $('#GlobalAverage').html(userId.MoyenneGénrale);
        $('#ExtractionDateInfo').html(getTodayDate());
        $('#DateExtraction').html(userId.DateNaissance);


        
        $('#ArabicGrades').html(userId.noteArabe);
        $('#ArabicRemarks').html(userId.RemarquesProfArabe);

        $('#EnglishGrades').html(userId.noteAnglais);
        $('#EnglishRemarks').html(userId.RemarquesProfAnglais);

        $('#FrenchGrades').html(userId.noteFrançais);
        $('#FrenchRemarks').html(userId.RemarquesProfFrançais);

        $('#ScienceGrades').html(userId.noteSciences);
        $('#ScienceRemarks').html(userId.RemarquesProfSciences);


        $('#period').html(userId.Semestre);


        $('#GlobalAverage').html(userId.MoyenneGénrale);
        $('#GlobalAverageGrades').html(userId.MoyenneGénrale);



        if (userId.MoyenneGénrale>15){
            $('#DirectorRemarks').html("Great Results");
            
        }


        if (userId.MoyenneGénrale<15 && userId.MoyenneGénrale>12){
            $('#DirectorRemarks').html("Good results, can do better");
        }

        if (userId.MoyenneGénrale<12 && userId.MoyenneGénrale>10){
            $('#DirectorRemarks').html("Acceptable results, should work harder");
        }

        if (userId.MoyenneGénrale<10 ){
            $('#DirectorRemarks').html("Bad results, should work harder");
        }

        

    });
}




$(document).ready(function() {
    PupilAllGradesResultsShowing();
})