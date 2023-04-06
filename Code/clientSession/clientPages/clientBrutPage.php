<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php
            include("../../../links.php");

            $PageTitle = "BrutPage";


            $loggedInPhotoUrl = 'adminPhoto.png';

            $bellIcon = "../../../Ressorces/images/bell.png";
            $LogOutIcon = "../../../Ressorces/images/logout.png";


            $loggedInPhoto = "../../../Ressorces/images/";
            $loggedInPhoto .= $loggedInPhotoUrl;

        ?>


        <!-- General Client style -->
            <link rel="stylesheet" href="../../clientGeneralStyle.Css">
        <!-- General Client style -->


        <!-- General Client scipt JS -->
            <script src="../../clientGeneralScriptJs.js" > </script>
        <!-- General Client scipt JS -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
    </head>


    <body>
        <section>
            <div style="display:flex;" class=".container-fluid  min-vh-100  ">
                
                <!-- SideBar element -->
                    <div style="width:20%;" id="sideBarWidth" class="  greenBg   align-items-center">

                        <div class="text-center mt-3 mb-4">
                            <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                            <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                        </div>


                        <div style="margin-left:20px;margin-top:80px">
                            <?php include "../clientSideBar.php"; ?>
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
                        <!-- //First line menu container -->

                    </div>
                <!-- //Main page container -->

            </div>
        </section>
    </body>




</html>