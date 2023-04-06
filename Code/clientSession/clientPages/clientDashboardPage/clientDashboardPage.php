<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student | Dashboard</title>
      
      
        <?php
            include("../../../links.php");
            session_start();
            if (!isset($_SESSION['email'])) {
                header('location:login.php');
            }
            
            $PupilInfoArray=[];
            $m=0;
            foreach ($_SESSION['PupilInfo'] as $elem) {
                $PupilInfoArray[$m]= $elem;
               
                $m++;

            }

            $_SESSION['id']=$PupilInfoArray[0];

            $_SESSION['Nom']=$PupilInfoArray[1];
            $_SESSION['Prénom']=$PupilInfoArray[2];


            $_SESSION['Photo']=$PupilInfoArray[19];



            
          

            
            json_encode($PupilInfoArray);

            $PageTitle = "Dashboard";


            $loggedInPhotoUrl = $_SESSION['Photo'];

            $bellIcon = "../../../Ressorces/images/bell.png";
            $LogOutIcon = "../../../Ressorces/images/logout.png";


            $loggedInPhoto = "../../../Ressorces/images/photosElèves/";
            $loggedInPhoto .= $loggedInPhotoUrl;
        ?>


        <!-- General Client style -->
            <link rel="stylesheet" href="../clientGeneralStyle.Css">
        <!-- General Client style -->

        <!-- General Client style -->
            <link rel="stylesheet" href="../clientGeneralStyle.css">
        <!-- General Client style -->

        <!-- General Client style -->
            <link rel="stylesheet" href="./clientDashboardPageStyleCSS.css">
        <!-- General Client style -->


        <!-- General Client scipt JS -->
            <script src="../clientGeneralScriptJs.js" > </script>
        <!-- General Client scipt JS -->


        <!-- dashboard client Script js link -->
            <script src="./clientDashboardPageScriptJS.js"> </script>
        <!-- //dashboard client Script js link -->



        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
    </head>


    <body>



    <!-- All popUps -->
            <!-- Modifying the profile photo -->
                <div class="modal fade" id="ProfilePhotoUpdatePopUP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update profile photo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div style="display: flex; justify-content:space-around" >
                                <div>
                                    <img style="width:150px;height:150px;border-radius;50%" src=<?php echo($loggedInPhoto) ?> alt="">
                                </div>

                                <div style="width:250px">
                                    <h5> Do you want to update the profile photo ? </h5>

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="file" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    </div>
                    </div>
                </div>
                </div>
            <!-- //Modifying the profile photo -->
            




    <!-- //All popUps -->


        <section>
            
            <div style="display:flex;" class=".container-fluid  min-vh-100  ">
                
                <!-- SideBar element -->
                    <div style="width:20%;" id="sideBarWidth" class="  greenBg   align-items-center">

                        <div class="text-center mt-3 mb-4">
                            <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                            <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                        </div>


                        <div style="margin-left:20px;margin-top:80px">
                            <?php include "./clientSideBarDashboardPage.php"; ?>
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
                                                    <h5 style="font-size: 14px; padding-top:10px; "> <?php echo($PupilInfoArray[2]." ".$PupilInfoArray[1]) ?> </h5>
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

                        <!-- General Information  -->
                            <div style="padding-left:4%;padding-right:4%; margin-top:150px">
                                <div style="padding-left:2%;background:#1c8a67;padding-right:2%;padding-top:10px;padding-bottom:20px;border-radius:19px">
                                    <div>
                                        <h4> General Information :</h4>
                                    </div>
                                  
                                <div style="display:flex;justify-content:center">
                                    <div style="padding-left:7px;padding-top:10px;padding-right:7px;padding-bottom:8px;border-radius:18px;background:#ffffff;width:98%; display:flex;justify-content:space-between">
                                        <div>
                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> First, second Name: </h4>
                                                        <h4 class="GeneralInfoResponse"> <?php echo($PupilInfoArray[1]." ".$PupilInfoArray[2]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->

                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Email: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[18]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->

                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Nationalité: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[17]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->

                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Sex: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[3]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->

                                            <!-- Info Element -->
                                                       <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Date of birth: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[4]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->  
                                            
                                            <!-- Info Element -->
                                                     <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Mother's phone: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[15]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->  
                                        </div>


                                        <div>  
                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Class: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[6]."ème".$PupilInfoArray[7]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->  

                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Address: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[8]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->  

                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Father's name: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[9]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element --> 

                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Father's profession: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[10]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->  

                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Father's email: </h4>
                                                        <h4 class="GeneralInfoResponse"> <?php echo($PupilInfoArray[12]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element --> 

                                            <!-- Info Element -->
                                                 <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Father's phone: </h4>
                                                        <h4 class="GeneralInfoResponse"> <?php echo($PupilInfoArray[11]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element --> 
                                        </div>


                                        <div>
                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Mother's name: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[13]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->  

                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Mother's profession: </h4>
                                                        <h4 class="GeneralInfoResponse">  <?php echo($PupilInfoArray[14]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->   

                                            <!-- Info Element -->
                                                <div>
                                                    <div style="display:flex">
                                                        <h4 class="GeneralInfoRequest"> Mother's email: </h4>
                                                        <h4 class="GeneralInfoResponse"> <?php echo($PupilInfoArray[16]); ?> </h4>
                                                    </div>
                                                </div>
                                            <!-- //Info Element -->  

                                            <!-- Info Element -->
                                              <div>
                                                    <div style="display: flex; justify-content:center">
                                                        <div>
                                                            <img style="width:90px;height:90px;border-radius:50%" class="GeneralInfoResponse" src= <?php echo($loggedInPhoto); ?>> </img>
                                                        </div>
                                                    </div>
                                                    <div style="display: flex;justify-content:center;padding-top:10px">
                                                        <button onclick="ModifyProfilePhotoClick()" class="btn btn-success"> Modify </button>
                                                    </div>
                                              </div>
                                            <!-- //Info Element -->  
                                        </div>  
                                        
                              
                                    </div>
                                </div>

                                </div>
                            </div>

                        <!-- //General Information  -->

                        <!--     
                            <div style="padding-left:4%;padding-right:4%; margin-top:50px">
                                <div style="padding-left:2%;background:#1c8a67;padding-right:2%;padding-top:10px;padding-bottom:20px;border-radius:19px">
                                    <h4> Latest Activities </h4>
                                    <div style="padding-left:7px;padding-top:10px;padding-right:7px;padding-bottom:8px;border-radius:18px;background:#ffffff;width:98%;justify-content:space-between">
                                        <div style="display:flex"> 
                                            <span  style="padding-left:7px;padding-right:7px;margin-right:7px;background:#0a58ca; border-radius:25px;color:white;display:flex;justify-content:center;align-items:center"> New </span>
                                            <span>Today, Gana Mouhib was absent </span>
                                        </div>
                                        <div style="display:flex;margin-top:10px"> 
                                            <span  style="padding-left:7px;padding-right:7px;margin-right:7px;background:#0a58ca; border-radius:25px;color:white;display:flex;justify-content:center;align-items:center"> New </span>
                                            <span>Today, Gana Mouhib was absent </span>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        -->

                    </div>
                <!-- //Main page container -->

            </div>
        </section>
    </body>


    <script>


var jsArray = <?php echo json_encode($PupilInfoArray); ?>;
console.log(jsArray);        

</script>




</html>