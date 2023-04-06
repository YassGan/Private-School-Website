<!DOCTYPE html>
<html lang="en">

<head>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php
    include("../../../links.php");
    // The links.php file contains all the links from the internet like bootstrap, font awesome etc ...
    $AdminDashboardFileLink="../../../Ressorces/images/";

   
   ?>

    <!-- These links are for the vintage font style for the school name -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
    <!-- //These links are for the vintage font style for the school name -->


    <!-- adminDashboard Style link -->
<link rel="stylesheet" href="./adminDashboardCSS.css">

    <!-- //adminDashboard Style link -->


    <!-- adminDashboardScriptJS link -->
        <script src="adminDashboardScriptJs.js">    </script>
    <!-- //adminDashboardScriptJS link -->


    <style>


*{
    margin: 0;
    padding: 0;
}

body{

    background: rgb(31,153,114);
background: linear-gradient(86deg, rgba(31,153,114,1) 0%, rgba(55,69,64,1) 100%);

}


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





</head>

<body>


<!-- PopUps -->
    <!-- PopUp modal d'ajout d'un evenement au calendrier -->
    <div class="modal fade" id="EventPopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add an event</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div>
                            <label> Add the title of the event briefly : </label>
                        </div>
                        <div>
                            <div style="margin-top:10px;">
                                <input id="EventTitle" type="text" class="form-control" placeholder="Event title"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <span id="titleError" style="display:none;padding-left:7px;color:red;"> The title input is
                                empty </span>

                        </div>

                        <div class="input-group mb-3" style="margin-top:30px;">
                            <div>
                                <label> Add event date : </label>
                                <div style="margin-top:10px;">
                                    <div>
                                        <input id="dateEvent" type="date" class="form-control" placeholder="Username"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <span id="dateError" style="display:none;padding-left:7px;color:red;"> The date input is
                                    empty
                                </span>
                            </div>
                        </div>
                        <div class="input-group mb-3" style="margin-top:30px;">
                            <div>
                                <label> Choisir une couleur : </label>
                                <div style="width:450px;">
                                    <div style="display:flex;justify-content:space-between;align-items:center;">
                                        <div onclick="document.getElementById('col1').checked = true;">
                                            <div style="display: flex;align-items:center;">
                                                <input value="" id="col1" style="border: 1px solid black;"
                                                    class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <div
                                                    style="margin-left:10px;width:40px;height:40px;border-radius:50%;background:#5f9986;">
                                                </div>
                                            </div>
                                        </div>

                                        <div onclick="document.getElementById('col2').checked = true;">
                                            <div style="display: flex;align-items:center;">
                                                <input value="" id="col2" style="border: 1px solid black;"
                                                    class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <div
                                                    style="margin-left:10px;width:40px;height:40px;border-radius:50%;background:#cebdae;">
                                                </div>
                                            </div>
                                        </div>

                                        <div onclick="document.getElementById('col3').checked = true;">
                                            <div style="display: flex;align-items:center;">
                                                <input value="" id="col3" style="border: 1px solid black;"
                                                    class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <div
                                                    style="margin-left:10px;width:40px;height:40px;border-radius:50%;background:#d6ece6;">
                                                </div>
                                            </div>
                                        </div>

                                        <div onclick="document.getElementById('col4').checked = true;">
                                            <div style="display: flex;align-items:center;">
                                                <input id="col4" style="border: 1px solid black;"
                                                    class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <div
                                                    style="margin-left:10px;width:40px;height:40px;border-radius:50%;background:#1f9972;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="colorError" style="display:none;padding-top:10px">
                                    <span style="padding-left:7px;color:red;"> The color
                                        input is empty
                                    </span>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="addEvent();" type="button" class="btn btn-success">Add</button>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //PopUp modal d'ajout d'un evenement au calendrier -->
<!-- //PopUps -->




    <!-- Main container that contains the blocks that are appearing when the page loads -->
        <section style="display:flex;" class=".container-fluid  min-vh-100  ">
            <!-- Sidebar bloc -->
                <div style="width:25%;" id="sideBarWidth" class="  greenBg   align-items-center">
                    <!-- Logo -->
                        <div class="text-center mt-3 mb-4">

                        <img class="LogoSize" src= <?php echo ($AdminDashboardFileLink."logoRousseau.png"); ?>  >
                            <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Rousseau </h5>
                        </div>
                    <!-- //Logo -->

                    <!-- SideBar menu -->
                        <div style="margin-left:20px;">
                            <?php include "./adminSideBar.php"; ?>
                        </div>
                    <!-- //SideBar menu -->
                </div>
            <!-- //Sidebar bloc -->

            <!-- The block on the middle -->
                <div style="width:100%; " class=" LightGreeishBg ">

                    
                <!-- PageTilte, input search element container (First bloc the one on the top of the section on the middle) -->
                    <div style="width:auto; " class=" d-flex align-items-center justify-content-between  pt-3">
                        <!-- Page Title -->
                        <div style="display:flex; width:250px;" class="  ">
                            <div onclick="ThreeBarsClick()" class="ThreeButtonsDashboard" style=" ">
                                <img class="ThreeButtonsDashboardElement" style="width:25px;height:30px;"
                                src= <?php echo ($AdminDashboardFileLink."menu.png"); ?>  >
                            </div>
                            <h4 style="margin-left:10px;" class=""> <?php echo "Dashboard"; ?> </h4>
                        </div>
                        <!-- //Page Title -->


                        <!-- Input Search element -->
                        <div style="width:auto; height:60px;" class="d-flex align-items-center pt-3  ">
                            <div style="margin-right:37px;" class=" input-group mb-3 ">
                                <span style="border-radius: 20px 0px 0px 20px;" class="input-group-text"
                                    id="basic-addon1"><i class="fas fa-search"></i></span>

                                <input style="border-radius: 0px 20px 20px 0px;" type="text" class="form-control"
                                    placeholder="Search here ..." aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <!-- //Input Search element -->
                    </div>
                <!-- //PageTilte, input search element container (First bloc the one on the top of the section on the middle) -->


                    <div style=" width:auto; height:200px; padding-left:4%;padding-right:4%; padding-top:3%; " class="  ">
                
                        <!-- Teachers, Pupils, Classes, and unread messages Bloc -->    
                            <div style="margin-bottom:40px;">
                                <div class="bg-light d-flex justify-content-around" style="padding-top:30px;padding-bottom:30px;border-radius:20px;">
                                    <!-- Link element to the Teachers -->
                                    <div>
                                        <div class="ReferenceElem d-flex">
                                            <div style="display:flex;justify-content:center;align-items:center;">
                                                <div
                                                    style="display:flex;justify-content:center;align-items:center; width: 55px;height: 55px;background:#8f6c45;border-radius:27.5px;">
                                                    <img style=" color:white; width: 40px;height: 40px;"
                                                    src= <?php echo ($AdminDashboardFileLink."teacher.png"); ?>    
                                                    >
                                                    </img>
                                                </div>
                                            </div>

                                            <div style="margin-left: 15px;">
                                                <h6 style="padding-top: 5px; color:gray"> Teachers </h6>
                                                <h3 class=""> 9 </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //Link element to the Teachers -->

                                    <!-- Link element to the Pupils -->
                                    <div class="">
                                        <div class="ReferenceElem d-flex">
                                            <div style="display:flex;justify-content:center;align-items:center;">
                                                <div
                                                    style="display:flex;justify-content:center;align-items:center; width: 55px;height: 55px;background:#1f9972;border-radius:27.5px;">
                                                    <img style="width: 40px;height: 40px;"
                                                    src= <?php echo ($AdminDashboardFileLink."graduated.png"); ?>>
                                                    </img>
                                                </div>
                                            </div>

                                            <div style="margin-left: 15px;">
                                                <h6 style="padding-top: 5px; color:gray"> Pupils </h6>
                                                <h3 class=""> 70 </h3>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- //Link element to the Pupils -->

                                    <!-- Link element to the Classes -->
                                    <div class="">
                                        <div class="ReferenceElem d-flex">
                                            <div style="display:flex;justify-content:center;align-items:center;">
                                                <div
                                                    style="display:flex;justify-content:center;align-items:center; width: 55px;height: 55px;background:#cebdae;border-radius:27.5px;">
                                                    <img style="width: 40px;height: 40px;"

                                                    src= <?php echo ($AdminDashboardFileLink."training.png"); ?>>

                                                    </img>
                                                </div>
                                            </div>

                                            <div style="margin-left: 15px;">
                                                <h6 style="padding-top: 5px; color:gray"> Classes </h6>
                                                <h3 class=""> 20 </h3>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- //Link element to the Classes -->

                                    <!-- Link element to the unread Messages -->
                                    <div class="">
                                        <div class="ReferenceElem d-flex">
                                            <div style="display:flex;justify-content:center;align-items:center;">
                                                <div
                                                    style="display:flex;justify-content:center;align-items:center; width: 55px;height: 55px;background:#9fcdc1;border-radius:27.5px;">
                                                    <img style="width: 40px;height: 40px;" 
                                                    
                                                    src= <?php echo ($AdminDashboardFileLink."email.png"); ?> />

                                                    
                                                    


                                                    
                                                </div>
                                            </div>

                                            <div style="margin-left: 15px;">
                                                <h6 style="padding-top: 5px; color:gray"> unread messages </h6>
                                                <h3 class=""> 10 </h3>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- //Link element to the unread Messages -->
                                </div>
                            </div>
                        <!-- //Teachers, Pupils, Classes, and unread messages Bloc -->    


                        <!-- calendar container -->
                            <div>
                                <div style="border-radius:20px; width:auto; padding-left:4%;padding-right:4%;padding-bottom:20px; " class=" bg-light ">
                                
                                    <div class=" pt-3 pb-2">
                                        <h4> Calendrier </h4>
                                    </div>

                                    <div style="display: flex;justify-content:space-between; background:#5f9986; border-radius:25px;">
                                    
                                        <!-- Calendar Bloc -->
                                            <div class="" style="margin-top:10px;border-radius:25px; padding:20px;">
                                                <?php include("calendrier/calendrier.php"); ?>
                                            </div>
                                        <!-- //Calendar Bloc -->


                                        <!-- This Month bloc -->
                                            <div class="" style="width:70%;margin-top:10px;border-radius:25px; padding:20px;">
                                                <div style="background: white; height:100%;border-radius:20px;padding-top:10px;">

                                                    <div style="display:flex;justify-content:space-between;align-items:center;width:auto;height:50px;">
                                                        <h4 style="margin-left:10px;font-size:18px;">Ce mois </h4>

                                                        <div class="AjouterBtnEvent">
                                                            <button style="background:none;border:none;" type="button" class=""
                                                                data-bs-toggle="modal" data-bs-target="#EventPopUp">
                                                                Add
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <hr style="margin-top: -5px;">

                                                    <div id="EventsContainer">
                                                    </div>

                                                </div>
                                            </div>
                                        <!-- //This Month bloc -->

                                    </div>

                                </div>

                            </div>
                        <!-- //calendar container -->

                    </div>

                </div>
            <!-- //The block on the middle -->

            <!-- The third bloc that contains the logged in user info, latest students,and latest messages -->
                <div style="width:18%;" class="bg-light  ">
        
                <!-- Loged in User Info and The two icons of log out and notifications container-->
                    <div style="margin-top:25px; margin-left:10px; margin-right:10px;" class=" d-flex justify-content-between align-items-center">
                    
                    <!-- Notification icon and Log out Icon Container -->
                        <div style="display:flex;">
                        
                        
                        <!-- Notification Icon -->
                            <div style="padding:0 5px 0 5px ">
                                    <div   style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:#d6ece6; ">
                                        <img style="width:22px;height:22px;" src= <?php echo ($AdminDashboardFileLink."bell.png"); ?>  />
                                        <h4 style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">             . </h4>
                                </div>
                            </div>


                            <!-- Log out Icon -->
                            <div style="padding:0 5px 0 5px ">
                                        <div style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:#d6ece6;">
                                            <a href="../logOut.php"> <img style="width:22px;height:22px;"   src= <?php echo ($AdminDashboardFileLink."logout.png"); ?>   /> </a>
                                            <h4 style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;"> . </h4>
                                        </div>
                                </div>

                        </div>
                        <!--// Notification icon and Log out Icon Container -->


                        <!-- Logged in user Info (First and second name, photo ) -->
                        <div style="display:flex;">
                            <div class="bg-light" style="padding-right: 10px;">
                                <div>
                                    <h5 style="font-size: 14px; padding-top:10px; "> Yassine Gn </h5>
                                </div>
                                <div style=" margin-top:-12px;">
                                    <span style="font-size: 12px;"> Admin </span>
                                </div>
                            </div>
                            <!-- Logged in user photo -->
                            <div style="display:flex;align-items:center;" >
                                <div
                                    style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; ">
                                    <img style="width:40px;height:40px;border-radius:20px;"
                                    src= <?php echo ($AdminDashboardFileLink."adminPhoto.png"); ?> />
                                </div>
                            </div>
                            <!-- Logged in user photo -->
                        </div>
                        <!-- //Logged in user Info (First and second name, photo ) -->
                    </div>
                <!-- //Loged in User Info and The two icons of log out and notifications container-->



                <!-- The bloc of latest Actions info container -->
                        <div class="  d-flex" style="margin-top:20px; padding-left:12px; ">
                            <div class=" ">
                                <h5 style="font-size: 18px; margin-bottom:0px;">Recent Students </h5>
                                <span style="font-size: 12px;"> You have 900 students </span>
                            </div>
                            <div>
                                <div style="padding-left:50px;">
                                    <div class="notifIcon">
                                        <div
                                            style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:#1f9972;">
                                            <img style="width:22px;height:22px;" src= <?php echo ($AdminDashboardFileLink."add.png"); ?> />
                                            <h4
                                                style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                                . </h4>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                <!-- //The bloc of latest Actions info container -->


                <!-- New students Container -->
                    <div>  
                        <!-- New student element -->
                        <div class="  d-flex" style="margin-top:24px; margin-bottom:-20px; padding-left:12px; ">
                            <div class="notifIcon">
                                <div
                                    style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:#1f9972;">
                                    <img style="width:40px;height:40px;border-radius:20px;"
                                    src= <?php echo ($AdminDashboardFileLink."kid3.png"); ?> />
                                    <h4
                                        style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                        . </h4>

                                </div>
                            </div>
                            <div style="width:130px; margin-left: 10px;">
                                <h6 style="margin-bottom:-2px;">Sofien Ghanjati </h6>
                                <span> 6ème A </span>
                            </div>
                            <div>


                            </div>

                            <div class="notifIcon">
                                <div
                                    style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center;background:#d6ece6;">
                                    <img style="width:22px;height:22px;" src="../Ressorces/images/email.png" />
                                    <h4
                                        style="display:none; position:absolute; padding-bottom: 21px;padding-left:2px; color:red;">
                                        . </h4>

                                </div>
                            </div>

                        </div>


                        <!-- New student element -->
                        <div class="  d-flex" style="margin-top:34px; margin-bottom:-20px; padding-left:12px; ">
                            <div class="notifIcon">
                                <div
                                    style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:#1f9972;">
                                    <img style="width:40px;height:40px;border-radius:20px;"
                                    src= <?php echo ($AdminDashboardFileLink."kid2.png"); ?> />
                                    <h4
                                        style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                        . </h4>

                                </div>
                            </div>
                            <div style="width:130px; margin-left: 10px;">
                                <h6 style="margin-bottom:-2px;">Omar Amri </h6>
                                <span> 3ème A </span>
                            </div>
                            <div>


                            </div>

                            <div class="notifIcon">
                                <div
                                    style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center;background:#d6ece6;">
                                    <img style="width:22px;height:22px;" src="../Ressorces/images/email.png" />
                                    <h4
                                        style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                        . </h4>

                                </div>
                            </div>

                        </div>

                        <!-- New student element -->
                        <div class="  d-flex" style="margin-top:34px; margin-bottom:-20px; padding-left:12px; ">
                            <div class="notifIcon">
                                <div
                                    style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:#1f9972;">
                                    <img style="width:40px;height:40px;border-radius:20px;"
                                    src= <?php echo ($AdminDashboardFileLink."photosElèves/ghassendridi.png"); ?> />
                                        
                                    <h4
                                        style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                        . </h4>

                                </div>
                            </div>
                            <div style="width:130px; margin-left: 10px;">
                                <h6 style="margin-bottom:-2px;">Ahmed Landolsi </h6>
                                <span> 5ème A </span>
                            </div>
                            <div>


                            </div>

                            <div class="notifIcon">
                                <div
                                    style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center;background:#d6ece6;">
                                    <img style="width:22px;height:22px;" src="../Ressorces/images/email.png" />
                                    <h4
                                        style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                        . </h4>

                                </div>
                            </div>

                        </div>


                        <!-- New student element -->
                        <div class="  d-flex" style="margin-top:34px; margin-bottom:-20px; padding-left:12px; ">
                            <div class="notifIcon">
                                <div
                                    style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center; background:#1f9972;">
                                    <img style="width:40px;height:40px;border-radius:20px;"
                                    src= <?php echo ($AdminDashboardFileLink."photosElèves/karimmoufid.png"); ?> />
                                    <h4
                                        style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                        . </h4>

                                </div>
                            </div>
                            <div style="width:130px; margin-left: 10px;">
                                <h6 style="margin-bottom:-2px;">Raouf Mhamdi </h6>
                                <span> 5ème A </span>
                            </div>
                            <div>


                            </div>

                            <div class="notifIcon">
                                <div
                                    style="width:40px;height:40px;border-radius:20px; display:flex;align-items:center;justify-content:center;background:#d6ece6;">
                                    <img style="width:22px;height:22px;" src="../Ressorces/images/email.png" />
                                    <h4
                                        style="display:none; position:absolute; padding-bottom: 21px;padding-left:22px; color:red;">
                                        . </h4>

                                </div>
                            </div>
                        </div>


                        <!-- View more students button -->
                        <div class=" " style="margin-top: 35px; display:flex;justify-content:center;">
                            <div class="  "
                                style="display:flex;align-items:center;justify-content:center; font-size:14px;width:200px;height:40px;border-radius:25px;background:#d6ece6;">
                                <h5 style=" font-size:16px;">View More </h5>

                            </div>
                        </div>
                    </div>  
                <!-- //New students Container -->



                

                </div>
            <!-- //The third bloc that contains the logged in user info, latest students,and latest messages -->
       
        </section>
    <!-- //Main container that contains the blocks that are appearing when the page loads -->





  
</body>

</html>