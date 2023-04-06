<?php include("accordionelement.php");





include "../../../connect.php";


$ClassesNamesArray = [];

$sql = "select * from `classestable`";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    array_push($ClassesNamesArray, $row['niveau'] . 'ème' . $row['classification']);
}




?>



<div style="display:flex;justify-content:center;" class="AccordionContainer">
    <div style="width: 94%;border-radius:25px;">
        <div class="accordion accordion-flush" id="accordionFlushExample">


            <?php


            $i = 0;
            while ($i < sizeof($ClassesNamesArray)) {
                echo  accordionElement($ClassesNamesArray[$i]);
                $i++;
            }


            ?>


        </div>
    </div>
</div>