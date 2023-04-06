<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("../../../links.php");

    $PageTitle = "Grades";


    $loggedInPhotoUrl = 'adminPhoto.png';

    $bellIcon = "../../../Ressorces/images/bell.png";
    $LogOutIcon = "../../../Ressorces/images/logout.png";


    $loggedInPhoto = "../../../Ressorces/images/";
    $loggedInPhoto .= $loggedInPhotoUrl;

    ?>





<!-- Script JS GradesPage link -->
    <script src="GradesPageScriptJS.js"> </script>
<!-- Script JS GradesPage link -->

<!-- GradesPages style file -->
    <link rel="stylesheet" href="./GradesPageStyleCSS.css" >
<!-- GradesPages style file -->



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
</head>

<body>






    <!-- Grades Modal -->
    <div class="modal fade" id="AddNoteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add student Grades</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <div style="display: flex; justify-content:space-between; margin-right:50px;margin-left:50px;">
                        <!-- Input Element -->
                        <div style="width: 100px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Student ID</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="StudentID"
                                        aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>

                        <!-- Input Element -->
                        <!-- <div style="width: 200px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Email Address</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="EmailAddress" aria-describedby="basic-addon3" placeholder="studentname@gmail.com ?">
                                </div>
                            </div>
                        </div> -->



                    </div>


                    <div style="display: flex; justify-content:space-between; margin-right:50px;margin-left:50px;">
                        <!-- Input Element -->
                        <div style="width: 100px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Semestre </label>
                                <div class="input-group">

                                    <select id="Semestre" class="form-select" aria-label="Default select example">
                                        <option selected> </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                </div>
                            </div>
                        </div>




                        <!-- Input Element -->
                        <div style="width: 200px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Année scolaire</label>
                                <div class="input-group">
                                    <input id="annéeScolaire" type="text" class="form-control"
                                        aria-describedby="basic-addon3" placeholder="2022/2023 ?">
                                </div>
                            </div>
                        </div>

                    </div>



                    <div style="display: flex; justify-content:space-between; margin-right:50px;margin-left:50px;">
                        <!-- Input Element -->
                        <div style="width: 100px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Note Arabe </label>
                                <div class="input-group">
                                    <input id="noteArabe" class="form-control" aria-describedby="basic-addon3"
                                        placeholder="note/20">

                                </div>
                            </div>
                        </div>




                        <!-- Input Element -->
                        <div style="width: 200px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Teacher remarks</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="ArabTeacherRemarks" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div style="display: flex; justify-content:space-between; margin-right:50px;margin-left:50px;">
                        <!-- Input Element -->
                        <div style="width: 100px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Note French </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="noteFrench"
                                        aria-describedby="basic-addon3" placeholder="note/20">

                                </div>
                            </div>
                        </div>




                        <!-- Input Element -->
                        <div style="width: 200px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Teacher remarks</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="FrenchTeacherRemarks" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div style="display: flex; justify-content:space-between; margin-right:50px;margin-left:50px;">
                        <!-- Input Element -->
                        <div style="width: 100px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Note English </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="noteEnglish"
                                        aria-describedby="basic-addon3" placeholder="note/20">

                                </div>
                            </div>
                        </div>




                        <!-- Input Element -->
                        <div style="width: 200px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Teacher remarks</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="EnglishTeacherRemarks" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div style="display: flex; justify-content:space-between; margin-right:50px;margin-left:50px;">
                        <!-- Input Element -->
                        <div style="width: 100px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Note Sciences </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="noteSciences"
                                        aria-describedby="basic-addon3" placeholder="note/20">

                                </div>
                            </div>
                        </div>




                        <!-- Input Element -->
                        <div style="width: 200px;">
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Teacher remarks</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="SciencesTeacherRemarks" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button onclick="addPupilGradesClick()" type="button" class="btn btn-primary">Add pupil
                        grades</button>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>











    <!-- Grades showing popUP -->
    <?php include("./GradesShowingPopUp.php") ?>

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

                <div style="display: flex;justify-content:end; margin-right:40px;">
                    <div class=" mt-5">
                        <button onclick="AddStudentPopUpClick()" class="btn btn-success"> Add student grandes
                        </button>
                    </div>
                </div>





                <!-- Filtring Container -->

                <div style="margin-top:30px;display: flex; justify-content:space-around">


                    <!-- Choosing the scolar year  -->
                    <div>
                        <div style="display:flex;justify-content:center">
                            <h5> Choose the scolar year : </h5>
                        </div>

                        <div>
                            <div style="display:flex;justify-content:center">
                                <select onchange="YearChoiceSelect()" class="form-select" style="width: 250px;"
                                    name="Mois" id="scolaryear">
                                    <option value=" Choose_a_year">Choose_a_year</option>
                                    <option value="2020/2021">2020/2021</option>
                                    <option value="2021/2022">2021/2022</option>
                                    <option value="2022/2023">2022/2023</option>
                                </select>
                            </div>


                        </div>
                    </div>



                    <!-- Choosing the class -->
                    <div>
                        <div style="display:flex;justify-content:center">
                            <h5> Choose the class : </h5>
                        </div>

                        <div>
                            <div style="display:flex;justify-content:center">
                                <select onchange="classChoiceSelect()" class="form-select" style="width: 250px;"
                                    name="Mois" id="classchoice">
                                    <option value="Choose_a_class">Choose_a_class</option>
                                    <option value="6èmeA">6èmeA</option>
                                    <option value="6èmeB">6èmeB</option>
                                    <option value="5èmeA">5èmeA</option>
                                    <option value="5èmeB">5èmeB</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <!-- Choosing the semestre -->
                    <div>
                        <div style="display:flex;justify-content:center">
                            <h5> Choose the semestre : </h5>
                        </div>
                        <div>
                            <div style="display:flex;justify-content:center">
                                <select onchange="SemestreChoiceSelect()" class="form-select" style="width: 250px;"
                                    name="Mois" id="semestre">
                                    <option value="Choose_a_semestre">Choose_a_semestre</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>



                <div style="display:flex;justify-content:center">
                    <div style="background: white;width:80%;margin:20px;padding:20px;border-radius:25px;"
                        id="GradesTable">

                    </div>


                </div>
            </div>
        </div>




</body>

</html>