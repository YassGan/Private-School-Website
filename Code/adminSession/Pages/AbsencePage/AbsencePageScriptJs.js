
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

//this function makes a request to the database and gets the date when the last time the date was done, assign this value to a hidden input and when we want to get this value we call document.getelementbyid.value
function GettingLatestDateWasDone() {
    var GetDetailTest = true;
    //post method to get the details of the user
    $.post("AbsencePageAjaxQueries/getLatestDateWasDone.php", {
        SendGetDetailTest: GetDetailTest
    }, function(data, status) {
        var userId = JSON.parse(data);
        $('#LatestDateAbsenceWasDone').val(userId.LatestDay_Absence_was_done);

    });
}


//function that returns an array of dates between two dates
var getDaysArray = function(start, end) {
    for (var arr = [], dt = new Date(start); dt <= new Date(end); dt.setDate(dt.getDate() + 1)) {
        arr.push(new Date(dt));
    }
    return arr;
};



function getTodayDate() {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    todayString = yyyy + '-' + mm + '-' + dd;
    return todayString;
}




//this table contains the dates of holidays and special days, normally this values should be retrieved from the databse form a table where special dates are stored
var JourFerierTab = [];
JourFerierTab.push("26/03/2023");





var updatePopUptest = 0;
//UndonePreviousDate variable is for the latest date that the absence were done I did not name the variable with a good precision

//T he IdArray is an array of objects, the object in this array is pupilid and absenceStatue
var IdArray = [];

// idsArray is an anrray we use it in splititng information of pupils
var idsArray = [];


//NumericArray(): This function is called when the page is loaded. It retrieves the list of student IDs and absence statuses from the webpage and stores them in an array called IdArray.
function NumericArray() {
    //ids string is an array that contains the ids of all the students, it's created from the databse
    var idsString = document.getElementById("hiddenIdArray").value;
    const idsArray = idsString.split("/");
    //  console.log("le id des array est" + idsArray);
    for (i = 0; i < idsArray.length - 1; i++) {
        // console.log(idsArray[i]);

        var val = document.getElementById("AbsencePuil" + idsArray[i]).value;
        var PupilwithId = "PupilwithId:" + idsArray[i];
        IdArray.push({
            PupilwithId,
            val
        });
    }
    // console.log(IdArray);
}

// console.log("The table of pupils before the change of the statue of absence is ");
// console.log(IdArray);


//gettingAbsenceChangedDetails(id): This function is triggered when a student changes their absence status, when we change the absence in the select box of absence It receives the student's ID as an input and updates the student's absence status in the IdArray
function gettingAbsenceChangedDetails(id) {
    // alert("the pupil with the id : " + id + " has chaged his absence statue ");
    // console.log(IdArray);
    var userFoundIndex;
    for (i = 0; i < IdArray.length; i++) {
        if (IdArray[i].PupilwithId == "PupilwithId:" + id) {
            // console.log("user found");
            userFoundIndex = i;
            var StatueAfterChange = document.getElementById("AbsencePuil" + id).value;

            if (StatueAfterChange == "Yes") {
                document.getElementById("AbsencePuil" + id).style.background = "green";
            }

            if (StatueAfterChange == "No") {
                document.getElementById("AbsencePuil" + id).style.background = "red";
            }
            IdArray[userFoundIndex].val = StatueAfterChange;
        }
    }
    // console.log("The tab after the change of the statue");
    // console.log(IdArray);
}


function DoTheAbsenceOnClickFinishButton() {
    // console.log(
    //     "The array of pupils checked and not checked to see their check when the finish button is clicked ");
    // console.log(IdArray);
    var NomCherché;
    // it is the tab of pupils that are not already checked these names are displayed  on the pop up when the finish button is clicked
    var TabTextElevesManquants = [];
    for (i = 0; i < IdArray.length; i++) {
        if (IdArray[i].val == "check it !!!") {
            //console.log("Erreur not finished already");
            //console.log(IdArray[i].PupilwithId);
            // console.log("Séparation du string /Pupilwithid:/ de l'array element ");
            idElèveNotChecked = IdArray[i].PupilwithId.replace('PupilwithId:', '');

            // console.log("idElèveNotChecked " + idElèveNotChecked);
            NomCherché = document.getElementById(idElèveNotChecked).value;

            // console.log("Nom Cherché not checked " + NomCherché);
            TabTextElevesManquants.push(NomCherché);
        }
    }

    var list;
    //checking if there is a pupil not checked his absence
    if (TabTextElevesManquants.length != 0) {
        $('#AbsencecheckingPopUp').modal("show");

        list = document.getElementById("myList");
        while (list.hasChildNodes()) {
            list.removeChild(list.firstChild);
        }

        for (i = 0; i < TabTextElevesManquants.length; i++) {
            const li = document.createElement("li");
            li.innerHTML = TabTextElevesManquants[i];
            list.appendChild(li);
        }

    }


    //checking if the table of not checked absence for pupils is empty that means that we can know assign the absence to the database
    if (TabTextElevesManquants.length == 0) {
        var idElèveSendtoDatabase;
        var DateInput = document.getElementById("AbsenceDate").value;
        //add the absence to the data base for each student
        for (i = 0; i <= IdArray.length - 1; i++) {
            idElèveSendtoDatabase = IdArray[i].PupilwithId.replace('PupilwithId:', '');
            console.log(IdArray[i].PupilwithId + " His id is " + idElèveSendtoDatabase +
                " the value of his check is " + IdArray[i].val
            );

            // add absence verification to the database
            $.ajax({
                url: "AbsencePageAjaxQueries/addAbsence.php",
                type: 'post',
                data: {
                    SendidElèveSendtoDatabase: idElèveSendtoDatabase,
                    SendAbsenceStatue: IdArray[i].val,
                    SendDateInput: DateInput,
                    SendInputDatewithSlash: DateInput
                },
                success: function(data, status) {
                    //displayData();
                    window.location.reload();
                }
            })
        }
    }
}


function undoneDatesReminder() {
   
    // Begin Bloc Assigning array of undone absenceDate



   // <!-- Bloc 1 -->
    //Input  date
    var InputDate = document.getElementById("AbsenceDate").value;
    //creating an array that contains seperate values of days month and year from a date input
    var SeperateDMYArray = InputDate.split('-');
    //console.log("seperate Days Months Years array " + SeperateDMYArray);

    var yyyyInputDate = SeperateDMYArray[0];
    var mmInputDate = SeperateDMYArray[1];
    var jjInputDate = SeperateDMYArray[2];

    // console.log("input date value " + InputDate);
    // console.log("input date value day " + jjInputDate);
    // console.log("input date value month " + mmInputDate);
    // console.log("input date value year " + yyyyInputDate);


    // This variable variable is at the format mm/jj/yyyy to use it in Date function
    var InputDatemmjjyyyyString = mmInputDate + "/" + jjInputDate + "/" +
        yyyyInputDate;
    let InputDateFormatDateObject = new Date(InputDatemmjjyyyyString);
   // <!-- end Bloc 1 -->




    //this code calculates the dates between two dates which are the latest day that the absence was worked and the other date is the input date value and then creates a table that contains working days that absence were not verified
    //the latest time the absence was made latestAbsenceWork this value should be extracted from the database this date should ben in the format of mm/jj/yyyy, actually there is a hidden input in the AbsencePage.php with the id="LatestDateAbsenceWasDone" from this input where the value of the latestday the absence was done, and this date is got from the databasen, we can know and retrieve the date of the latest date the absence was done
    var LatestDateAbsenceWasDoneFromDataBase = document.getElementById("LatestDateAbsenceWasDone").value;


    //now we sepreate the days, the month and the year like we did with the inputDate in the previous lines of code in the Bloc1
    var SeperateDMYLatestDateAbsenceWasDoneFromDataBase = LatestDateAbsenceWasDoneFromDataBase.split('-');

    var yyyyLatestDateAbsenceWasDoneFromDataBase = SeperateDMYLatestDateAbsenceWasDoneFromDataBase[0];
    var mmLatestDateAbsenceWasDoneFromDataBase = SeperateDMYLatestDateAbsenceWasDoneFromDataBase[1];
    var jjLatestDateAbsenceWasDoneFromDataBase = SeperateDMYLatestDateAbsenceWasDoneFromDataBase[2];



    latestDayAbsenceDonetouseinDateFunction = mmLatestDateAbsenceWasDoneFromDataBase + "/" +
        jjLatestDateAbsenceWasDoneFromDataBase + "/" + yyyyLatestDateAbsenceWasDoneFromDataBase;

    // alert(latestDayAbsenceDonetouseinDateFunction);



    // we should obviously refer to the latestDayabsenceWasDone from the database and add another day, we add the value 86400000
    var LatestDateinformattouseinDatePlusoneDay = new Date(latestDayAbsenceDonetouseinDateFunction).getTime() +
        86400000;
    var tomorrow = new Date(LatestDateinformattouseinDatePlusoneDay);



    //alert("Latest date + 1 day " + tomorrow);




    // daylist est un tableau qui contient les dates de tous les jours, de travails et les jours de fêtes aussi à partir de la dernière date  dans laquelle l'absence a été faite jusqu'a à la date de l'input
    var daylist = getDaysArray(new Date(tomorrow), new Date(
        InputDateFormatDateObject));


    // dayListWithoHolidaynoSundaySaturday is an array that will contain the working days only, the days without sunday or saturday
    var dayListWithoHolidaynoSundaySaturday = [];


    // console.log("afficher le tableau des jours de travail mais il contient aussi les dimanches et fêtes");
    // console.log(daylist);

    // console.log(
    //     "->Début message: afficher le tableau de tous les jours les jours de travail et les dimanches et les fêtes où l'absence n'était pas faite "
    // );
    // console.log(daylist);
    // console.log(
    //     "->Fin message: afficher le tableau de tous les jours les jours de travail et les dimanches et les fêtes où l'absence n'était pas faite "
    // );



    // iterating the daylist array, element by element, day by day and store the working day only in the array dayListWithoHolidaynoSundaySaturday
    for (i = 0; i < daylist.length; i++) {
        var weekDay = daylist[i].getDay();
        var d = daylist[i].getDate();
        var m = daylist[i].getMonth() + 1;
        var y = daylist[i].getFullYear();
        datetoEnter = d + '/' + m + '/' + y;
        //verify if the date is not a holiday (i chose in this example the date 9/3/2023 as a holiday) and the week day is not sunday or saturday
        if (weekDay != 0 && weekDay != 6) {
            dayListWithoHolidaynoSundaySaturday.push(datetoEnter);
        }

    }
    //afficher le tableau des jours de travail seulement sans les dimanches et fêtes
    // console.log(
    //     "->Début message:Avec une boucle for afficher le tableau des jours de travail seulement sans les dimanches et fêtes où l'absence n'était pas faite "
    // );
    // for (i = 0; i < dayListWithoHolidaynoSundaySaturday.length; i++) {
    //     console.log(dayListWithoHolidaynoSundaySaturday[i]);
    // }
    // if (dayListWithoHolidaynoSundaySaturday.length == 0) {
    //     console.log(" le tableau des jours de travail seulement est vide");
    // }
    // console.log(
    //     "->Fin message:Avec une boucle for afficher le tableau des jours de travail seulement sans les dimanches et fêtes où l'absence n'était pas faite "
    // );




// now after creating an array that contains all the dates from the latestdate the absence was done until the date of the input, and after that creating another date that contains only the working days from the previous array now we say if there are some dates that the absence was not done between the two dates (the latest date the absence was done and the date of the input)
    if (dayListWithoHolidaynoSundaySaturday.length != 0) { 
    // which means that there are dates the absence was not done, in that case we should launch a pop up that tells the user to first the latest date were the absence was not done, in our case the first element of the array dayListWithoHolidaynoSundaySaturday

        // console.log("the latest date when the absence was not done  is " + dayListWithoHolidaynoSundaySaturday[
        //     0]);

        var SeperateDMYArrayBegin = dayListWithoHolidaynoSundaySaturday[
            0].split('/');
        var jjUndonePreviousDate = SeperateDMYArrayBegin[0];
        var mmUndonePreviousDate = SeperateDMYArrayBegin[1];
        var yyyyUndonePreviousDate = SeperateDMYArrayBegin[2];

        latestDayAbsenceWasNotDonetouseinDateFunction = mmUndonePreviousDate + "/" + jjUndonePreviousDate +
            "/" + yyyyUndonePreviousDate;

        // console.log("Latest date absence was not done to show in the popUp message do first mm/jj/yyyy format" +
        //     latestDayAbsenceWasNotDonetouseinDateFunction);

        //date1  is the latestDayAbsenceWasNotDonetouseinDateFunction
        date1 = new Date(latestDayAbsenceWasNotDonetouseinDateFunction);


    } else {// which means that in all the dates, the absence was worked perfectly
        console.log("All the dates are worked perfectly ");
    }

    // End Bloc Assigning array of undone absenceDate

    //Undone previous date
    //  creating an array that contains seperate values of days month and year from a date input



    //Today  date
    var todayDate = getTodayDate();
    var yyyytodayDate = todayDate.substring(0, 4);
    var mmtodayDate = todayDate.substring(5, 7);
    var jjtodayDate = todayDate.substring(8, 10);

    var TodayDatewithSlash = jjtodayDate + "/" + mmtodayDate + "/" +
        yyyytodayDate;

        console.log("Today date "+TodayDatewithSlash);


    //TodayDatewithSlashForDateFormat is a little bit awkward it's like this mm/jj/yyyy instead of jj/mm/yyyyy
    var TodayDatewithSlashForDateFormat = mmtodayDate + "/" + jjtodayDate + "/" +
        yyyytodayDate;
    let TodayDateDateFormat = new Date(TodayDatewithSlashForDateFormat);
    // console.log("Today date is " + TodayDatewithSlash);



    //verifying if there are any undone previous dates,
     //date1  is the latestDayAbsenceWasNotDonetouseinDateFunction if this variable is different than undefined, which means that undone absence date exists, if we don't have an undone absence date, then the type of date1 will be undefined
    // in the bloc that i named it  "Bloc Assigning array of undone absenceDate" we were working to know if there are undone previous dates, once we have the information, in the following bloc we will launch the required popUps

    if (typeof date1 !== 'undefined') {
        // the variable is defined in that case, we do have an undone date
        if (InputDateFormatDateObject.getTime() > date1.getTime() &&
            InputDateFormatDateObject.getTime() <=
            TodayDateDateFormat.getTime()) {
            console.log("Date 1 comparison " + date1);
            console.log("Date 2 comparison " + InputDateFormatDateObject);

            $("#UndoneDatesRminder").modal("show"); // launch the popUp do first the date .....
            $("#UndoneAbsence").html(date1.getDate() + "/" + date1.getMonth() + "/" + date1.getFullYear());
        }
    }


    //verifying if the date of the input is a holiday (other than sunday or saturday)
    for (i = 0; i < JourFerierTab.length; i++) {

        var InputDateToCompareWithHolidaysTab= jjInputDate+'/'+mmInputDate+'/'+yyyyInputDate;

        // console.log("Input date InputDateToCompareWithHolidaysTab"+InputDateToCompareWithHolidaysTab);
        // console.log("Jour férier tab "+JourFerierTab[i]);
        // console.log("Input date InputDatemmjjyyyyString"+InputDatemmjjyyyyString);
        // console.log("Input date InputDate"+InputDate);
        // console.log("---------")
        if (InputDateToCompareWithHolidaysTab == JourFerierTab[i]) {
            var DaysList = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            $("#HolidayPopUp").modal("show"); // launch the popUp it's a special holiday  .....
            $("#HolidayErrorText").html("The date introduced which is " + InputDate +
                " is  a holiday, it's a special day and we're not supposed to wrok on this date");
        }
    }



    //verifying if the date of the input is after the today date whic is not logic
    if (InputDateFormatDateObject.getTime() > TodayDateDateFormat.getTime()) {
        $("#WrongTodayPopUp").modal("show");
        $("#WrongNotTodayAbsence").html(InputDate);
        $("#TodayRealDay").html(todayDate);

        // 1->Lundi / 0 -> Dimanche / 6 -> Samedi  / alert(InputDateFormat.getDay());
    }




    //verifying if the date of the input is before the today date in this case there will be an update
    var latestDateAbsenceWasDone = new Date(latestDayAbsenceDonetouseinDateFunction);
    // alert(latestDateAbsenceWasDone);
    if (InputDateFormatDateObject.getTime() <= latestDateAbsenceWasDone.getTime() && updatePopUptest == 0) {
        $("#UpdateDatePopUp").modal("show");
        $("#updateDate").html(InputDate);
    }

}



function assignTodayDate() {
    document.getElementById("AbsenceDate").value = getTodayDate();
}


function ReturnDateInput() {

    var dateOnInput = document.getElementById("AbsenceDate").value;
    return dateOnInput;
}


function updateDates() {
    $("#UpdateDatePopUp").modal("hide");
    updatePopUptest = 1;
}

function updatePopUptesttozero() {
    updatePopUptest = 0;
}

