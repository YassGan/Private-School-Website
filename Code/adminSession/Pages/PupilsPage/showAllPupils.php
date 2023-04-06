<?php

include "../../../connect.php";


















$JsFunctions = '


<script>


function DeletePupilFrom(id){

    $("#hiddendataPupilDelete").val(id);
    
    
    $("#deletePupilModal").modal("show");

}











function UpdatePupilInfo() {
 
    var hiddendataToUpdate = $("#hiddendataToUpdate").val();
    var UpNom =   $("#PupilShowNomUp").val();
    var UpPrénom= $("#PupilShowPrénomUp").val();

    var Upsexe = $("#PupilShowsexeUp").val();
     var UpDatNaissance= $("#PupilShowDateNaissanceUp").val();
     var UpDateAjout= $("#PupilShowDateInscriptionUp").val();

    
     var UpNiveau= $("#PupilShowLevel").val();
     var UpclassificationA_B= $("#PupilShowClassification").val();
     var UpnomPère= $("#PupilShowFatherName").val();


     var UpProfessionPère= $("#PupilShowFatherJob").val();
     var UpTelephonePère=  $("#PupilShowFatherPhone").val();
     var UpemailPère= $("#PupilShowFatherEmail").val();

    var UpnomMère= $("#PupilShowMoterName").val();
    var Upprofessionmère=  $("#PupilShowMoterJob").val();
    var Uptelephonemère= $("#PupilShowMoterPhone").val();

    var UpemailMère= $("#PupilShowMoterEmail").val();

    var UpNationalitéeleve = $("#PupilShowNationality").val();
    var Upemailelève= $("#PupilShowEmail").val();
    var UpadresseLogement = $("#PupilShowAdress").val();


    $.post("updatePupil.php", {
        SendhiddendataToUpdate: hiddendataToUpdate,
        SendUpNom: UpNom,
        SendUpPrénom: UpPrénom,

        SendUpsexe: Upsexe,
        SendUpDatNaissance: UpDatNaissance,
        SendUpDateAjout: UpDateAjout,

        SendUpNiveau: UpNiveau,
        SendUpclassificationA_B: UpclassificationA_B,
        SendUpnomPère: UpnomPère,

        SendUpProfessionPère: UpProfessionPère,
        SendUpTelephonePère: UpTelephonePère,
        SendUpemailPère: UpemailPère,

        SendUpnomMère: UpnomMère,
        SendUpprofessionmère: Upprofessionmère,
        SendUptelephonemère: Uptelephonemère,

        SendUpemailMère: UpemailMère,
        SendUpNationalitéeleve: UpNationalitéeleve,
        SendUpemailelève: Upemailelève,

        SendUpadresseLogement: UpadresseLogement




    }, function(data, status) {


        

        $("#SuccessUpdatePupil").modal("show");
        displayAllPupils();




        


    });
}












































function GettingPupilDetailstoUpdate(updateid) {
    $("#UpdatePupilInfo").modal("UpdateTeacherPopUp");
//     $("#hiddendataToUpdate").val(updateid);
 
    $.post("getPupilDetails.php", {
        PupilClickedIdSend: updateid
     }, function(data, status) {
        var userId = JSON.parse(data);
         $("#PupilShowNomUp").val(userId.Nom);
         $("#PupilShowPrénomUp").val(userId.Prénom);
         $("#PupilShowsexeUp").val(userId.sexe);

         $("#PupilShowDateNaissanceUp").val(userId.DateNaissance);
         $("#PupilShowDateInscriptionUp").val(userId.DateAjout);
         $("#PupilShowLevel").val(userId.Niveau);

         $("#PupilShowClassification").val(userId.classificationA_B);
         $("#PupilShowFatherName").val(userId.nomPère);
         $("#PupilShowFatherJob").val(userId.ProfessionPère);

         $("#PupilShowFatherPhone").val(userId.TelephonePère);
         $("#PupilShowFatherEmail").val(userId.emailPère);
         $("#PupilShowMoterName").val(userId.nomMère);

         $("#PupilShowMoterJob").val(userId.professionmère);
         $("#PupilShowMoterPhone").val(userId.telephonemère);
         $("#PupilShowMoterEmail").val(userId.emailMère);

         $("#PupilShowNationality").val(userId.Nationalitéeleve);
         $("#PupilShowEmail").val(userId.emailelève);
         $("#PupilShowAdress").val(userId.adresseLogement);


         
var img = document.getElementById("PupilShowPhotoUp");
img.src =  "../../../Ressorces/images/photosElèves/"+ userId.lienphotoélève;




    });
}























function ViewPupilModalOpen(PupilClickedId){

    $("#ViewPupilModalOpen").modal("show");



    $.post("getPupilDetails.php", {
        PupilClickedIdSend: PupilClickedId
    }, function(data, status) {
        var userId = JSON.parse(data);

        
         $("#PupilShowNom").html(userId.Nom);
         $("#PupilShowPrénom").html(userId.Prénom);
         $("#PupilShowsexe").html(userId.sexe);

         $("#PupilShowDateNaissance").html(userId.DateNaissance);
         $("#PupilShowDateAjout").html(userId.DateAjout);
         $("#PupilShowDateAjout").html(userId.DateAjout);


         // Il y a un décalage dans l affectation des variables
         $("#PupilShowNiveau").html(userId.Niveau+"ème "+userId.classificationA_B);
         $("#PupilShowclassificationA_B").html(userId.adresseLogement);
         $("#PupilShowadresseLogement").html(userId.nomPère);

         $("#PupilShownomPère").html(userId.ProfessionPère);
         $("#PupilShownomProfessionPère").html(userId.TelephonePère);
         $("#PupilShownomTelephonePère").html(userId.emailPère);

         $("#PupilShownomemailPère").html(userId.nomMère);
         $("#PupilShownomMère").html(userId.professionmère);
         $("#PupilShowprofessionmère").html(userId.telephonemère);

         $("#PupilShowemailMère").html(userId.Nationalitéeleve);
         $("#PupilShowNationalitéeleve").html(userId.emailelève);


         $("#AbsenceButtonId").val(userId.id)
         


var img = document.getElementById("PupilShowPhoto");
img.src =  "../../../Ressorces/images/photosElèves/"+ userId.lienphotoélève;
    });
}

</script>

<style>
.detailBtn:hover{
cursor:pointer;
}


</style>

';








if (isset($_POST['displayDataSend'])) {




    $table = '<table class="table">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">First and Second name</th>
<th scope="col">Class</th>
<th scope="col">Father name</th>
<th scope="col">Father phone</th>
<th scope="col">Mother name</th>
<th scope="col">Mother phone</th>
<th scope="col" style="display:flex;justify-content:center;padding-bottom:20px;padding-top:20px;">Adresse</th>

<th scope="col" style="padding-bottom:20px;">Operations</th>



</tr>
</thead>';




    $sql = "select * from `élèvetable`";
    $result = mysqli_query($con, $sql);
    $pupilCounter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $pupilCounter++;
        $id = $row['id'];
        $Nom = $row['Nom'];
        $Prénom = $row['Prénom'];

        $sexe = $row['sexe'];
        $DateNaissance = $row['DateNaissance'];
        $DateAjout = $row['DateAjout'];

        $Niveau = $row['Niveau'];
        $classificationA_B = $row['classificationA_B'];

        $adresseLogement = $row['adresseLogement'];



        $nomPère = $row['nomPère'];
        $ProfessionPère = $row['ProfessionPère'];
        $TelephonePère = $row['TelephonePère'];

        $emailPère = $row['emailPère'];
        $nomMère = $row['nomMère'];
        $professionmère = $row['professionmère'];

        $telephonemère = $row['telephonemère'];
        $emailMère = $row['emailMère'];
        $Nationalitéeleve = $row['Nationalitéeleve'];

        $emailelève = $row['emailelève'];
        $lienphotoélève = $row['lienphotoélève'];

        $table .= ' <tr>
 
    

<th scope="col">' . $id . '</th>
<th scope="col" ">  ' . $Nom . ' ' . $Prénom . '  </th>
<th scope="col">' . $Niveau . 'ème ' . $classificationA_B . '</th>
<th scope="col">' . $nomPère . '</th>
<th scope="col">' . $TelephonePère . '</th>
<th scope="col">' . $nomMère . '</th>
<th scope="col">' . $telephonemère . '</th>
<th scope="col" >' . $adresseLogement . '</th>
<th scope="col">

<div style="display:flex;justify-content:space-around;align-items:center;">

<div style="margin:5px;" class="detailBtn"> <img onclick="ViewPupilModalOpen(' . $id . ')"  style="background:green;border-radius:50%; width:28px;height:28px;" src="../../../Ressorces/images/view.png"></div>

<div style="margin:5px;" class="detailBtn" > <img onclick="GettingPupilDetailstoUpdate(' . $id . ')" style="background:gray;border-radius:50%; width:28px;height:28px;" src="../../../Ressorces/images/refresh.png"> </div>
<div  style="margin:5px;" class="detailBtn" > <img onclick="DeletePupilFrom(' . $id . ')" style="background:red;border-radius:50%; width:28px;height:28px;" src="../../../Ressorces/images/delete.png"> </div>




</div>
</th>




    </tr>


    <script>



    function confirmPupilDelete() {
        hiddendataPupilDelete = document.getElementById("hiddendataPupilDelete").value;

        $("#deletePupilModal").modal("hide");


        $.ajax({
            url: "deletePupil.php",
            type: "post",
            data: {
                SendidPupilToDelete: hiddendataPupilDelete
            },
            success: function(data, status) {
                displayAllPupils();
            }
        })

    }


    </script>
    
    
    
    ';













        $updatePopUp = '
<!-- Update  pupil modal -->

<div class="modal fade" id="UpdatePupilInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 75%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update pupil details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">



            <input id="hiddendataToUpdate" type="text" style="display:none">


                <div style="display:flex;justify-content:space-around;">
                    <div>

                        <!-- First Name section -->
                        <div>
                            <h6> First name : </h6>
                            <div class=" ">

                                <input id="PupilShowNomUp" style="width:200px" type="text" class="form-control" id="PupilName" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //First Name section -->




                        <!-- First Name section -->
                        <div>
                            <h6> Last name : </h6>
                            <div class=" ">

                                <input id="PupilShowPrénomUp" style="width:200px" type="text" class="form-control" id="PupilPrénom" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //First Name section -->



                        <!-- Sex section -->
                        <div>
                            <h6> Sex : </h6>
                            <div class=" ">

                                <select id="PupilShowsexeUp" style="width:200px" type="text" class="form-control" id="PupilSex" aria-describedby="emailHelp">
                                    <option selected=""> </option>



                                    <option value="male"> Male </option>
                                    <option value="female"> Female </option>

                                </select>
                            </div>
                        </div>
                        <!--// Sex section -->





                        <!-- Birth Date section -->
                        <div>
                            <h6> Birth date : </h6>
                            <div class=" ">

                                <input id="PupilShowDateNaissanceUp" style="width:200px" type="text" class="form-control" id="PupilBirthDate" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //Birth Date section -->

                        <!-- Inscription Date section -->
                        <div>
                            <h6> Inscription date : </h6>
                            <div class=" ">

                                <input id="PupilShowDateInscriptionUp" style="width:200px" type="text" class="form-control" id="PupilBirthDate" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //Inscription Date section -->



                        <!-- Level section -->
                        <div>
                            <h6> Level : </h6>
                            <div class=" ">

                                <input id="PupilShowLevel" style="width:200px" type="text" class="form-control" id="PupilLevel" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- Level section -->



                        <!-- Classification section -->
                        <div>
                            <h6> Classification : </h6>
                            <div class=" ">

                                <input id="PupilShowClassification" style="width:200px" type="text" class="form-control" id="PupilClassification" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!--// Classification section -->



                        <!-- Father Name section -->
                        <div>
                            <h6> Father s Name : </h6>
                            <div class=" ">

                                <input id="PupilShowFatherName" style="width:200px" type="text" class="form-control" id="PupilFatherPrénom" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!--// Father Name section -->








                    </div>

                    <div>

                        <!-- First Name section -->
                        <div>
                            <h6> Father s job : </h6>
                            <div class=" ">

                                <input id="PupilShowFatherJob" style="width:200px" type="text" class="form-control" id="PupilFatherJob" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //First Name section -->




                        <!-- First Name section -->
                        <div>
                            <h6> Father s phone : </h6>
                            <div class=" ">

                                <input id="PupilShowFatherPhone" style="width:200px" type="text" class="form-control" id="PupilFatherPhone" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //First Name section -->



                        <!-- Sex section -->
                        <div>
                            <h6> Father s email : </h6>
                            <div class=" ">

                                <input id="PupilShowFatherEmail" style="width:200px" type="text" class="form-control" id="PupilFatherEmail" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!--// Sex section -->





                        <!-- Birth Date section -->
                        <div>
                            <h6> Mother s name : </h6>
                            <div class=" ">

                                <input id="PupilShowMoterName" style="width:200px" type="text" class="form-control" id="PupilMotherName" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //Birth Date section -->



                        <!-- Level section -->
                        <div>
                            <h6> Mother s job : </h6>
                            <div class=" ">

                                <input id="PupilShowMoterJob" style="width:200px" type="text" class="form-control" id="PupilMotherJob" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- Level section -->



                        <!-- Classification section -->
                        <div>
                            <h6> Mother s phone : </h6>
                            <div class=" ">

                                <input id="PupilShowMoterPhone" style="width:200px" type="text" class="form-control" id="PupilMotherPhone" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!--// Classification section -->



                        <!-- Classification section -->
                        <div>
                            <h6> Mother s email : </h6>
                            <div class=" ">

                                <input id="PupilShowMoterEmail" style="width:200px" type="text" class="form-control" id="PupilMotherEmail" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!--// Classification section -->

                    </div>







                    <div>

                        <!-- First Name section -->
                        <div>
                            <h6> Nationality : </h6>
                            <div class=" ">

                                <input id="PupilShowNationality" style="width:200px" type="text" class="form-control" id="PupilNationality" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //First Name section -->




                        <!-- First Name section -->
                        <div>
                            <h6> Pupil s email : </h6>
                            <div class=" ">

                                <input  id="PupilShowEmail" style="width:200px" type="text" class="form-control" id="PupilEmail" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //First Name section -->



                        <!-- Sex section -->
                        <div>
                            <h6> Password : </h6>
                            <div class=" ">

                                <input style="width:200px" type="text" class="form-control" id="PupilPassword" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!--// Sex section -->





                        <!-- Birth Date section -->
                        <div>
                            <h6> Adress : </h6>
                            <div class=" ">

                                <input  id="PupilShowAdress" style="width:200px" type="text" class="form-control" id="PupilAdress" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <!-- //Birth Date section -->



                        <!-- Level section -->
                        <div>
                            <h6> Photo : </h6>
                            <div class=" ">

                                <input   style="width:200px" type="file" class="form-control" id="PupilPhoto" aria-describedby="emailHelp">
                            </div>
                            <div class=" ">
                            <img id="PupilShowPhotoUp" style="width: 120px;height:120px;">
                        </div>
                        </div>
                        <!-- Level section -->




                    </div>







                </div>




            </div>
            <div class="modal-footer">
                <button onclick="UpdatePupilInfo()" type="button" class="btn btn-success">Update</button>

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>



';
    }
    $table .= '</table>';



    echo $JsFunctions;

    echo $table;

    echo $updatePopUp;
}
