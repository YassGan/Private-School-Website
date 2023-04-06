<?php


include "../../../../connect.php";




$sqlEvents = "select * from `calendar`";
$resultEvents = mysqli_query($con, $sqlEvents);

$rowEvents = mysqli_fetch_assoc($resultEvents);







$modalAllEvents = '
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">All the events</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

        <div>

        
        ';


while ($rowEvents = mysqli_fetch_assoc($resultEvents)) {

    $dateId = $rowEvents['id'];

    $dateAjout = $rowEvents['dateAjout'];
    $dateChoisie = $rowEvents['dateChoisie'];
    $EventTitle = $rowEvents['EventTitle'];
    $CouleurChoisie = $rowEvents['CouleurChoisie'];

    $ligneElementEvent = '
    <script>
        function deleteDate(id){
            alert(id);


            var deletedUserId = id;
            $.ajax({
                url: "AdminDashboardPageAjaxQueries/deleteEvent.php",
                type: "post",
                data: {
                    deletedUserIdSend: deletedUserId
                },
                success: function(data, status) {
                    window.location.reload()
                }
            })

        }
    </script>
    <div style="height:30px; display:flex;justify-content: space-between; font-size:12px; align-items: center; ">
    <div style="display: flex;">
        <div style="width:120px; display:flex; align-items: center; ">
            <div style="margin-right: 10px;width:20px;height:20px;border-radius: 50%;background:' . $CouleurChoisie . ';"> </div>
            <span> Le ' . $dateChoisie . '</span>  
        </div>
        <div style="display:flex;padding-top:14px;">
            <p >: 
                ' . $EventTitle . '  
            </p>

        
        </div>
    </div>

    <div style="cursor:pointer;" onclick="deleteDate(' . $dateId . ')" class="">
    <div style="background:#cfc77d; display:flex;justify-content:center;align-items:center; height:20px;width:60px;border-radius:10px; ">
        <style="margin-top:10px;" p> Delete </style=>
    </div>
    </div>
   
</div>
    ';



    $modalAllEvents .= $ligneElementEvent;
}




$modalAllEvents .= '

        </div>





      </div>
      
    </div>
  </div>
</div>


';


echo  $modalAllEvents;













if (isset($_POST['displayDataSend'])) {
    $table = '
';

    $sql = "select * from `calendar`";
    $result = mysqli_query($con, $sql);

    $rowcount = mysqli_num_rows($result);
    $maxEvents = 4;


    if ($rowcount < $maxEvents) {
        $maxEvents = $rowcount - 1;
    }

    $count = 0;

    while ($count < $maxEvents) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $dateAjout = $row['dateAjout'];
        $dateChoisie = $row['dateChoisie'];
        $EventTitleBrut = $row['EventTitle'];
        $CouleurChoisie = $row['CouleurChoisie'];

        $EventTitle = substr($EventTitleBrut, 0, 25);




        if (date('m', strtotime($dateChoisie)) == date('m')) {



            $table .= ' <div style="padding-left:10px; display:flex;align-items:center;">
        <div style="  ">

            <div
                style="display:flex;align-items:center;justify-content:center; background:' . $CouleurChoisie . '; border-radius:50%;width:25px;height:25px;">
                <h4 style="margin-bottom:-2px;font-size:12px;color:white;"> ' . date('d', strtotime($dateChoisie)) . '
                </h4>
            </div>
        </div>
        <div>
            <h6 style="padding-top:10px;padding-left:10px;font-size:12px;">
                ' . $EventTitle . '
            </h6>
        </div>
    </div>';
        }
        $count += 1;
    }

    if ($rowcount > $maxEvents) {
        $table .= '
        <div style="display:flex;justify-content:center;align-items:center;">   
          <div>
            <button 
                style=" border: 1px solid;
                border-radius: 20px;
                padding: 8px;
                margin-right: 10px;
                font-size: 13px;
                 background:gray
                 width:150px;
                 margin-top:10px;
                 "
                 type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" >

            View All
        </button>

            </div>
        <div>
        
        ';
    }



    $table .= '</div>';

    echo $table;
}
