<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student | Absence</title>
        
        <?php
            include("../../../links.php");
            session_start();
        

            


            $PageTitle = "Absence";


            $loggedInPhotoUrl = $_SESSION['Photo'];

            $bellIcon = "../../../Ressorces/images/bell.png";
            $LogOutIcon = "../../../Ressorces/images/logout.png";


            $loggedInPhoto = "../../../Ressorces/images/photosElèves/";
            $loggedInPhoto .= $loggedInPhotoUrl;

            

        ?>

        <!-- General Client style -->
            <link rel="stylesheet" href="../clientGeneralStyle.Css">
        <!-- General Client style -->


        <!-- General Client scipt JS -->
            <script src="../clientGeneralScriptJs.js" > </script>
        <!-- General Client scipt JS -->


        <!-- clientAbsencePageJS link -->
            <script src="./clientAbsencePageJS.js"> </script>
        <!--//clientAbsencePageJs link -->




        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
    </head>

    <body onload="gettingPupilAbsence()">
    <input style="display: none;" id="hiddenPupilId" value=<?php echo($_SESSION['id']) ?>  >
        <section>
            <div style="display:flex;" class=".container-fluid  min-vh-100  ">
                
                <!-- SideBar element -->
                    <div style="width:20%;" id="sideBarWidth" class="  greenBg   align-items-center">

                        <div class="text-center mt-3 mb-4">
                            <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                            <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                        </div>


                        <div style="margin-left:20px;margin-top:80px">
                            <?php include "./clientSideBarAbsencePage.php"; ?>
                        </div>
                    </div>
                <!-- //SideBar element -->



                <!-- Main page container -->
                    <div style="width:100%; " class=" LightGreeishBg ">
                        <!-- First line menu container -->
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
                                                        <a href="../../../logOut.php"> <img style="width:22px;height:22px;"
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
                                                    <h5 style="font-size: 14px; padding-top:10px; "> <?php echo($_SESSION['Prénom']." ".$_SESSION['Nom']) ?> </h5>
                                                </div>
                                                <div style=" margin-top:-12px;">
                                                    <span style="font-size: 12px;"> Pupil </span>
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
                        <!-- //First line menu container -->


                        <!-- Main Page element -->
                            <div >
                                <div style="display: flex;justify-content:center;margin-top:25px;margin-bottom:25px;">
                                    <h2> Absence list </h2>
                                </div>
                                <div>

                                <div style="display: flex;justify-content:center;">
                                    <div style="width:20%;background:whitesmoke;padding-top:25px;padding-bottom:15px;border-radius:19px">
                                        <div style="display: flex;justify-content: center;" >
                                            <div id="PupilAbsenceList" >
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                        <!-- //Main Page element -->

                    </div>
                <!-- //Main page container -->

            </div>
        </section>
    </body>




</html>