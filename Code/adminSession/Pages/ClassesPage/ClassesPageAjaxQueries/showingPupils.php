<?php


include "../../../../connect.php";

if (isset($_POST['displayDataSend'])) {


    $someFunctions = '
    <script>

    function clicElement(id){

    alert("le id cliqué est "+id);

    }

 

    </script>

    <style>

        .Pupilelement:hover{
            background:#e4e4e4;
            cursor:pointer;
            transition:0.3s;
        }

    </style>
    
    ';



    $table = '<table class="table">




    <thead>
      <tr>
        <th  scope="col">id</th>
        <th style="width:210px;" scope="col">First and second Name</th>
        <th style="width:70px;" scope="col">Level</th>
        <th style="width:130px;" scope="col">Father Name</th>
        <th style="width:130px;" scope="col">Father Phone </th>
        <th scope="col">Adress </th>






      </tr>
    </thead>';

    $sqlEleve = "select * from `élèvetable`";
    $resultEleve = mysqli_query($con, $sqlEleve);

    $sqlClasse = "select * from `classestable`";
    $resultClasse = mysqli_query($con, $sqlClasse);


    while ($rowClasse = mysqli_fetch_assoc($resultClasse)) {
        $idClasse = $rowClasse['id'];
        $niveauClasse = $rowClasse['niveau'];
        $classificationClasse = $rowClasse['classification'];
        $NomClasseClasse = $rowClasse['NomClasse'];


        if ($idClasse == $_POST['ClassIdSend']) {
            $NomDeRecherche = $NomClasseClasse;
            $table .= '<tr > <div style="font-size:18px;padding-bottom:20px;color:green;"> <h4> List of Pupils of ' . $NomDeRecherche .  ' class   </h4></div> </tr> ';
        }
    }




    $PupilsCounter = 0;
    while ($rowEleve = mysqli_fetch_assoc($resultEleve)) {
        $id = $rowEleve['id'];
        $Nom = $rowEleve['Nom'];
        $Prénom = $rowEleve['Prénom'];
        $DateAjout = $rowEleve['DateAjout'];

        $Niveau = $rowEleve['Niveau'];
        $classificationA_B = $rowEleve['classificationA_B'];
        $adresseLogement = $rowEleve['adresseLogement'];
        $nomPère = $rowEleve['nomPère'];
        $TelephonePère = $rowEleve['TelephonePère'];

        if ($NomDeRecherche == $Niveau . 'ème ' . $classificationA_B) {
            $PupilsCounter++;

            $table .= ' <tr class="Pupilelement" onclick="clicElement(' . $id . ')">
                <th scope="col">' . $PupilsCounter . '</th>
                <th scope="col">' . $Nom . " " . $Prénom . '</th>
                <th scope="col">' . $Niveau . ' ' . $classificationA_B . '</th>
                <th scope="col">' . $nomPère . '</th>
                <th scope="col">' . $TelephonePère . '</th>
                <th scope="col">' . $adresseLogement . '</th>
        
              </tr>';
        }
    }


    $table .= '</table>';
    echo $table;

    echo $someFunctions;
}
