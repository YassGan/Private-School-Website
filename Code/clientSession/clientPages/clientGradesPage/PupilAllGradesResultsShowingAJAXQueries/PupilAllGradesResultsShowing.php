<?php


include "../../../../connect.php";


function  gradesElement($id,$UniversityYear,$Class,$semestre){   
    $gradesElement ='
        <div style="cursor:pointer" onclick="BigGradesFormatPopUpLancher('.$id.')" class="gradesElement"  >
            <div style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);background: whitesmoke;border-radius:19px;padding-top:50px;padding-bottom:30px;box-shadow:">
                <h5 style="display:flex;justify-content:center" > University year : '.$UniversityYear.' </h5>
                <h5 style="display:flex;justify-content:center" > '.$Class.' </h5>

                <div style="display:flex;justify-content:center"> 
                    <h5 style="display:flex;justify-content:center" > semestre : </h5>
                    <h5 style="margin-left:5px;display:flex;justify-content:center" > '.$semestre.' </h5>
                </div>
                <div style="display:flex;justify-content:center">
                    <button class="btn btn-primary mt-3">Show Results</button>
                </div>
                <div>

                </div>
            </div>
        </div>
        ';
    return $gradesElement;
}


if (isset($_POST['displayDataSend'])) {
    $table="";
    $idGradeSend=$_POST['idGradeSend'];

    $sql = "select * from `gradestable` where idElève='$idGradeSend'";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id=$row['id'];
        $UniversityYear=$row['AnnéeScolaire'];
        $Class=$row['ClasseElève'];
        $semestre=$row['Semestre'];
        
        $table.=gradesElement($id,$UniversityYear,$Class,$semestre);
    }
    echo $table;
}
