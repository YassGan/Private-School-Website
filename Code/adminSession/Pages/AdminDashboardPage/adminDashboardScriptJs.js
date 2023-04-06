
var sideBarTest = 1
function ThreeBarsClick() {
    sideBarTest++;

    if (sideBarTest % 2 == 0) {
        document.getElementById("sideBarWidth").style.width = "0%";
    }
    if (sideBarTest % 2 != 0) {
        document.getElementById("sideBarWidth").style.width = "25%";
    }
}


$(document).ready(function() {
    displayCalendarEvent();
})



function displayCalendarEvent() {
    var displayData = "true";
    $.ajax({
        url:"AdminDashboardPageAjaxQueries/showingCalendarEvents.php",
        type: "post",
        data: {
            displayDataSend: displayData
        },
        success: function(data, status) {
            $('#EventsContainer').html(data);
        }
    })
}



function addEvent() {
    EventTest = 2;
    titleTest = 2;
    dateTest = 2;
    checkTest = 2;
    var titleName = $('#EventTitle').val();
    var dateEvent = $('#dateEvent').val();
    var couleurChoisie;



    if (document.getElementById('col4').checked) {
        couleurChoisie = "#1f9972";
        checkTest = 1;
    }

    if (document.getElementById('col3').checked) {
        couleurChoisie = "#d6ece6";
        checkTest = 1;
    }

    if (document.getElementById('col2').checked) {
        couleurChoisie = "#cebdae";
        checkTest = 1;

    }

    if (document.getElementById('col1').checked) {
        couleurChoisie = "#5f9986";
        checkTest = 1;

    }

    if (titleName != "") {
        titleTest = 1;
    }

    if (dateEvent != "") {
        dateTest = 1;
    }




    if (dateTest == 2) {
        // alert("the title of the event is " + titleName + " and the date of the event is " + dateEvent + " " +
        //     couleurChoisie);
        var dateEventError = document.getElementById("dateError");
        dateEventError.style.display = "flex";
    }

    if (dateTest == 1) {
        // alert("the title of the event is " + titleName + " and the date of the event is " + dateEvent + " " +
        //     couleurChoisie);
        var dateEventError = document.getElementById("dateError");
        dateEventError.style.display = "none";
    }


    if (checkTest == 2) {

        var dateEventError = document.getElementById("colorError");
        dateEventError.style.display = "flex";
    }


    if (checkTest == 1) {

        var dateEventError = document.getElementById("colorError");
        dateEventError.style.display = "none";
    }

    if (titleTest == 2) {

        var dateEventError = document.getElementById("titleError");
        dateEventError.style.display = "flex";
    }

    if (titleTest == 1) {

        var dateEventError = document.getElementById("titleError");
        dateEventError.style.display = "none";
    }



    if (dateTest == 1 && titleTest == 1 && checkTest == 1) {
        EventTest = 1;


        $.ajax({
            url: "AdminDashboardPageAjaxQueries/addEvent.php",
            type: 'post',
            data: {
                titleNameSend: titleName,
                dateEventSend: dateEvent,
                couleurChoisieSend: couleurChoisie
            },
            success: function(data, status) {
                displayCalendarEvent();
                //alert("success");
                $('#EventPopUp').modal("hide");
            }
        })

    }
}

