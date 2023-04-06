<?php
include("../../../connect.php");



// Eleve table 
$EleveTab = [];
class EleveElement
{
    // Properties
    public $idEleve;

    public $NomEleve;
    public $PrénomEleve;
    public $ParentEffectuantPaiment;

    public $NumTelParentEffectuantPaiment;
    public $NiveauEleve;
    public $classificationA_B;

    public $DatePaiment;
    public $StatutPaiment;






    // Methods idEleve
    function set_idEleve($idEleve)
    {
        $this->idEleve = $idEleve;
    }
    function get_idEleve()
    {
        return $this->idEleve;
    }

    // Methods NomEleve
    function set_NomEleve($NomEleve)
    {
        $this->NomEleve = $NomEleve;
    }
    function get_NomEleve()
    {
        return $this->NomEleve;
    }

    // Methods PrénomEleve
    function set_PrénomEleve($PrénomEleve)
    {
        $this->PrénomEleve = $PrénomEleve;
    }
    function get_PrénomEleve()
    {
        return $this->PrénomEleve;
    }


    // Methods ParentEffectuantPaiment
    function set_ParentEffectuantPaiment($ParentEffectuantPaiment)
    {
        $this->ParentEffectuantPaiment = $ParentEffectuantPaiment;
    }
    function get_ParentEffectuantPaiment()
    {
        return $this->ParentEffectuantPaiment;
    }

    // Methods NumTelParentEffectuantPaiment
    function set_NumTelParentEffectuantPaiment($NumTelParentEffectuantPaiment)
    {
        $this->NumTelParentEffectuantPaiment = $NumTelParentEffectuantPaiment;
    }
    function get_NumTelParentEffectuantPaiment()
    {
        return $this->NumTelParentEffectuantPaiment;
    }

    // Methods Class
    function set_Niveau($NiveauEleve)
    {
        $this->NiveauEleve = $NiveauEleve;
    }
    function get_Niveau()
    {
        return $this->NiveauEleve;
    }

    // Methods Class
    function set_classificationA_B($classificationA_B)
    {
        $this->classificationA_B = $classificationA_B;
    }
    function get_classificationA_B()
    {
        return $this->classificationA_B;
    }

    // Methods DatePaiment
    function DatePaiment($DatePaiment)
    {
        $this->DatePaiment = $DatePaiment;
    }
    function get_DatePaiment()
    {
        return $this->DatePaiment;
    }

    // Methods Statut Paiment
    function StatutPaiment($StatutPaiment)
    {
        $this->StatutPaiment = $StatutPaiment;
    }
    function get_StatutPaiment()
    {
        return $this->StatutPaiment;
    }
}

$sqlEleveTab = "select * from `élèvetable`";
$resultEleveTab = mysqli_query($con, $sqlEleveTab);

while ($rowEleveTab = mysqli_fetch_assoc($resultEleveTab)) {
    $idEleve = $rowEleveTab['id'];
    $NomEleve = $rowEleveTab['Nom'];
    $PrénomEleve = $rowEleveTab['Prénom'];
    $classificationA_B = $rowEleveTab['classificationA_B'];
    $NiveauEleve = $rowEleveTab['Niveau'];
    $nomPère = $rowEleveTab['nomPère'];
    $TelephonePère = $rowEleveTab['TelephonePère'];

    $Eleve = new EleveElement();

    $Eleve->idEleve = $idEleve;
    $Eleve->NomEleve = $NomEleve;
    $Eleve->PrénomEleve = $PrénomEleve;

    $Eleve->ParentEffectuantPaiment = $nomPère;
    $Eleve->NumTelParentEffectuantPaiment = $TelephonePère;
    $Eleve->NiveauEleve = $NiveauEleve;

    $Eleve->classificationA_B = $classificationA_B;




    array_push($EleveTab, $Eleve);
}



// Class table 
$ClassTab = [];
class ClassTab
{

    public $idClassTab;
    public $NiveauClasse;
    public $ClassClassification;

    // Methods idClass
    function set_idClass($idClassTab)
    {
        $this->idClassTab = $idClassTab;
    }
    function get_idClassTab()
    {
        return $this->idClassTab;
    }

    // Methods NiveauClasse
    function set_NiveauClasse($NiveauClasse)
    {
        $this->NiveauClasse = $NiveauClasse;
    }
    function get_NiveauClasse()
    {
        return $this->NiveauClasse;
    }

    // Methods ClassClassification
    function set_ClassClassification($ClassClassification)
    {
        $this->ClassClassification = $ClassClassification;
    }
    function get_ClassClassification()
    {
        return $this->ClassClassification;
    }
}

$sqlClassTab = "select * from `classestable`";
$resultClassTab = mysqli_query($con, $sqlClassTab);

while ($rowClassTab = mysqli_fetch_assoc($resultClassTab)) {
    $idTab = $rowClassTab['id'];
    $NiveauClasse = $rowClassTab['niveau'];
    $ClassClassification = $rowClassTab['classification'];


    $Class = new ClassTab();

    $Class->idClassTab = $idTab;
    $Class->NiveauClasse = $NiveauClasse;
    $Class->ClassClassification = $ClassClassification;

    array_push($ClassTab, $Class);
}







// Paiment table
$PaimentTab = [];
class PaimentTab
{
    public $idPaimentTab;
    public $datePaiment;
    public $idElève;
    public $nomMoisPayé;

    // Methods idPaimentTab
    function set_idPaimentTab($idPaimentTab)
    {
        $this->idPaimentTab = $idPaimentTab;
    }
    function get_idPaimentTab()
    {
        return $this->idPaimentTab;
    }

    // Methods datePaiment
    function set_datePaiment($datePaiment)
    {
        $this->datePaiment = $datePaiment;
    }
    function get_datePaiment()
    {
        return $this->datePaiment;
    }

    // Methods idElève
    function set_idElève($idElève)
    {
        $this->idElève = $idElève;
    }
    function get_idElève()
    {
        return $this->idElève;
    }

    // Methods nomMoisPayé
    function set_nomMoisPayé($nomMoisPayé)
    {
        $this->nomMoisPayé = $nomMoisPayé;
    }
    function get_nomMoisPayé()
    {
        return $this->nomMoisPayé;
    }
}

$sqlPaimentTab = "select * from `tabpaiment`";
$resultPaimentTab = mysqli_query($con, $sqlPaimentTab);

while ($rowPaimentTab = mysqli_fetch_assoc($resultPaimentTab)) {
    $idPaimentTab = $rowPaimentTab['id'];
    $datePaiment = $rowPaimentTab['date'];
    $idElève = $rowPaimentTab['idElève'];
    $nomMoisPayé = $rowPaimentTab['nomMoisPayé'];


    $PaimentElem = new PaimentTab();

    $PaimentElem->idPaimentTab = $idPaimentTab;
    $PaimentElem->datePaiment = $datePaiment;
    $PaimentElem->idElève = $idElève;
    $PaimentElem->nomMoisPayé = $nomMoisPayé;



    array_push($PaimentTab, $PaimentElem);
}