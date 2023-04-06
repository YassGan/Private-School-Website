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

        .infoSTYLE {
            font-weight: 400;
        }
    </style>



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
</head>

<body>


















    <div>
        <div style="display:flex;" class=".container-fluid  min-vh-100  ">
            <div style="width:20%;" id="sideBarWidth" class="  greenBg   align-items-center">

                <div class="text-center mt-3 mb-4">
                    <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                    <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                </div>


                <div style="margin-left:20px;">
                    <?php include "../../adminSideBar.php"; ?>
                </div>
            </div>


            <div style="width:100%; " class=" LightGreeishBg ">


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


                        <div>


                            <div style="padding-right: 10px;">
                                <div class="notifIcon">
                                    <div style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:white;">
                                        <a href="../logOut.php"> <img style="width:22px;height:22px;" src=<?php echo $LogOutIcon; ?> /> </a>
                                        <h4 style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
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
                                <div style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; ">
                                    <img style="width:40px;height:40px;border-radius:20px;" src=<?php echo $loggedInPhoto; ?> />


                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- //Logged In user info  -->







                </div>

                <div>
                    <div style="padding-top: 40px;background:#6bb7a4">

                        <div style="display: flex;">

                            <div style="height:520px;width:30%;border:1px solid black ;overflow:auto">
                                <div style="padding-top:20px;padding-left:40px;" class="MessagesDiscussion">
                                    <div>
                                        <h3> Discussion </h3>
                                    </div>
                                </div>

                                <div class="MessagesContainer">
                                    <div class="MessageElementContainer">
                                        <div style="padding-left:10px;border:1px solid;display: flex;align-items:center;">
                                            <div class="imgContainer">
                                                <img style="width: 67px;height:67px;border-radius: 50%;" src="../../../Ressorces/images/photosElèves/ayarifaten.png">
                                            </div>
                                            <div>
                                                <div style="margin-left:20px;margin-top:10px;background: #9fcdc1;">
                                                    <h4> Ayari Faten </h4>
                                                    <h6 style="max-width:270px;max-height:100px;">
                                                        Bonjour madame, est il
                                                        possible lkjlkj

                                                    </h6>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                    <div class="MessageElementContainer">
                                        <div style="padding-left:10px;border:1px solid;display: flex;align-items:center;">
                                            <div class="imgContainer">
                                                <img style="width: 67px;height:67px;border-radius: 50%;" src="../../../Ressorces/images/photosElèves/ayarifaten.png">
                                            </div>
                                            <div>
                                                <div style="margin-left:20px;margin-top:10px;background: #9fcdc1;">
                                                    <h4> Ayari Faten </h4>
                                                    <h6 style="max-width:270px;max-height:100px;">
                                                        Bonjour madame, est il
                                                        possible lkjlkj

                                                    </h6>
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                    <div class="MessageElementContainer">
                                        <div style="padding-left:10px;border:1px solid;display: flex;align-items:center;">
                                            <div class="imgContainer">
                                                <img style="width: 67px;height:67px;border-radius: 50%;" src="../../../Ressorces/images/photosElèves/ayarifaten.png">
                                            </div>
                                            <div>
                                                <div style="margin-left:20px;margin-top:10px;background: #9fcdc1;">
                                                    <h4> Ayari Faten </h4>
                                                    <h6 style="max-width:270px;max-height:100px;">
                                                        Bonjour madame, est il
                                                        possible lkjlkj

                                                    </h6>
                                                </div>

                                            </div>

                                        </div>
                                    </div>



                                </div>


                            </div>

                            <div style="width:70%;background: green;padding-top:40px;">
                                <div>
                                    <div class="messageLine" style="display:flex;justify-content:start;padding-left:23px;padding-right:23px; ">
                                        <div style="border:1px solid black">
                                            <div style="max-width:340px; display:flex;background:bisque">
                                                <div style="display: flex;justify-content:center;margin-left:10px;align-items:center">
                                                    <img style="width:50px;height:50px; border-radius:50%" src="../../../Ressorces/images/photosElèves/ayarifaten.png">
                                                </div>


                                                <div style=" background: #dbeae6;display:flex;align-items:center; font-size:12px;margin-left:10px;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;background:rebeccapurple;border-radius:15px;">
                                                    <div>

                                                        <h4 style="font-size:15px; ">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Duis
                                                            auctor neque at mauris tincidunt, vel pulvinar velit
                                                            vestibulum.
                                                            Donec congue est quis elit finibus auctor. Nullam vitae
                                                            risus at
                                                            risus pharetra laoreet non sed orci. Pellentes
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DateandTimeContainer" style="display:flex; justify-content:end;padding-right:10px;">
                                                <div>
                                                    <span>
                                                        21:25
                                                    </span>
                                                </div>
                                                <div style="padding-left: 20px;">
                                                    <span>
                                                        10/03/2020
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="messageLine" style="display:flex;justify-content:end;padding-left:23px;padding-right:23px;">
                                        <div style="border:1px solid black">
                                            <div style="max-width:340px; display:flex;background:bisque">
                                                <div style="display: flex;justify-content:center;margin-left:10px;align-items:center">
                                                    <img style="width:50px;height:50px; border-radius:50%" src="../../../Ressorces/images/photosElèves/ayarifaten.png">
                                                </div>


                                                <div style=" background: #dbeae6;display:flex;align-items:center; font-size:12px;margin-left:10px;padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;background:rebeccapurple;border-radius:15px;">
                                                    <div>

                                                        <h4 style="font-size:15px; ">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Duis
                                                            auctor neque at mauris tincidunt, vel pulvinar velit
                                                            vestibulum.
                                                            Donec congue est quis elit finibus auctor. Nullam vitae
                                                            risus at
                                                            risus pharetra laoreet non sed orci. Pellentes
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="DateandTimeContainer" style="display:flex; justify-content:end;padding-right:10px;">
                                                <div>
                                                    <span>
                                                        21:25
                                                    </span>
                                                </div>
                                                <div style="padding-left: 20px;">
                                                    <span>
                                                        10/03/2020
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="padding-top:70px;background: red;">
                                        <div style="width: 400px;">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>

                                </div>




                            </div>

                        </div>
                    </div>
                </div>

</body>


<script>
    var sideBarTest = 1

    function ThreeBarsClick() {
        sideBarTest++;

        if (sideBarTest % 2 == 0) {
            document.getElementById("sideBarWidth").style.width = "0%";
        }
        if (sideBarTest % 2 != 0) {
            document.getElementById("sideBarWidth").style.width = "18%";
        }
    }
</script>

</html>