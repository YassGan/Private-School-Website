<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include("../../../links.php");

        $PageTitle = "Teachers";


        $loggedInPhotoUrl = 'adminPhoto.png';

        $bellIcon = "../../../Ressorces/images/bell.png";
        $LogOutIcon = "../../../Ressorces/images/logout.png";


        $loggedInPhoto = "../../../Ressorces/images/";
        $loggedInPhoto .= $loggedInPhotoUrl;

    ?>


<!-- Teachers Page Style css -->
<link rel="stylesheet" href="../../../style.css">
<!-- //Teachers Page Style css -->

   
<!-- Teachers Page Style css -->
    <link rel="stylesheet" href="TeachersPageStyleCSS.css">
<!-- //Teachers Page Style css -->

<!-- Teahcers Page Script Js -->
    <script src="TeachersPageScriptJS.js"> </script>
<!-- Teachers Page Script JS -->




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
</head>

<body>



<section>
    <!-- Delete Pupil Modal -->
        <div class="modal fade" id="deleteTeacherModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure that you want to delete this
                            Teacher
                            ?
                        </h1>
                    </div>
                    <div class="modal-footer">
                        <button onclick="confirmTeacherDelete()" type="button" class="btn btn-danger">Yes</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <input type="hidden" id="hiddendataTeacherDelete">

                    </div>
                </div>
            </div>
        </div>
    <!-- // Delete Pupil Modal -->

    <!-- Teacher Updated With success -->
        <div class="modal fade" id="SuccessUpdateTeacher" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Success</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4> Teacher Updated with success </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- //Teacher Updated With success -->

    <!-- View Teacher details modal -->
        <div onmouseover="viewAutorisation()" class="modal fade" id="ViewTeacherModalOpen" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="max-width: 75%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Teacher details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">




                        <div style="display:flex;justify-content:space-around;">
                            <div>
                                <!-- First Name section -->
                                    <div class="pupilInfoContainer" style="display: flex;">
                                        <h6> First name : </h6>
                                        <div class=" ">
                                            <h4 id="TeacherShowNom" class="pupilInfo">

                                            </h4>
                                        </div>
                                    </div>
                                <!-- //First Name section -->

                                <!-- First Name section -->
                                    <div class="pupilInfoContainer" style="display: flex;">
                                        <h6> Last name : </h6>
                                        <div class=" ">
                                            <h4 id="TeacherShowPrénom" class="pupilInfo">

                                            </h4>
                                        </div>
                                    </div>
                                <!-- //First Name section -->


                                <!-- Birth Date section -->
                                    <div class="pupilInfoContainer" style="display: flex;">
                                        <h6> Birth Date : </h6>
                                        <div class=" ">
                                            <h4 id="TeacherShowDateNaissance" class="pupilInfo">
                                            </h4>
                                        </div>
                                    </div>
                                <!-- //Birth Date section -->



                                <!-- Level section -->
                                    <div class="pupilInfoContainer" style="display: flex;">
                                        <h6> Entry Date : </h6>
                                        <div class=" ">
                                            <h4 id="TeacherShowDateAjout" class="pupilInfo">

                                            </h4>
                                        </div>
                                    </div>
                                <!-- Level section -->



                                <!-- Classification section -->
                                    <div class="pupilInfoContainer" style="display: flex;">
                                        <h6> Adress : </h6>
                                        <div class=" ">
                                            <h4 id="TeacherShowadresseLogement" class="pupilInfo">
                                            </h4>
                                        </div>
                                    </div>
                                <!--// Classification section -->

                            </div>


                            <div>
                                <!-- First Name section -->
                                <div class="pupilInfoContainer" style="display: flex;">
                                    <h6> Email Adress : </h6>
                                    <div class=" ">
                                        <h4 id="TeacherShowadresseEmail" class="pupilInfo">

                                        </h4>
                                    </div>
                                </div>
                                <!-- //First Name section -->


                                <!-- First Name section -->
                                <div class="pupilInfoContainer" style="display: flex;">
                                    <h6> Phone : </h6>
                                    <div class=" ">
                                        <h4 id="TeacherShowPhone" class="pupilInfo">
                                        </h4>
                                    </div>
                                </div>
                                <!-- //First Name section -->




                                <!-- First Name section -->
                                <div class="pupilInfoContainer" style="display: flex;">
                                    <h6> Emergency Person : </h6>
                                    <div class=" ">
                                        <h4 id="TeacherShowEmergencyPerson" class="pupilInfo">
                                        </h4>
                                    </div>
                                </div>
                                <!-- //First Name section -->



                                <!-- Sex section -->
                                <div class="pupilInfoContainer" style="display: flex;">
                                    <h6> Emergency person phone : </h6>
                                    <div class=" ">
                                        <h4 id="TeacherShowEmergencyPersonPhone" class="pupilInfo">
                                        </h4>
                                    </div>
                                </div>
                                <!--// Sex section -->



                            </div>

                            <div>





                                <!-- Level section -->
                                <div>
                                    <h6> Prefered Subject : </h6>
                                    <div class=" ">

                                        <h4 style="width:200px" class="pupilInfo" id="TeacherMatière"
                                            aria-describedby="emailHelp"> </h4>
                                    </div>
                                </div>
                                <!-- Level section -->




                                <!-- Birth Date section -->
                                <div class="pupilInfoContainer" style="">
                                    <h6> Photo : </h6>
                                    <div class=" ">
                                        <img id="TeacherShowPhoto" style="width: 120px;height:120px;" src="">
                                    </div>
                                </div>
                                <!-- //Birth Date section -->











                                <!-- Sex section -->
                                <div class="pupilInfoContainer" style="display: flex;">
                                    <h6> Autorisation </h6>
                                    <div style="color:gray" id="AutorisationColor">


                                        <div id="TeacherAutorisation">

                                        </div>


                                        <input style="display: none;" id="hiddenDataIdTeacher">
                                        <input style="display: none;" id="hiddenIdCurrentAutorisation">

                                        <div>
                                            <button onclick="updateAutorisation()" class="mt-3 btn btn-warning"> Change
                                            </button>
                                        </div>

                                    </div>

                                </div>
                                <!--// Sex section -->



                            </div>







                        </div>




                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- //View Teacher details modal -->
</section>


    <!-- Add new teacher modal -->

    <div class="modal fade" id="addNewTeacherPopUp" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 75%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add new teacher</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="display:flex;justify-content:space-around;">
                        <div>
                            <!-- First Name section -->
                                <div>
                                    <h6> First name : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control" id="TeacherName"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            <!-- //First Name section -->

                            <!-- First Name section -->
                                <div>
                                    <h6> Last name : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control" id="TeacherPrénom"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            <!-- //First Name section -->



                            <!-- Sex section -->
                            <div>
                                <h6> Sex : </h6>
                                <div class=" ">

                                    <select style="width:200px" type="text" class="form-control" id="TeacherSex"
                                        aria-describedby="emailHelp">
                                        <option selected=""> </option>



                                        <option value="male"> Male </option>
                                        <option value="female"> Female </option>

                                    </select>
                                </div>
                            </div>
                            <!--// Sex section -->





                            <!-- Adresse section -->
                            <div>
                                <h6> Adresse Logement : </h6>
                                <div class=" ">

                                    <input style="width:200px" type="text" class="form-control"
                                        id="TeacherAdresseLogement" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- //Birth Date section -->



                            <!-- Adresse section -->
                            <div>
                                <h6> Birth Date : </h6>
                                <div class=" ">

                                    <input style="width:200px" type="text" class="form-control" id="TeacherBirthDate"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- //Birth Date section -->






                        </div>

                        <div>


                            <!-- Adresse section -->
                            <div>
                                <h6> Adresse Email : </h6>
                                <div class=" ">

                                    <input style="width:200px" type="text" class="form-control" id="TeacherAdresseEmail"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- //Birth Date section -->



                            <!-- Phone Number -->
                            <div>
                                <h6> Phone Number : </h6>
                                <div class=" ">

                                    <input style="width:200px" type="text" class="form-control" id="TeacherPhoneNumber"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- //Birth Date section -->



                            <!-- Level section -->
                            <div>
                                <h6> Person to call in emergency : </h6>
                                <div class=" ">

                                    <input style="width:200px" type="text" class="form-control"
                                        id="TeacherEmergencyPerson" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- Level section -->



                            <!-- Level section -->
                            <div>
                                <h6> Emergency person phone number : </h6>
                                <div class=" ">

                                    <input style="width:200px" type="text" class="form-control"
                                        id="TeacherEmergencyPhoneNumber" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- Level section -->


                            <!-- Level section -->
                            <div>
                                <h6> Prefered Subject : </h6>
                                <div class=" ">

                                    <input style="width:200px" type="text" class="form-control" id="AddTeacherMatière"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- Level section -->

                        </div>

                        <div>

                            <!-- Level section -->
                            <div>
                                <h6> Photo : </h6>
                                <div class=" ">

                                    <input style="width:200px" type="file" class="form-control" id="TeacherPhoto"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- Level section -->




                        </div>







                    </div>




                </div>
                <div class="modal-footer">
                    <button onclick="addNewTeacher()" type="button" class="btn btn-success">Add </button>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>









    <!-- Update teacher modal -->
        <div class="modal fade" id="UpdateTeacherPopUp" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" style="max-width: 75%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input id="hiddenIdUpdateTeacher" style="display: none;">
                        <div style="display:flex;justify-content:space-around;">
                            <div>

                                <!-- First Name section -->
                                <div>
                                    <h6> First name : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control" id="UpTeacherName"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- //First Name section -->




                                <!-- First Name section -->
                                <div>
                                    <h6> Last name : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control" id="UpTeacherPrénom"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- //First Name section -->



                                <!-- Sex section -->
                                <div>
                                    <h6> Sex : </h6>
                                    <div class=" ">

                                        <select style="width:200px" type="text" class="form-control" id="UpTeacherSex"
                                            aria-describedby="emailHelp">
                                            <option selected=""> </option>



                                            <option value="male"> Male </option>
                                            <option value="female"> Female </option>

                                        </select>
                                    </div>
                                </div>
                                <!--// Sex section -->

                                <!-- Adresse section -->
                                <div>
                                    <h6> Adresse Logement : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control"
                                            id="UpTeacherAdresseLogement" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- //Birth Date section -->



                                <!-- Adresse section -->
                                <div>
                                    <h6> Birth Date : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control" id="UpTeacherBirthDate"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- //Birth Date section -->


                            </div>

                            <div>
                                <!-- Adresse section -->
                                <div>
                                    <h6> Entry Date : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control" id="UpTeacherEntryDate"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- //Birth Date section -->


                                <!-- Adresse section -->
                                <div>
                                    <h6> Adresse Email : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control"
                                            id="UpTeacherAdresseEmail" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- //Birth Date section -->



                                <!-- Phone Number -->
                                <div>
                                    <h6> Phone Number : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control"
                                            id="UpTeacherPhoneNumber" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- //Birth Date section -->



                                <!-- Level section -->
                                <div>
                                    <h6> Person to call in emergency : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control"
                                            id="UpTeacherEmergencyPerson" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- Level section -->



                                <!-- Level section -->
                                <div>
                                    <h6> Emergency person phone number : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control"
                                            id="UpTeacherEmergencyPhoneNumber" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- Level section -->




                            </div>


                            <div>
                                <!-- Level section -->
                                <div>
                                    <h6> Prefered Subject : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="text" class="form-control" id="UpTeacherMatière"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- Level section -->


                                <!-- Level section -->
                                <div>
                                    <h6> Photo : </h6>
                                    <div class=" ">

                                        <input style="width:200px" type="file" class="form-control" id="UpTeacherPhoto"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <!-- Level section -->


                                <div class=" ">
                                    <img id="TeacherShowPhotoUp" style="width: 120px;height:120px;">
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button onclick="UpdateTeacher()" type="button" class="btn btn-success">Update </button>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- //Update teacher modal -->



<div>
        <div style="display:flex;" class=".container-fluid  min-vh-100  ">
            <div style="width:20%;" id="sideBarWidth" class="  greenBg   align-items-center">
                <div class="text-center mt-3 mb-4">
                    <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                    <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                </div>


                <div style="margin-left:20px;">
                    <?php include "./adminSideBar.php"; ?>
                </div>
            </div>


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
                    <div class="">
                        <div onclick="NewTeacherPopUp()">
                            <button class="btn btn-success" >Add Teacher </button>

                        </div>
                    </div>
                </div>

                <div style="display:flex;justify-content:center;padding-top:20px;">
                    <div style="padding-left:9px;padding-right:9px; ;width:97%;border-radius:25px;"
                        id="displayTeachersDataTable">
                    </div>
                </div>
            </div>

        </div>
</div>

</body>

</html>