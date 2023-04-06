<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pupils</title>
    
    
        <?php
            include("../../../links.php");

            $PageTitle = "Pupils";


            $loggedInPhotoUrl = 'adminPhoto.png';

            $bellIcon = "../../../Ressorces/images/bell.png";
            $LogOutIcon = "../../../Ressorces/images/logout.png";



            $loggedInPhoto = "../../../Ressorces/images/";
            $loggedInPhoto .= $loggedInPhotoUrl;

        ?>

    
        <!-- PupilsPages stylee CSS link -->
            <link rel="stylesheet" href="./PupilPageStyleCSS.css">
        <!-- PupilsPages stylee CSS link -->

        <!-- PupilsPage Script js Link -->
            <script src="PupilsPageScriptJS.js" > </script>
        <!-- //PupilsPage Script js Link -->


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
    </head>


    
    <body>

        <!-- all the popUps-->
            <section>

                <!-- View pupil details modal -->
                    <div class="modal fade" id="ViewPupilModalOpen" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" style="max-width: 75%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pupil details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">




                                    <div style="display:flex;justify-content:space-around;">
                                        <div>

                                            <!-- First Name section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> First name : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowNom" class="pupilInfo">
                                                        Yassine
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- //First Name section -->




                                            <!-- First Name section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Last name : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowPrénom" class="pupilInfo">
                                                        Gana
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- //First Name section -->



                                            <!-- Sex section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Sex : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowsexe" class="pupilInfo">
                                                        Male
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--// Sex section -->





                                            <!-- Birth Date section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Birth Date : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowDateNaissance" class="pupilInfo">
                                                        2000/05/15
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- //Birth Date section -->



                                            <!-- Level section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Inscription Date : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowDateAjout" class="pupilInfo">
                                                        2000/05/25
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- Level section -->



                                            <!-- Classification section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Class : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowNiveau" class="pupilInfo">
                                                        1 A
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--// Classification section -->



                                            <!-- Classification section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Adress : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowclassificationA_B" class="pupilInfo">
                                                        08 Ali chehimi Street, Hammam Chatt
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--// Classification section -->


                                        </div>



                                        <div>

                                            <!-- First Name section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Father name : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowadresseLogement" class="pupilInfo">
                                                        Sami
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- //First Name section -->




                                            <!-- First Name section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Father Job : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShownomPère" class="pupilInfo">
                                                        Teacher
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- //First Name section -->



                                            <!-- Sex section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Father phone : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShownomProfessionPère" class="pupilInfo">
                                                        97581724
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--// Sex section -->





                                            <!-- Birth Date section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Father Email : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShownomTelephonePère" class="pupilInfo">
                                                        samigana@gmail.com
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- //Birth Date section -->



                                            <!-- Level section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Mother Name : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShownomemailPère" class="pupilInfo">
                                                        Latifa
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- Level section -->



                                            <!-- Classification section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Mother Job : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShownomMère" class="pupilInfo">
                                                        Supervisor
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--// Classification section -->



                                            <!-- Classification section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Mother Phone : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowprofessionmère" class="pupilInfo">
                                                        51340126
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--// Classification section -->


                                        </div>

                                        <div>

                                            <!-- First Name section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Mother Email : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowtelephonemère" class="pupilInfo">
                                                        
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- //First Name section -->




                                            <!-- First Name section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Nationality : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowemailMère" class="pupilInfo">
                                                    
                                                    </h4>
                                                </div>
                                            </div>
                                            <!-- //First Name section -->



                                            <!-- Sex section -->
                                            <div class="pupilInfoContainer" style="display: flex;">
                                                <h6> Pupil Email : </h6>
                                                <div class=" ">
                                                    <h4 id="PupilShowNationalitéeleve" class="pupilInfo">
                                                        yassine@gmail.com
                                                    </h4>
                                                </div>
                                            </div>
                                            <!--// Sex section -->





                                            <!-- Birth Date section -->
                                            <div class="pupilInfoContainer" >
                                                <h6> Photo : </h6>
                                                <div class=" ">
                                                    <img id="PupilShowPhoto" style="width: 120px;height:120px;"
                                                        src="../../../Ressorces/images/photosElèves/adminPhoto.png">
                                                </div>
                                            </div>
                                            <!-- //Birth Date section -->


                                            <!-- View Absence -->
                                            <div class="pupilInfoContainer">
                                                <div style="display:flex;justify-content:space-around ">
                                                    <div data-bs-target="pupilAbsenceModal" data-bs-toggle="modal"
                                                        onclick="gettingPupilAbsenceDetails()" id="AbsenceButtonId"
                                                        class="btn btn-danger"> Absence </div>
                                                    <div data-bs-target="pupilPaimentModal" data-bs-toggle="modal"
                                                        onclick="gettingPupilPaimentDetails()" id="PaimentsButtonId"
                                                        class="btn btn-warning" class="btn btn-warning"> payment </div>
                                                </div>
                                            </div>
                                            <!-- //View Absence section -->

                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- //View pupil details modal -->


                <!-- Add new pupil modal -->
                    <div class="modal fade" id="addNewPupilModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="max-width: 75%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add new pupil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">




                                    <div style="display:flex;justify-content:space-around;">
                                        <div>

                                            <!-- First Name section -->
                                            <div>
                                                <h6> First name : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilName"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- //First Name section -->




                                            <!-- First Name section -->
                                            <div>
                                                <h6> Last name : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilPrénom"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- //First Name section -->



                                            <!-- Sex section -->
                                            <div>
                                                <h6> Sex : </h6>
                                                <div class=" ">

                                                    <select style="width:200px" type="text" class="form-control" id="PupilSex"
                                                        aria-describedby="emailHelp">
                                                        <option selected=""> </option>



                                                        <option value="male"> Male </option>
                                                        <option value="female"> Female </option>

                                                    </select>
                                                </div>
                                            </div>
                                            <!--// Sex section -->





                                            <!-- Birth Date section -->
                                            <div>
                                                <h6> Birth date : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilBirthDate"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- //Birth Date section -->



                                            <!-- Level section -->
                                            <div>
                                                <h6> Level : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilLevel"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- Level section -->



                                            <!-- Classification section -->
                                            <div>
                                                <h6> Classification : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilClassification"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!--// Classification section -->



                                            <!-- Classification section -->
                                            <div>
                                                <h6> Father's Name : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilFatherPrénom"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!--// Classification section -->

                                        </div>


                                        <div>

                                            <!-- First Name section -->
                                            <div>
                                                <h6> Father's job : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilFatherJob"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- //First Name section -->




                                            <!-- First Name section -->
                                            <div>
                                                <h6> Father's phone : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilFatherPhone"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- //First Name section -->



                                            <!-- Sex section -->
                                            <div>
                                                <h6> Father's email : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilFatherEmail"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!--// Sex section -->





                                            <!-- Birth Date section -->
                                            <div>
                                                <h6> Mother's name : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilMotherName"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- //Birth Date section -->



                                            <!-- Level section -->
                                            <div>
                                                <h6> Mother's job : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilMotherJob"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- Level section -->



                                            <!-- Classification section -->
                                            <div>
                                                <h6> Mother's phone : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilMotherPhone"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!--// Classification section -->



                                            <!-- Classification section -->
                                            <div>
                                                <h6> Mother's email : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilMotherEmail"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!--// Classification section -->

                                        </div>







                                        <div>

                                            <!-- First Name section -->
                                            <div>
                                                <h6> Nationality : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilNationality"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- //First Name section -->




                                            <!-- First Name section -->
                                            <div>
                                                <h6> Pupil's email : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilEmail"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- //First Name section -->



                                            <!-- Sex section -->
                                            <div>
                                                <h6> Password : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilPassword"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!--// Sex section -->





                                            <!-- Birth Date section -->
                                            <div>
                                                <h6> Adress : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="text" class="form-control" id="PupilAdress"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- //Birth Date section -->



                                            <!-- Level section -->
                                            <div>
                                                <h6> Photo : </h6>
                                                <div class=" ">

                                                    <input style="width:200px" type="file" class="form-control" id="PupilPhoto"
                                                        aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <!-- Level section -->




                                        </div>







                                    </div>




                                </div>
                                <div class="modal-footer">
                                    <button onclick="addNewPupil()" type="button" class="btn btn-success">Add pupil</button>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- //Add new pupil modal -->


                <!-- Pupil paiment details Modal -->
                    <div class="modal fade" id="pupilPaimentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pupil Paiment details</h1>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h1 class="modal-title fs-5 mb-4" id="exampleModalLabel">Here are the details of paiment
                                    </h1>
                                    <div id="PupilPaimentList">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-target="#ViewPupilModalOpen"
                                        data-bs-toggle="modal">Return to details</button>
                                    <input type="hidden" id="hiddendataPupilPaiment">

                                </div>
                            </div>
                        </div>
                    </div>
                <!-- // Pupil paiment details Modal  -->


                <!-- Pupil absence details Modal -->
                    <div class="modal fade" id="pupilAbsenceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pupil Absence details</h1>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h1 class="modal-title fs-5 mb-4" id="exampleModalLabel">Here are the dates of the absence
                                    </h1>
                                    <div id="PupilAbsencesList">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-target="#ViewPupilModalOpen"
                                        data-bs-toggle="modal">Return to details</button>
                                    <input type="hidden" id="hiddendataPupilDelete">

                                </div>
                            </div>
                        </div>
                    </div>
                <!-- // Pupil absence details Modal  -->


                <!-- Delete Pupil Modal -->
                    <div class="modal fade" id="deletePupilModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure that you want to delete this Pupil
                                        ?
                                    </h1>
                                </div>
                                <div class="modal-footer">
                                    <button onclick="confirmPupilDelete()" type="button" class="btn btn-danger">Yes</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                    <input type="hidden" id="hiddendataPupilDelete">

                                </div>
                            </div>
                        </div>
                    </div>
                <!-- // Delete Pupil Modal -->


                <!-- Pupil Added With success -->
                    <div class="modal fade" id="SuccessAddedPupil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Success</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4> Pupil added with success </h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- //Pupil Added With success -->

            
                <!-- Pupil Updated With success -->
                    <div class="modal fade" id="SuccessUpdatePupil" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Success</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4> Pupil Updated with success </h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="location.reload();" class="btn btn-success"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Pupil Updated With success -->
            </section>
        <!-- //all the popUps-->

        <section>
            <div style="display:flex;" class=".container-fluid  min-vh-100  ">
            
            <!-- SideBar Element -->
                <div style="width:20%;" id="sideBarWidth" class="  greenBg   align-items-center">

                    <div class="text-center mt-3 mb-4">
                        <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                        <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                    </div>


                    <div style="margin-left:20px;">
                        <?php include "./adminSideBar.php"; ?>
                    </div>
                </div>
            <!-- //SideBar Element -->



            <!-- Main element container -->
                <div style="width:100%; " class=" LightGreeishBg ">
                    <div style=" width:auto;" class=" d-flex align-items-center justify-content-between pt-3 ">


                        <!-- Page Title -->

                        <div style="display:flex; width:160px;" class="  ">

                            <div onclick="ThreeBarsClick()" class="ThreeButtonsDashboard" style=" ">
                                <img class="ThreeButtonsDashboardElement" style="width:25px;height:30px;"
                                    src="../../../Ressorces/images/menu.png">
                            </div>
                            <h4 style="margin-left:10px;" class=""> <?php echo $PageTitle; ?> </h4>

                        </div>
                        <!-- //Page Title -->




                        <!-- Search Bar -->
                        <div style=" width:auto; height:60px;" class="d-flex align-items-center pt-3  ">
                            <div style="margin-right:37px;" class=" input-group mb-3 ">
                                <span style="border-radius: 20px 0px 0px 20px;" class="input-group-text"
                                    id="basic-addon1"><i class="fas fa-search"></i></span>

                                <input style="border-radius: 0px 20px 20px 0px;" type="text" class="form-control"
                                    placeholder="Search here ..." aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <!-- //Search Bar -->





                        <!-- Logged In user info  -->
                        <div style="  margin-right:40px;" class=" d-flex justify-content-between align-items-center">

                            <div style="padding-right: 10px;" class="">
                                <div class="notifIcon">
                                    <div
                                        style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:white; ">
                                        <img style="width:22px;height:22px;" src=<?php echo $bellIcon; ?> />
                                        <h4
                                            style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                            . </h4>

                                    </div>
                                </div>
                            </div>


                            <div>


                                <div style="padding-right: 10px;">
                                    <div class="notifIcon">
                                        <div
                                            style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:white;">
                                            <a href="../logOut.php"> <img style="width:22px;height:22px;"
                                                    src=<?php echo $LogOutIcon; ?> /> </a>
                                            <h4
                                                style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                                . </h4>

                                        </div>
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
                                    <div
                                        style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; ">
                                        <img style="width:40px;height:40px;border-radius:20px;"
                                            src=<?php echo $loggedInPhoto; ?> />


                                    </div>
                                </div>


                            </div>

                        </div>
                        <!-- //Logged In user info  -->

                    </div>





                    <div style="padding-left:40px;padding-top:40px;">
                        <div class="   ">
                            <div onclick="NewPupilPopUp()">
                                <button class="btn btn-success" style=" font-size:16px;">Add Pupil </button>

                            </div>
                        </div>
                    </div>






                    <div style="display: flex;justify-content:center;">
                        <div id="AllPupilsContainer"
                            style="background: white; width:95%; border-radius:25px;margin-top:40px;">









                        </div>
                    </div>






                </div>
            <!-- //Main element container -->


            </div>
        </section>

    </body>

</html>