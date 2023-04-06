<?php



include("../../../connect.php");
$storeId = "";

$sql = "select * from `élèvetable`";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $storeId .= $row['id'] . "/";
}


$hiddenIdArray = '
<input style="display:none"  value=' . $storeId . ' " id="hiddenIdArray" >
</input>
';
echo $hiddenIdArray;










function pupilbodyVar($id, $i, $Nom, $Prénom, $Niveau, $classificationA_B, $nomPère, $TelephonePère, $nomMère, $telephonemère, $emailelève)
{

    $Nom = preg_replace('/\s+/', '_', $Nom);
    $Prénom = preg_replace('/\s+/', '_', $Prénom);



    $CoordonnéePupilManquants = $Nom . "_" . $Prénom  . "_dans_" . $Niveau . "ème" . $classificationA_B;




    $PupiltableBodyVariables = '

<tr >
<th scope="col">' . $i . '</th>
<th scope="col">' . $Nom . ' ' . $Prénom . '</th>
<th scope="col">' . $Niveau . 'ème' . $classificationA_B . '</th>


<th scope="col">' . $nomPère . '</th>
<th scope="col">' . $TelephonePère . '</th>
<th scope="col">' . $nomMère . '</th>
<th scope="col">' . $telephonemère . '</th>

<th scope="col">' . $emailelève . '</th>
<th scope="col" style="padding-bottom:20px;">


<div style="display:flex">

<input id=' . $id . ' value=' . $CoordonnéePupilManquants . ' style="display:none" >
 
<select style="color:black;background:lightgray;" onchange="gettingAbsenceChangedDetails(' . $id . ')" id=AbsencePuil' . $id . '>
<option value="check it !!!">  check it !!! </option>
<option value="Yes">Yes</option>
    <option value="No">No</option> 
</select>

   

</div>


</th>



</tr>';
    return $PupiltableBodyVariables;
}



function accordionElement($ClassName)
{



    //  $TrimmedClassName = trim($ClassName, " ");

    $PupiltableHead = '
    <table style="background:#6cc3a7;" class="table">
<thead>
<tr>
<th scope="col">n°</th>
<th scope="col">First and Second name</th>
<th scope="col">Class</th>

<th scope="col">Father name</th>
<th scope="col">Father phone</th>
<th scope="col">Mother name</th>
<th scope="col">Mother phone</th>

<th scope="col">Pupil Email</th>
<th scope="col" style="padding-bottom:20px;">Presence ?</th>



</tr>
</thead>';










    $PupiltableBodyConcat = "";

    $PupilFooter = "</table>";








    $niveau = $ClassName[0];
    $classification = $ClassName[5];





    include("../../../connect.php");
    $sql = "select * from `élèvetable` where Niveau='$niveau' and classificationA_B='$classification' ";
    $result = mysqli_query($con, $sql);
    $i = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        $id = $row['id'];
        $Nom = $row['Nom'];
        $Prénom = $row['Prénom'];

        $Niveau = $row['Niveau'];
        $classificationA_B = $row['classificationA_B'];
        $nomPère = $row['nomPère'];

        $TelephonePère = $row['TelephonePère'];
        $nomMère = $row['nomMère'];
        $telephonemère = $row['telephonemère'];
        $emailelève = $row['emailelève'];






        //  array_push($ClassesNamesArray, $row);
        $PupiltableBodyConcat .= pupilbodyVar($id, $i, $Nom, $Prénom, $Niveau, $classificationA_B, $nomPère, $TelephonePère, $nomMère, $telephonemère, $emailelève);
    }

    $PupilTableAllElem = $PupiltableHead . $PupiltableBodyConcat . $PupilFooter;







    $accElem = '
<div class="accordion-item">
<h2 class="accordion-header" id="flush-headingOne">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $ClassName . '" aria-expanded="false" aria-controls="flush-collapseOne">
        ' . $ClassName . '
    </button>
</h2>
<div id="' . $ClassName  . '" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">

';



    $accElem .= $PupilTableAllElem;

    $accElem .= '

</div>
</div>

';

    return $accElem;
}
