

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

function addNewClassButton() {
    $('#AddClassModal').modal('show');
}


function AddingClass() {

    var ClassLevel = document.getElementById("levelId").value;
    var ClassNumberofPupils = document.getElementById("PupilNumber").value;
    var ClassClassification = document.getElementById("ClassClassification").value;
    var ScienceTeacher = document.getElementById("ScienceTeacher").value;
    var FrenchTeacher = document.getElementById("FrenchTeacher").value;
    var ArabicTeacher = document.getElementById("ArabicTeacher").value;
    var EnglishTeacher = document.getElementById("EnglishTeacher").value;


    // alert("the class level is " + ClassLevel + " / the number of pupils is " + ClassNumberofPupils +
    //     " / the class classification is" +
    //     ClassClassification + ' / science teacher is ' + ScienceTeacher + ' / french teacher is ' +
    //     FrenchTeacher + ' / Arabic teacher is ' +
    //     ArabicTeacher + ' / English teacher is ' +
    //     EnglishTeacher);


    $.ajax({
        url: "ClassesPageAjaxQueries/addClass.php",
        type: 'post',
        data: {
            sendClassLevel: ClassLevel,
            sendClassNumberofPupils: ClassNumberofPupils,
            sendClassClassification: ClassClassification,
            sendScienceTeacher: ScienceTeacher,
            sendFrenchTeacher: FrenchTeacher,
            sendArabicTeacher: ArabicTeacher,
            sendEnglishTeacher: EnglishTeacher
        },
        success: function(data, status) {
            displayData();
            $('#AddClassModal').modal('hide');
            $('#successfulOperation').modal('show');
        }
    })
}




$(document).ready(function() {
    displayData();
})

function displayData() {
    var displayData = "true";
    $.ajax({
        url: "ClassesPageAjaxQueries/showingClasses.php",
        type: "post",
        data: {
            displayDataSend: displayData
        },
        success: function(data, status) {
            $('#ClassesContainer').html(data);
        }
    })
}