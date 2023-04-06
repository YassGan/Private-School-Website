<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include("../../../links.php");

        $PageTitle = "Paiment";


        $loggedInPhotoUrl = 'adminPhoto.png';

        $bellIcon = "../../../Ressorces/images/bell.png";
        $LogOutIcon = "../../../Ressorces/images/logout.png";


        $loggedInPhoto = "../../../Ressorces/images/";
        $loggedInPhoto .= $loggedInPhotoUrl;
    ?>
<!-- Paiment Page Script JS link -->
    <script src="PaimentPageScriptJs.js"> </script>
<!-- //Paiment Page Script JS link -->

<!-- Paiment Page Style CSS link -->
    <link rel="stylesheet" href="PaimentPageStyleCSS.css"> 
<!-- //Paiment Page Style CSS link -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">

</head>

    <body>
        <!-- AjouterPaimentPopUp -->
            <div class="modal fade" id="AjouterPaimentPopUp" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add paiment</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <h5>
                                    Introduce the necessary details
                                </h5>
                            </div>
                            <div class="mb-4">
                                <label for="basic-url" class="form-label">Student Id</label>
                                <div class="input-group">
                                    <input type="text" id="studentIdInput" class="form-control" placeholder="write the id">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="basic-url" class="form-label">Date</label>
                                <div class="input-group">
                                    <input type="date" id="dateIdInput" class="form-control"
                                        placeholder="write the date of the paiment">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="basic-url" class="form-label">Paid Month</label>
                                <div class="input-group">
                                    <select id="MonthNameInput" class="form-select" style="width: 250px;" name="Mois" id="Mois">
                                        <option value="Choose_a_month">choose the month to pay</option>
                                        <option value="Septembre">Septembre</option>
                                        <option value="Octobre">Octobre</option>
                                        <option value="Novembre">Novembre</option>
                                        <option value="Décembre">Décembre</option>
                                        <option value="Janvier">Janvier</option>
                                        <option value="Février">Février</option>
                                        <option value="Mars">Mars</option>
                                        <option value="Avril">Avril</option>
                                        <option value="Mai">Mai</option>
                                        <option value="Juin">Juin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" onclick="AddPaimentClick()">Add paiment</button>

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- //AjouterPaimentPopUp -->

        <section>
            <div style="display:flex;" class=".container-fluid  min-vh-100  ">
            
            <!-- SideBar element -->
                <div style="width:20%;" id="sideBarWidth" class="  greenBg   align-items-center">
                    <div class="text-center mt-3 mb-4">
                        <img class="LogoSize" src="../../../Ressorces/images/logoRousseau.png" />
                        <h5 style="font-size: 22px;" class="VintageFont LogoTitle"> Ecole Primaire Rousseau </h5>
                    </div>


                    <div style="margin-left:20px;">
                        <?php include "./adminSideBar.php"; ?>
                    </div>
                </div>
            <!-- //SideBar element -->

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

                    <div>
                        <?php
                            include("./PaimentPageBackend.php");
                        ?>

                        <div style="margin-top: 40px;margin-bottom: 40px;">
                            <div style="display:flex;justify-content:center">
                                <h5> Choose the month : </h5>
                            </div>

                            <div>
                                <div style="display:flex;justify-content:center">
                                    <select class="form-select" style="width: 250px;" name="Mois" id="Mois"
                                        onchange="PaimentInformation()">
                                        <option value="Choose_a_month">Choose a month</option>
                                        <option value="Septembre">Septembre</option>
                                        <option value="Octobre">Octobre</option>
                                        <option value="Novembre">Novembre</option>
                                        <option value="Décembre">Décembre</option>
                                        <option value="Janvier">Janvier</option>
                                        <option value="Février">Février</option>
                                        <option value="Mars">Mars</option>
                                        <option value="Avril">Avril</option>
                                        <option value="Mai">Mai</option>
                                        <option value="Juin">Juin</option>
                                    </select>
                                </div>


                            </div>
                            <div style="display:flex;justify-content:end">

                                <div style="margin-right: 40px;margin-bottom: 40px;">
                                    <button onclick="PaimentPopUp()" class="btn btn-success ">
                                        Add paiment
                                    </button>
                                </div>

                            </div>

                            <!-- Accordion  -->
                            <div>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div style="display:flex;justify-content:center">
                                        <div style="width:86%">
                                            <div id="accordionInnerInfo">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



    <!-- script JS -->
        <script>
                function AddPaimentClick() {
                    var idStudent = document.getElementById("studentIdInput").value;
                    var idDate = document.getElementById("dateIdInput").value;
                    var idPaidMonth = document.getElementById("MonthNameInput").value;


                    alert("StudentIdInput " + idStudent + " / dateIdInput " + idDate + " / MonthNameInput " + idPaidMonth);



                    $.ajax({
                        url: "addPaiment.php",
                        type: 'post',
                        data: {
                            SendidStudent: idStudent,
                            SendidDate: idDate,
                            SendidPaidMonth: idPaidMonth
                        },
                        success: function(data, status) {
                            $('#AjouterPaimentPopUp').modal("hide");
                            window.location.reload();

                        }
                    })

                }



                function PaimentPopUp() {
                    $('#AjouterPaimentPopUp').modal("show");
                }







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







                function PaimentInformation() {




                    const list = document.getElementById("accordionInnerInfo");

                    while (list.hasChildNodes()) {
                        list.removeChild(list.firstChild);
                    }




                    // const list = document.getElementById("accordionInnerInfo");

                    // if (list.hasChildNodes()) {
                    //     list.removeChild(list.children[0]);
                    // }









                    var MoisChoisi = document.getElementById("Mois").value;

                    var EleveTab = <?php echo json_encode($EleveTab); ?>;
                    var ClassTab = <?php echo json_encode($ClassTab); ?>;
                    var PaimentTab = <?php echo json_encode($PaimentTab); ?>;

                    var AccordionTab = [];
                    var i, j, k;
                    i = 0;
                    j = 0;
                    l = 0;
                    var statutPaiment;


                    //créer un tableau qui contient les élèves avec leurs statuts de paiment
                    while (i <= EleveTab.length - 1) {
                        //console.log("L'indice i " + i);
                        for (j = 0; j <= PaimentTab.length - 1; j++) {
                            //console.log("L'indice j " + j);
                            if (EleveTab[i].idEleve == PaimentTab[j].idElève && PaimentTab[j].nomMoisPayé == MoisChoisi) {
                                console.log("If entré");
                                EleveTab[i].StatutPaiment = "Payé";
                                EleveTab[i].DatePaiment = PaimentTab[j].datePaiment;
                            }
                        }
                        i++;
                    }

                    console.log("EleveTab Tab");
                    console.log(EleveTab);



                    console.log("Afficher les élèves payés ou non payés par classe ");
                    for (k = 0; k <= ClassTab.length - 1; k++) {
                        console.log("--- Classe de la " + ClassTab[k].NiveauClasse + "ème" + ClassTab[k].ClassClassification);

                        var Classe = ClassTab[k].NiveauClasse + "ème" + ClassTab[k].ClassClassification;


                        for (d = 0; d <= EleveTab.length - 1; d++) {
                            if (ClassTab[k].NiveauClasse == EleveTab[d].NiveauEleve && ClassTab[k].ClassClassification == EleveTab[
                                    d].classificationA_B) {

                                console.log("L'élève avec l'id  " + EleveTab[d].idEleve + " " + EleveTab[d].NomEleve + " " +
                                    EleveTab[d]
                                    .PrénomEleve + " son statut de paiment est " + EleveTab[d].StatutPaiment);
                            }

                        }
                    }






                    //travali de l'accordéon 
                    for (i = 0; i <= ClassTab.length - 1; i++) {
                        var para = document.createElement("div");

                        var z = "Yassine";
                        var classe = ClassTab[i].NiveauClasse + "ème" + ClassTab[i].ClassClassification;

                        para.innerHTML = `<div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#` + classe + `">
                                ` + classe +
                            `     </button>
                        </h2>
                        <div style="background:#F9F9F9; border:1px solid black" id="` +
                            classe + `" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            <table class="table">
                                <thead id="tableElem` + classe + `">
                                    <tr >
                                        <th scope="col">First and Second name</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Father name</th>
                                        <th scope="col">Father phone</th>
                                        <th scope="col">Paiment Statue </th>
                                        <th scope="col" >Paiment Date</th>
                                    </tr>
                                </thead>

                                </table>
                            </div>
                        </div>
                    </div>`;

                        document.getElementById("accordionInnerInfo").appendChild(para);
                    }



                    //travali de l'accordéon comme élément indépendant
                    for (j = 0; j <= EleveTab.length - 1; j++) {
                        for (l = 0; l <= ClassTab.length - 1; l++) {
                            if (EleveTab[j].NiveauEleve == ClassTab[l].NiveauClasse && EleveTab[j].classificationA_B == ClassTab[l]
                                .ClassClassification) {
                                console.log("entree if");

                                var para = document.createElement("tr");

                                var NomPrénomEleve = EleveTab[j].NomEleve + " " + EleveTab[j].PrénomEleve;
                                var ClassEleve = EleveTab[j].NiveauEleve + "ème" + EleveTab[j].classificationA_B;
                                var NomPère = EleveTab[j].ParentEffectuantPaiment;
                                var TéléphonePère = EleveTab[j].NumTelParentEffectuantPaiment;

                                var PaimentStatue = EleveTab[j].StatutPaiment;
                                var DatePaiment = EleveTab[j].DatePaiment;

                                if (DatePaiment == null) {
                                    DatePaiment = "Pas encore payé";
                                    var textColor = "red";
                                } else {
                                    var textColor = "green";
                                }

                                if (PaimentStatue == null) {
                                    PaimentStatue = "Pas encore payé";
                                }


                                para.innerHTML = `
                                        <th  scope="col" class="infoSTYLE"> ` + NomPrénomEleve + ` </th>
                                        <th scope="col" class="infoSTYLE">` + ClassEleve + `</th>
                                        <th scope="col" class="infoSTYLE">` + NomPère + `</th>
                                        <th scope="col" class="infoSTYLE">` + TéléphonePère + `</th>
                                        <th scope="col" style="color:` + textColor + `" class="infoSTYLE">` + PaimentStatue + ` </th>
                                        <th scope="col" style="color:` + textColor + `" class="infoSTYLE">` + DatePaiment + `</th> 
                
                                        `;

                                document.getElementById("tableElem" + ClassEleve).appendChild(para);

                            }

                        }
                    }
                }
                
        </script>
    <!-- //script JS -->

    </body>
</html>