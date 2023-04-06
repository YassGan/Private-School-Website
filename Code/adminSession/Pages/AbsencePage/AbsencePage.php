<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Absence</title>
<?php
    include("../../../links.php");


    $PageTitle = "Absence ";


    $loggedInPhotoUrl = 'adminPhoto.png';

    $bellIcon = "../../../Ressorces/images/bell.png";
    $LogOutIcon = "../../../Ressorces/images/logout.png";



    $loggedInPhoto = "../../../Ressorces/images/";
    $loggedInPhoto .= $loggedInPhotoUrl;
?>

<style>
.LightGreen {
    background: #5f9986;
}

.greenBg {
    transition: all 0.5s;

    background: rgb(31, 153, 114);
    background: linear-gradient(86deg, rgba(31, 153, 114, 1) 100%, rgba(131, 138, 136, 1) 100%);
}

.grayBg {
    background: linear-gradient(86deg, rgba(196, 215, 210, 1) 100%, rgba(131, 138, 136, 1) 100%);
}

.paddingElem {
    height: 50px;
    width: 180px;
    margin-right: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    font-family: sans-serif;

}

.paddingElem:hover {
    background: #6bb7a4;
    border-radius: 40px;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.LogoSize {
    width: 80px;
    height: 120px;
}

.LogoTitle {
    font-family: 'MonsieurLaDoulaise-Regular', Times, serif;
}

.fontSize {
    font-size: 18px;
    font-family: 'arial', Times, serif;
    color: #9fcdc1;

}

.MenuElementsContainer {
    margin-top: 40px;
}


.VintageFont {
    font-family: 'Meie Script', cursive;

}

.LightGreeishBg {
    background: #dbeae6;
}


.AjouterBtnEvent {
    border: 1px solid;
    border-radius: 20px;
    padding: 8px;
    margin-right: 10px;
    font-size: 16px;

}

.AjouterBtnEvent:hover {
    background: #e4e4ee;
    cursor: pointer;
    transition: 0.2s;
    display: flex;
    justify-content: center;
    align-items: center;
}

.ThreeButtonsDashboard {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-bottom: 8px;
    padding-left: 8px;
}

.ThreeButtonsDashboard:hover {
    cursor: pointer;
    padding-left: 15px;
}

    </style>

<!-- Absence Page, js script link -->
    <script  src="./AbsencePageScriptJs.js"> </script>
<!-- // Absence Page, js script link -->




<!-- Absence Page style link -->
    <link rel="stylesheet" href="./AbsencePageStyle.css">
<!-- //Absence Page style link -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
</head>

<body onload="assignTodayDate(); NumericArray();GettingLatestDateWasDone();">




<section>
    <!-- All PopUps container  -->
        <section class="AllPopUpsContainer">
            <!-- UndoneDates reminder popUp -->
                <div class="modal fade" id="UndoneDatesRminder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Rminder</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div style="display: flex;">
                                    <h4 style="font-size: 20px;"> Do first the absence of </h4>
                                    <h5 style="padding-left: 10px; color:lightslategray" id="UndoneAbsence"> </h5>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- //UndoneDates reminder popUp -->


            <!-- NotWorkingDay reminder popUp  (This popup shows up when the user tryes to do the absence of a holiday such as Sunday and Saturday) -->
                <div class="modal fade" id="WrongTodayPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Warning</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div style="display: flex;">
                                    <h4 style="font-size: 20px;"> Erreur! Today is not </h4>
                                    <h5 style="padding-left: 10px; color:red" id="WrongNotTodayAbsence"> </h5>
                                </div>
                                <div style="display: flex;">
                                    <h4 style="font-size: 20px;"> Today is </h4>
                                    <h5 style="padding-left: 10px; color:green" id="TodayRealDay"> </h5>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- // NotWorkingDay reminder popUp  (This popup shows up when the user tryes to do the absence of a holiday such as Sunday and Saturday) -->



            <!-- A done absence day PopUp reminder (This popup shows up when the user tryes to do the absence of a day that its absence were already done, if the user persists to do the absence of that day, then the absence will be updated) -->
                <div class="modal fade" id="UpdateDatePopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Question</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div style="display: flex;">
                                    <h4 style="font-size: 20px;"> Do You want to update the date of </h4>
                                    <h5 style="padding-left: 10px; color:olive" id="updateDate"> </h5>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button onclick="updateDates()" type="button" class="btn btn-warning">
                                    <div style="color:white;"> Yes </div>
                                </button>

                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- //A done absence day PopUp reminder (This popup shows up when the user tryes to do the absence of a day that its absence were already done, if the user persists to do the absence of that day, then the absence will be updated) -->



            <!-- Absence not finished popUp checker -->
                <div class="modal fade" id="AbsencecheckingPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Absence checking not finsihed !</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div style="display: block;">
                                    <h4 style="font-size: 20px;"> You've not finished : </h4>
                                    <div id="notCheckedPupilListContainer">
                                        <ul id="myList"></ul>
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">


                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- //Absence not finished popUp checker -->


            <div class="modal fade" id="HolidayPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Error</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div style="display: flex;">
                                <h4 style="font-size: 20px;"> </h4>
                                <h5 style="" id="HolidayErrorText"> </h5>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- //All PopUps container  -->
</section>





<section>
    <div style="display:flex;" class=".container-fluid  min-vh-100  ">
        <!-- SideBar element  -->
            <div id="sideBarWidth" style="width:20%;" class="  greenBg   align-items-center">

                <div class="text-center mt-3 mb-4">
                    <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                    <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                </div>


                <div style="margin-left:20px;">
                    <?php include "./adminSideBar.php" ?>
                </div>
            </div>
        <!--// SideBar element  -->


        <!-- Main page, the element on the middle -->
            <div style="width:100%; " class="LightGreeishBg ">
                    
                <!-- First line of the element on the middle the on that contains the name of the page, the search bar, and the logged in user info -->
                    <div style=" width:auto;" class=" d-flex align-items-center justify-content-between pt-3 ">
                        <!-- Page Title -->
                            <div style="display:flex; width:160px;" class="  ">
                                <div onclick="ThreeBarsClick()" class="ThreeButtonsDashboard" style=" ">
                                    <img class="ThreeButtonsDashboardElement" style="width:25px;height:30px;" src="../../../Ressorces/images/menu.png">
                                </div>

                                <h4 style="margin-left:10px;" class=""> <?php echo $PageTitle; ?> </h4>
                            </div>
                        <!-- //Page Title -->

                        <!-- Search Bar -->
                            <div style=" width:auto; height:60px;" class="d-flex align-items-center pt-3  ">
                                <div style="margin-right:37px;" class=" input-group mb-3 ">
                                    <span style="border-radius: 20px 0px 0px 20px;" class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>

                                    <input style="border-radius: 0px 20px 20px 0px;" type="text" class="form-control" placeholder="Search here ..." aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        <!-- //Search Bar -->

                        <!-- Logged In user info  -->
                            <div style="  margin-right:40px;" class=" d-flex justify-content-between align-items-center">

                                <div style="padding-right: 10px;" class="">
                                    <div class="notifIcon">
                                        <div style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:white; ">
                                            <img style="width:22px;height:22px;" src=<?php echo $bellIcon; ?> />
                                            <h4 style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                                . </h4>

                                        </div>
                                    </div>
                                </div>


                                <div style="padding-right: 10px;">
                                    <div class="notifIcon">
                                        <div style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center;">
                                            <a href="../logOut.php"> <img style="width:22px;height:22px;" src=<?php echo $LogOutIcon; ?> /> </a>
                                            <h4 style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                                . </h4>

                                        </div>
                                    </div>
                                </div>


                                <div style="display:flex;">
                                    <div class="" style="padding-right: 10px;">
                                        <div>
                                            <h5 style="font-size: 14px; padding-top:10px; "> Yassine Gn </h5>
                                        </div>
                                        <div style=" margin-top:-12px;">
                                            <span style="font-size: 12px;"> Admin </span>
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center;" class="notifIcon">
                                        <div style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; ">
                                            <img style="width:40px;height:40px;border-radius:20px;" src=<?php echo $loggedInPhoto; ?> />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <!-- //Logged In user info  -->
                    </div>
                <!-- First line of the element on the middle the on that contains the name of the page, the search bar, and the logged in user info -->

                <!-- The input that contains the value of the latest date the absence was done -->
                    <input id="LatestDateAbsenceWasDone" style="display: none;" type="text">
                <!-- ////The input that contains the value of the latest date the absence was done -->

                <!-- date input container -->
                    <div style="margin-top:40px;display:flex;justify-content:center;">
                        <div>
                            <h5> Doing the absence of : </h5>

                            <div class="input-group input-group-sm mb-3">

                                <div style="width: 200px;">
                                    <input onchange="updatePopUptesttozero()" id="AbsenceDate" type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- //date input container -->

                <!-- The accordion container -->
                    <div onclick="undoneDatesReminder()" id="restbody">
                        <?php include("./AbsencePageComposants/AccordionComposant.php");
                        // <?php include("AccordionComposant.php");
                       //AbsencePageComposants/AccordionComposant.php")

                        ?>
                    </div>
                <!-- //The accordion container -->


                <!-- Finshing doing the absence container -->
                    <div style="margin-top:40px;display:flex;justify-content:center;">
                        <div>
                            <div class="input-group input-group-sm mb-5">
                                <button onclick="DoTheAbsenceOnClickFinishButton()" class="btn btn-success px-4 py-2"> 
                                    <h6>Finsih </h6>
                                </button>
                            </div>
                        </div>
                    </div>
                <!-- //Finshing doing the absence container -->

            </div>
        <!-- //Main page, the element in the middle -->
    </div>
</section>



   






</body>

</html>