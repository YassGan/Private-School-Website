<?php

include "../../../../connect.php";

if (isset($_POST['displayDataSend'])) {




    function classeElement($idName, $NomClasse, $nbdEleves, $ProfFrançais, $ProfAnglais, $ProfArabe, $ProfSciences)
    {


$classeElement = '
<style>
    .ClassElement{
        background: #5f9986;

    }

    .ClassElement:hover{
    background:#999999;
    transition:0.5s;
    }


    .ButtonH{
        width:80px;
        height:40px;
        background:white;
        border:1px solid black;
        border-radius:25px;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .ButtonH:hover{
    cursor:pointer;
    background:#d4d4d4;
    }

</style>

<input style="display:none" id="hiddenDataToUpdate">
    
<div  class="ClassElement"  onmouseleave="leavingClassElement(' . $idName . ')" onmouseenter=" HoverClassElement(' . $idName . ')" style=" margin:20px;width: 250px; height: 190px;border-radius: 25px;">
    <div  id="ButtonsOnHover' . $idName . '" style=" display:none;padding-top:20px;padding-left:70px;">
        <div    style=" display:block;">
            <div class="ButtonH"  onclick="Consult(' . $idName . ')" style=" margin:10px; ">
                <h5> View </h5>
            </div>

            <div class="ButtonH"  onclick="DeleteEl(' . $idName . ')"  style="margin:10px;">
                <h5> Delete </h5>
            </div>

            <div class="ButtonH"  onclick="EditEl(' . $idName . ')"  style="margin:10px;">
            <h5> Edit </h5>
        </div>
        <input style="display:none;" id="hiddenData">    
    </div>  
</div>



<div id="classElementContent' . $idName . '" style="display:block;">
    <div  style=" padding-top:20px; display: flex;align-items: center;justify-content: space-around;"> 
        <h4> ' . $NomClasse . '</h4> 
        <div style="display: flex;">
        <h4 style="padding-right: 10px;"> ' . $nbdEleves . ' </h4> 
        <img style="width:30px;height:30px;" src="../../../Ressorces/images/children.png">
    </div>
</div>

<div style="margin-top:6% ;">
<div style="display:flex;align-items:center; padding-left: 4px;">
<div style="margin-bottom:7px;margin-right:6px; width:10px;height:10px;border-radius:50%;background:#928a69;"> 
</div>


<div style="display:flex; align-items:center;">
<h4 style="width:90px;" class="fontSize14"> Prof Français: </h4>
<h4 style="color:#d6d6d6"  class="fontSize14">  ' . $ProfFrançais . ' </h4>
</div>

</div>

<div style="display:flex;align-items:center; padding-left: 4px;">
<div style="margin-bottom:7px;margin-right:6px; width:10px;height:10px;border-radius:50%;background:#1d916c;"> 
</div>
<div style="display:flex; align-items:center;">
<h4 style="width:90px;" class="fontSize14"> Prof Anglais: </h4>
<h4  style="color:#d6d6d6" class=" fontSize14">  ' . $ProfAnglais . ' </h4>
</div>
</div>

<div style="display:flex;align-items:center; padding-left: 4px;">
<div style="margin-bottom:7px;margin-right:6px; width:10px;height:10px;border-radius:50%;background:#d6ece6;"> 
</div>

<div style="display:flex; align-items:center;">
<h4 style="width:90px;" class="fontSize14"> Prof Arabe: </h4>
<h4 style="color:#d6d6d6"  class="fontSize14">  ' . $ProfArabe . '</h4>
</div>
</div>

<div style="display:flex;align-items:center; padding-left: 4px;">
<div style="margin-bottom:7px;margin-right:6px; width:10px;height:10px;border-radius:50%;background:#cebdae;"> 
</div>
<div style="display:flex; align-items:center;">
<h4 style="width:90px;" class="fontSize14"> Prof Sciencs: </h4>
<h4 style="color:#d6d6d6"  class="fontSize14">  ' . $ProfSciences . ' </h4>
</div>                                </div>
</div>

</div>
</div>




<script>






function displayPupils(ClassId) {
    var displayData = "true";
    $.ajax({
        url: "ClassesPageAjaxQueries/showingPupils.php",
        type: "post",
        data: {
            displayDataSend: displayData,
            ClassIdSend:ClassId
        },
        success: function(data, status) {
            $("#pupilsModalContainer").html(data);
        }
    });
}






function HoverClassElement(id){
    var ClassElement = document.getElementById("classElementContent"+id);
    ClassElement.style.display = "none";
    var TwoButtons = document.getElementById("ButtonsOnHover"+id);
    TwoButtons.style.display = "flex";

}

    function leavingClassElement(id){
        var ClassElement = document.getElementById("classElementContent"+id);
        ClassElement.style.display = "block";
        var TwoButtons = document.getElementById("ButtonsOnHover"+id);
        TwoButtons.style.display = "none";

    }

    function Consult(id){
        displayPupils(id);
        $("#pupilsModal").modal("show");


        
    }


    function DeleteEl(id){
        $("#deleteModal").modal("show");
        document.getElementById("hiddenData").value= id;


    }

    function confirmDelete(){
       idToDelete= document.getElementById("hiddenData").value;
       $("#deleteModal").modal("hide");


       $.ajax({
        url: "ClassesPageAjaxQueries/deleteClass.php",
        type: "post",
        data: {
            SendidToDelete: idToDelete
        },
        success: function(data, status) {
            displayData();
        }
    })
        
    }




    
    function EditEl(updateid){
        $("#updateModal").modal("show");

        document.getElementById("hiddenDataToUpdate").value= updateid;

            //post method to get the details of the user
            $.post("ClassesPageAjaxQueries/getClassDetails.php", {
                updateidSend: updateid
            }, function(data, status) {
                var userId = JSON.parse(data);

                $("#UpdatelevelId").val(userId.niveau);
                $("#UpdatePupilNumber").val(userId.nbdélèves);
                $("#UpdateClassClassification").val(userId.classification);

                $("#UpdateScienceTeacher").val(userId.ProfSciencs);
                $("#UpdateFrenchTeacher").val(userId.ProfFrançais);
                $("#UpdateArabicTeacher").val(userId.ProfArabe);

                $("#UpdateEnglishTeacher").val(userId.ProfAnglais);



            });
        }






        function updateClass() {

            var updateid=  document.getElementById("hiddenDataToUpdate").value;

            


            var UpdatelevelId = $("#UpdatelevelId").val();
            var UpdatePupilNumber = $("#UpdatePupilNumber").val();
            var UpdateClassClassification = $("#UpdateClassClassification").val();

            var UpdateScienceTeacher = $("#UpdateScienceTeacher").val();
            var UpdateFrenchTeacher = $("#UpdateFrenchTeacher").val();
            var UpdateArabicTeacher = $("#UpdateArabicTeacher").val();

            var UpdateEnglishTeacher = $("#UpdateEnglishTeacher").val();



            // alert("Id class to be updated :" + updateid
            //  + "/ New Level :" + UpdatelevelId
            //  + "/ New Pupils nb :" + UpdatePupilNumber
            //  + "/ New classification :" + UpdateClassClassification
            //  + "/ New science teacher :" + UpdateScienceTeacher
            //  + "/ New french teacher :" + UpdateFrenchTeacher
            //  + "/ New arabic teacher :" + UpdateArabicTeacher
            //  + "/ New english teacher :" + UpdateEnglishTeacher

            // );

            $.ajax({
                url: "ClassesPageAjaxQueries/updateClass.php",
                type: "post",
                data: {


                    hiddenDataIdSend: updateid,
                    SendUpdatelevelId: UpdatelevelId,
                    SendUpdatePupilNumber: UpdatePupilNumber,
                    SendUpdateClassClassification: UpdateClassClassification,

                    SendUpdateScienceTeacher: UpdateScienceTeacher,
                    SendUpdateFrenchTeacher: UpdateFrenchTeacher,
                    SendUpdateArabicTeacher: UpdateArabicTeacher,

                    SendUpdateEnglishTeacher: UpdateEnglishTeacher


                },
                success: function(data, status) {
                    displayData();


                    $("#updateModal").modal("hide");

                    $("#successfulOperation").modal("show");





                }
            })

        }


        



    
  





</script>

';
        return $classeElement;
    }


    $tab = '<table style="display:flex;justify-content:center;">';


    $sql = "select * from `classestable`";
    $result = mysqli_query($con, $sql);
    $i = mysqli_num_rows($result);


    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $NomClasse = $row['NomClasse'];
        $nbdélèves = $row['nbdélèves'];
        $ProfFrançais = $row['ProfFrançais'];
        $ProfAnglais = $row['ProfAnglais'];
        $ProfArabe = $row['ProfArabe'];
        $ProfSciencs = $row['ProfSciencs'];

        //function classeElement($NomClasse, $nbdEleves, $ProfFrançais, $ProfAnglais, $ProfArabe, $ProfSciences)

        if ($i % 3 == 0) {
            $tab .= '<tr  ><td >' .
                classeElement(
                    $id,
                    $NomClasse,
                    $nbdélèves,
                    $ProfFrançais,
                    $ProfAnglais,
                    $ProfArabe,
                    $ProfSciencs
                )
                . '</td>';
        } else {
            $tab .= '<td>' .

                classeElement(
                    $id,
                    $NomClasse,
                    $nbdélèves,
                    $ProfFrançais,
                    $ProfAnglais,
                    $ProfArabe,
                    $ProfSciencs
                )
                .
                '</td>';
        }
        $i++;
    }


    $tab .= '</table>';

    echo $tab;
}