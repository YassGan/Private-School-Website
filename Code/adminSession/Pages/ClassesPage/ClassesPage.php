<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Classes</title>


        <?php
            include("../../../links.php");

            $PageTitle = "Classes";


            $loggedInPhotoUrl = 'adminPhoto.png';

            $bellIcon = "../../../Ressorces/images/bell.png";
            $LogOutIcon = "../../../Ressorces/images/logout.png";

            $loggedInPhoto = "../../../Ressorces/images/";
            $loggedInPhoto .= $loggedInPhotoUrl;


            $i = 0;
            $nbClasse = 3;
        ?>

    
        <!-- ClassesPage style file link -->
            <link rel="stylesheet" href="./ClassesPageStyle.css" >
        <!-- //ClassesPage style file link -->

        <!-- ClassesPage Script Js file link -->
            <script src="./ClassesPageScriptJS.js"> </script>
        <!-- //ClassesPage Script Js file link -->


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">


    </head>

    <body>

        <!-- All popUPs -->
            <section>
                <!-- successful operation PopUP  -->
                    <div class="modal fade" id="successfulOperation" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Success</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Operation treated with success
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- successful operation PopUP  -->



                <!-- Update class Modal -->
                    <div class="modal fade  modal-xl" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog " style="max-width: 65%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="">Update a class</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div style="display:flex;justify-content:space-around;">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Enter the level of the class</label>
                                            <select aria-label="Default select example" class="form-control" id="UpdatelevelId"
                                                form="carform">
                                                <option selected>Choose the class level</option>
                                                <option value="1">1st Year</option>
                                                <option value="2">2nd Year</option>
                                                <option value="3">3rd Year</option>
                                                <option value="4">4rth Year</option>
                                                <option value="5">5th Year</option>
                                                <option value="6">6th Year</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Number of Pupils</label>

                                                <input style="width:150px" type="text" class="form-control" id="UpdatePupilNumber"
                                                    aria-describedby="emailHelp">

                                            </div>
                                        </div>


                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Enter the classification of the
                                                class</label>
                                            <select aria-label="Default select example" name="classClassification" class="form-control"
                                                id="UpdateClassClassification" form="carform">
                                                <option selected>Choose the class level</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div style="display: flex; justify-content:space-between">

                                        <div style="display:block;justify-content:space-around;">

                                            <div class="mt-4 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Enter the teacher of Science</label>
                                                <select style="width: 240px;" aria-label="Default select example"
                                                    name="UpdateScienceTeacher" class="form-control" id="UpdateScienceTeacher"
                                                    form="carform">
                                                    <option selected>Choose the teacher of Science</option>
                                                    <option value="GanaSami">Mr Gana Sami</option>
                                                    <option value="SadekGahbich">Mr Sadek Gahbich</option>
                                                    <option value="FathiaBourayes">Mme Fathia Bourayes</option>
                                                    <option value="AliyaKader">Mme Aliya Kader</option>
                                                </select>
                                            </div>

                                            <div class="mt-4 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Enter the teacher of French</label>
                                                <select style="width: 240px;" aria-label="Default select example"
                                                    name="UpdateFrenchTeacher" class="form-control" id="UpdateFrenchTeacher"
                                                    form="carform">
                                                    <option selected>Choose the teacher of French</option>
                                                    <option value="GanaSami">Mr Gana Sami</option>
                                                    <option value="SadekGahbich">Mr Sadek Gahbich</option>
                                                    <option value="FathiaBourayes">Mme Fathia Bourayes</option>
                                                    <option value="AliyaKader">Mme Aliya Kader</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div style="display:block;justify-content:space-around;">

                                            <div class="mt-4 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Enter the teacher of Arabic</label>
                                                <select style="width: 240px;" aria-label="Default select example"
                                                    name="UpdateArabicTeacher" class="form-control" id="UpdateArabicTeacher"
                                                    form="carform">
                                                    <option selected>Choose the teacher of Arabic</option>
                                                    <option value="GanaSami">Mr Gana Sami</option>
                                                    <option value="SadekGahbich">Mr Sadek Gahbich</option>
                                                    <option value="FathiaBourayes">Mme Fathia Bourayes</option>
                                                    <option value="AliyaKader">Mme Aliya Kader</option>
                                                </select>
                                            </div>

                                            <div class="mt-4 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Enter the teacher of English</label>
                                                <select style="width: 240px;" aria-label="Default select example"
                                                    name="UpdateEnglishTeacher" class="form-control" id="UpdateEnglishTeacher"
                                                    form="carform">
                                                    <option selected>Choose the teacher of English</option>
                                                    <option value="GanaSami">Mr Gana Sami</option>
                                                    <option value="SadekGahbich">Mr Sadek Gahbich</option>
                                                    <option value="FathiaBourayes">Mme Fathia Bourayes</option>
                                                    <option value="AliyaKader">Mme Aliya Kader</option>
                                                </select>
                                            </div>



                                        </div>


                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <button onclick="updateClass()" type="button" class="btn btn-success">Update</button>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- // Update class Modal -->



                <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure that you want to delete this class
                                        ?
                                    </h1>
                                </div>
                                <div class="modal-footer">
                                    <button onclick="confirmDelete()" type="button" class="btn btn-danger">Yes</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- // Delete Modal -->



                <!-- Pupils list Modal -->
                    <div class="modal fade  modal-xl" id="pupilsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog " style="max-width: 95%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="pupilsModalContainer">


                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- // Pupils Modal -->



                <!-- Add class Modal -->
                    <div class="modal fade  modal-xl" id="AddClassModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog " style="max-width: 65%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="">Add new class</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div style="display:flex;justify-content:space-around;">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Enter the level of the class</label>
                                            <select aria-label="Default select example" class="form-control" id="levelId"
                                                form="carform">
                                                <option selected>Choose the class level</option>
                                                <option value="1">1st Year</option>
                                                <option value="2">2nd Year</option>
                                                <option value="3">3rd Year</option>
                                                <option value="4">4rth Year</option>
                                                <option value="5">5th Year</option>
                                                <option value="6">6th Year</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Number of Pupils</label>

                                                <input style="width:150px" type="text" class="form-control" id="PupilNumber"
                                                    aria-describedby="emailHelp">

                                            </div>
                                        </div>


                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Enter the classification of the
                                                class</label>
                                            <select aria-label="Default select example" name="classClassification" class="form-control"
                                                id="ClassClassification" form="carform">
                                                <option selected>Choose the class level</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div style="display: flex; justify-content:space-between">

                                        <div style="display:block;justify-content:space-around;">

                                            <div class="mt-4 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Enter the teacher of Science</label>
                                                <select style="width: 240px;" aria-label="Default select example" name="ScienceTeacher"
                                                    class="form-control" id="ScienceTeacher" form="carform">
                                                    <option selected>Choose the teacher of Science</option>
                                                    <option value="GanaSami">Mr Gana Sami</option>
                                                    <option value="SadekGahbich">Mr Sadek Gahbich</option>
                                                    <option value="FathiaBourayes">Mme Fathia Bourayes</option>
                                                    <option value="AliyaKader">Mme Aliya Kader</option>
                                                </select>
                                            </div>

                                            <div class="mt-4 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Enter the teacher of French</label>
                                                <select style="width: 240px;" aria-label="Default select example" name="FrenchTeacher"
                                                    class="form-control" id="FrenchTeacher" form="carform">
                                                    <option selected>Choose the teacher of French</option>
                                                    <option value="GanaSami">Mr Gana Sami</option>
                                                    <option value="SadekGahbich">Mr Sadek Gahbich</option>
                                                    <option value="FathiaBourayes">Mme Fathia Bourayes</option>
                                                    <option value="AliyaKader">Mme Aliya Kader</option>
                                                </select>
                                            </div>



                                        </div>

                                        <div style="display:block;justify-content:space-around;">

                                            <div class="mt-4 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Enter the teacher of Arabic</label>
                                                <select style="width: 240px;" aria-label="Default select example" name="ArabicTeacher"
                                                    class="form-control" id="ArabicTeacher" form="carform">
                                                    <option selected>Choose the teacher of Arabic</option>
                                                    <option value="GanaSami">Mr Gana Sami</option>
                                                    <option value="SadekGahbich">Mr Sadek Gahbich</option>
                                                    <option value="FathiaBourayes">Mme Fathia Bourayes</option>
                                                    <option value="AliyaKader">Mme Aliya Kader</option>
                                                </select>
                                            </div>

                                            <div class="mt-4 mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Enter the teacher of English</label>
                                                <select style="width: 240px;" aria-label="Default select example" name="EnglishTeacher"
                                                    class="form-control" id="EnglishTeacher" form="carform">
                                                    <option selected>Choose the teacher of English</option>
                                                    <option value="GanaSami">Mr Gana Sami</option>
                                                    <option value="SadekGahbich">Mr Sadek Gahbich</option>
                                                    <option value="FathiaBourayes">Mme Fathia Bourayes</option>
                                                    <option value="AliyaKader">Mme Aliya Kader</option>
                                                </select>
                                            </div>



                                        </div>


                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <button onclick="AddingClass()" type="button" class="btn btn-success">Add new</button>

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- // Add class Modal -->

            </section>
        <!-- //All popUPs -->


        <!-- Page Contaienr Sidebar and the main element -->
                <section style="display:flex;" class=".container-fluid  min-vh-100  ">
                    <!-- SideBar element  -->
                        <div style="width:20%;" id="sideBarWidth" class="  greenBg   align-items-center">
                            <div class="text-center mt-3 mb-4">
                                <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                                <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                            </div>

                            <div style="margin-left:20px;">
                                <?php include "./adminSideBar.php"; ?>
                            </div>
                        </div>
                    <!--// SideBar element  -->


                    <!-- Main Body Container  -->
                        <div style="width:100%; " class=" LightGreeishBg ">
                                <!-- First line Container (Page Menu) -->
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
                                                        <div style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:white; ">
                                                            <img style="width:22px;height:22px;" src=<?php echo $bellIcon; ?> />
                                                            <h4 style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;"> . </h4>
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
                                <!-- // First line Container (Page Menu) -->

                                <!-- Add new class button -->
                                    <div style="padding-left:40px;padding-top:40px;">
                                        <div class="" >
                                            <button class="btn btn-success">
                                                <div onclick="addNewClassButton()" >
                                                    <h5 style=" font-size:14px;">Add New Class </h5>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                <!-- //Add new class button -->

                                <!-- All Classes container -->
                                    <div style="padding-top:10px;padding-bottom:10px; display:flex;justify-content:center;">
                                        <!-- Classes container -->
                                            <div id="ClassesContainer" style="width:94%;display:flex;justify-content:center;align-items:center;">    </div>
                                        <!-- //Classes container -->

                                        <!-- Pupils's list when popUp is launched container -->
                                            <div id="pupilsContainer">   </div>
                                        <!-- //Pupils's list when popUp is launched container -->
                                    </div>
                                <!-- //All Classes container -->
                        </div>
                    <!-- //Main Body Container  -->
                </section>
        <!-- //Page Contaienr Sidebar and the main element -->

    </body>
</html>