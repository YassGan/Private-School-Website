<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student | Paiment</title>
        <?php
            include("../../../links.php");

            session_start();


            $PageTitle = "Paiment";


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

        <!-- ClientPaimentPage Script -->
            <script src="./clientPaimentPageJs.js" > </script>
        <!-- // ClientPaimentPage script-->



        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
    </head>


    <body onload="pupilPaimentMonths()">
        <input style="display:none" id="PupilIdInput" value=<?php echo($_SESSION['id']) ?> > 
        <section>
            <div style="display:flex;" class=".container-fluid  min-vh-100  ">
                
                <!-- SideBar element -->
                    <div style="width:20%;" id="sideBarWidth" class="  greenBg   align-items-center">

                        <div class="text-center mt-3 mb-4">
                            <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                            <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                        </div>


                        <div style="margin-left:20px;margin-top:80px">
                            <?php include "./clientSideBarPaimentPage.php"; ?>
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

                        <!-- Main body element -->
                      
                        <div style="margin-bottom:-40px;margin-top:30px;display:flex;justify-content:center">
                            <h3>    Paiment card </h3>
                        </div>
                
                            <div style="margin-top:50px;display: flex;justify-content:center">
                             
                                <div style="border-radius:19px;width:90%;background:#1c8a67;margin-top:50px;padding-top:20px;padding-bottom:20px;">
                                        <div> 
                                            <div style="display: flex;justify-content:center">
                                                <div style="width:90%;display: flex; justify-content:space-around;">
                                                   <!-- September -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="septemberMonth" style="padding-left:8px;padding-top:7px"> September </h6>
                                                        <div>
                                                            <h6 id="SeptemberPaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="SeptemberPaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>

                                                        </div>
                                                    </div>

                                                    <!-- Ocotber -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="octoberMonth" style="padding-left:8px;padding-top:7px"> Ocotber </h6>
                                                        <div>
                                                            <h6 id="OcotberPaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="OcotberPaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>
                                                        </div>
                                                    </div>



                                                    <!-- November -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="novemberMonth"  style="padding-left:8px;padding-top:7px"> November </h6>
                                                       <div>
                                                            <h6 id="NovemberPaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="NovemberPaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>
                                                        </div>
                                                    </div>

                                                    <!-- December -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="januaryMonth" style="padding-left:8px;padding-top:7px"> December </h6>
                                                        <div>
                                                            <h6 id="DecemberPaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="DecemberPaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>
                                                        </div>
                                                    </div>



                                                    <!-- January -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="januaryMonth" style="padding-left:8px;padding-top:7px"> January </h6>
                                                        <div>
                                                            <h6 id="JanuaryPaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="JanuaryPaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div style="padding-top:40px;display: flex;justify-content:center">
                                                <div style="width:90%;display: flex; justify-content:space-around;">
                                                
                                                    <!-- February -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="februaryMonth" style="padding-left:8px;padding-top:7px"> February </h6>
                                                        <div>
                                                            <h6 id="FebruaryPaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="FebruaryPaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- March -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="marchMonth" style="padding-left:8px;padding-top:7px"> March </h6>
                                                        <div>
                                                            <h6 id="MarchPaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="MarchPaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>
                                                        </div>
                                                    </div>


                                                    <!-- April -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="aprilMonth" style="padding-left:8px;padding-top:7px"> April </h6>
                                                        <div>
                                                            <h6 id="AprilPaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="AprilPaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>
                                                        </div>
                                                    </div>


                                                    <!-- May -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="mayMonth" style="padding-left:8px;padding-top:7px"> May </h6>
                                                        <div>
                                                            <h6 id="MayPaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="MayPaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>
                                                        </div>
                                                    </div>


                                                    <!-- June -->
                                                    <div style="border-radius:17px;background: whitesmoke;width:170px;height:100px;">
                                                        <h6 id="juneMonth" style="padding-left:8px;padding-top:7px"> June </h6>
                                                        <div>
                                                            <h6 id="JunePaimentStatue" style="color:gray;padding-left:8px;padding-top:7px"> Pas encore </h6>
                                                            <h6 id="JunePaimentDate" style="margin-top:-10px;color:green;padding-left:8px;padding-top:7px"> </h6>
                                                        </div>
                                                    </div>

                                                 
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <!-- //Main body element -->


                    </div>
                <!-- //Main page container -->
            </div>
        </section>
    </body>

</html>