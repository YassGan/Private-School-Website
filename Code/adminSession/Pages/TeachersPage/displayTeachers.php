<?php


include "../../../connect.php";




$JsFunctions = '

<style>
.detailBtn:hover{
cursor:pointer;
}

</style>



<script>



function DeletePupilFrom(id){

    $("#hiddendataTeacherDelete").val(id);
    
    $("#deleteTeacherModal").modal("show");

}






function GettingTeacherDetailstoUpdate(updateid){
    $("#UpdateTeacherPopUp").modal("show");

    $("#hiddenIdUpdateTeacher").val(updateid);


$.post("getTeacherDetails.php", {
    TeacherClickedIdSend: updateid
 }, function(data, status) {
    var userId = JSON.parse(data);
     $("#UpTeacherName").val(userId.Nom);
     $("#UpTeacherPrénom").val(userId.Prénom);
     $("#UpTeacherSex").val(userId.sex);

     $("#UpTeacherAdresseLogement").val(userId.AdresseLogement);
     $("#UpTeacherBirthDate").val(userId.DateNaissance);
     $("#UpTeacherEntryDate").val(userId.DateEntrée);

      $("#UpTeacherAdresseEmail").val(userId.AdresseEmail);
     $("#UpTeacherPhoneNumber").val(userId.téléphone);
     $("#UpTeacherEmergencyPerson").val(userId.PersonneUrgente);

     $("#UpTeacherEmergencyPhoneNumber").val(userId.téléphoneUrgent);

     $("#UpTeacherMatière").val(userId.matièrepréférée);

   
 var img = document.getElementById("TeacherShowPhotoUp");
 img.src =  "../../../Ressorces/images/photosTeachers/"+ userId.lienPhoto;

});


}






function ViewTeacherModalOpen(TeacherClickedId){

    $("#ViewTeacherModalOpen").modal("show");

    $.post("getTeacherDetails.php", {
        TeacherClickedIdSend: TeacherClickedId
    }, function(data, status) {
        var userId = JSON.parse(data);

        
         $("#TeacherShowNom").html(userId.Nom);
         $("#TeacherShowPrénom").html(userId.Prénom);

          $("#TeacherShowDateNaissance").html(userId.DateNaissance);
         $("#TeacherShowDateAjout").html(userId.DateEntrée);


          $("#TeacherShowadresseLogement").html(userId.AdresseLogement);

          $("#TeacherShowadresseEmail").html(userId.AdresseEmail);

          $("#TeacherShowPhone").html(userId.téléphone);
          $("#TeacherShowEmergencyPerson").html(userId.PersonneUrgente);
          $("#TeacherShowEmergencyPersonPhone").html(userId.téléphoneUrgent);


          $("#hiddenDataIdTeacher").val(userId.id);

        
          $("#hiddenIdCurrentAutorisation").val(userId.autorisation);

         $("#TeacherAutorisation").html(userId.autorisation);

         $("#TeacherEmergencyPhoneNumber").html(userId.téléphoneUrgent);

         $("#TeacherMatière").html(userId.matièrepréférée);

 var img = document.getElementById("TeacherShowPhoto");
img.src =  "../../../Ressorces/images/photosTeachers/"+ userId.lienPhoto;
    });

}
</script>
';
echo $JsFunctions;





$PersonnelTableHead = '

<div style=" background:white;border-radius:25px;">
<table  class="table">
<thead >
  <tr>
    <th scope="col">n°</th>
    <th scope="col">First and Second Name</th>
    <th scope="col">Phone Number</th>

    <th scope="col">Email</th>
    <th scope="col">Person to call in emergency</th>
    <th scope="col">Person phone number</th>
    <th scope="col">Prefered Role</th>

    <th scope="col">Operations</th>



  </tr>
</thead>

';


$PersonnelTableOpen = '

<h4 style="font-size:21px;padding-top:20px;">
        Personnel Liste
    </h4>
';

$PersonnelTableClose = '
    </div>
';





$PersonnelTableFoot = '</div></table>';

$PersonnelTableBodyConcat = "";





$TeachersTableOpen = '
    <h4 style="font-size:21px;padding-top:20px;">
        Teachers Liste
    </h4>
';

$TeachersTableClose = '
    </div>
';


$tableHead = '
<div style=" background:white;border-radius:25px;">

<table class="table">
<thead >
  <tr>
    <th scope="col">n°</th>
    <th scope="col">First and Second Name</th>
    <th scope="col">Phone Number</th>

    <th scope="col">Email</th>
    <th scope="col">Person to call in emergency</th>
    <th scope="col">Person phone number</th>
    <th scope="col">Prefered Role</th>

    <th scope="col">Operations</th>



  </tr>
</thead>';


$tableFoot = '</table>';

$tableBodyConcat = "";

function tableBody($id, $rangCount, $Nom, $Prénom, $AdresseEmail, $téléphone, $EmergencyPerson, $EmergenPersonPhone, $preferedRole)
{
    $FirstandSecondName = $Nom . " " . $Prénom;
    $tableBody = ' <tr>
<th scope="col">' . $rangCount . '</th>
<th scope="col">' . $FirstandSecondName . '</th>
<th scope="col">' . $téléphone . '</th>
<th scope="col">' . $AdresseEmail . '</th>
<th scope="col">' . $EmergencyPerson . '</th>
<th scope="col">' . $EmergenPersonPhone . '</th>
<th scope="col">' . $preferedRole . '</th>



<th scope="col">

<div style="display:flex;justify-content:space-around;align-items:center;">

<div style="margin:5px;" class="detailBtn"> <img onclick="ViewTeacherModalOpen(' . $id . ')"  style="background:green;border-radius:50%; width:28px;height:28px;" src="../../../Ressorces/images/view.png"></div>

<div style="margin:5px;" class="detailBtn" > <img onclick="GettingTeacherDetailstoUpdate(' . $id . ')" style="background:gray;border-radius:50%; width:28px;height:28px;" src="../../../Ressorces/images/refresh.png"> </div>
<div  style="margin:5px;" class="detailBtn" > <img onclick="DeletePupilFrom(' . $id . ')" style="background:red;border-radius:50%; width:28px;height:28px;" src="../../../Ressorces/images/delete.png"> </div>




</div>
</th>





</tr>';

    return $tableBody;
}





if (isset($_POST['displayTeachersDataSend'])) {


    $sql = "select * from `teacherstable`";
    $result = mysqli_query($con, $sql);
    $rangCount = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $rangCount++;
        $id = $row['id'];
        $Nom = $row['Nom'];
        $Prénom = $row['Prénom'];
        $AdresseEmail = $row['AdresseEmail'];
        $téléphone = $row['téléphone'];
        $PersonneUrgente = $row['PersonneUrgente'];
        $téléphoneUrgent = $row['téléphoneUrgent'];
        $preferedRole = $row['matièrepréférée'];



        if ($preferedRole != "Personnel") {
            $tableBodyConcat .= tableBody($id, $rangCount, $Nom, $Prénom, $AdresseEmail, $téléphone, $PersonneUrgente, $téléphoneUrgent, $preferedRole);
        } else {
            $PersonnelTableBodyConcat .= tableBody($id, $rangCount, $Nom, $Prénom, $AdresseEmail, $téléphone, $PersonneUrgente, $téléphoneUrgent, $preferedRole);
        }
    }



    $TeachersTable = $tableHead . $tableBodyConcat . $tableFoot;
    $TeachersTableContainer = $TeachersTableOpen . $TeachersTable . $TeachersTableClose;


    $PersonnelTable = $PersonnelTableHead . $PersonnelTableBodyConcat . $PersonnelTableFoot;
    $PersonnelTableContainer = $PersonnelTableOpen . $PersonnelTable . $PersonnelTableClose;





    echo $PersonnelTableContainer . $TeachersTableContainer;
}
