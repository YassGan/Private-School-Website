<!-- Grades Showing Modal -->
<div class="modal fade" id="GradesShowClick" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 55%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Student Grades</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">



                <!-- input that contains all the notes showed in the student card it's a mistake that i named it englishNotes I should named it all notes  -->
                <input style="display:none" id="engilshNotes"> </input>



                <div id="content"
                    style="padding-top:60px;border-radius:0px;background:#F6F6F6;border:1px solid black;margin-bottom:40px;">
                    <div class="Line1Container" style="height:90px;padding-left: 70px;">
                        <div>
                            <div style="display: flex;">
                                <!-- <div>
                                    <img style="width:100px;height:100px;border-radius:50%" src="../../../Ressorces/images/photosElèves/nardinelouzir.png">
                                </div> -->

                                <div style=" padding-top: 10px;">
                                    <div style="width:710px;display: flex;align-items:center;justify-content:center;">
                                        <h2> Student Report Card </h2>
                                    </div>
                                    <div style="display:flex;justify-content:center">
                                        <span> Ecole Primare Rousseau </span>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="Line2Container" style="padding-top:30px;">
                        <div class="GradesTableContainer" style="display: flex;justify-content:center;">

                            <style>
                            .thElem {
                                border: 1px solid black;
                                padding-left: 14px;
                            }

                            .trElem {
                                border: 1px solid black;
                                padding-left: 14px;
                            }

                            .StudentInfoTableCard {
                                border: 1px solid black;
                                padding-left: 14px;
                            }

                            .studentGradesTab {
                                border: 1px solid black;
                                padding-left: 14px;
                            }

                            .thWidth {
                                width: 340px;
                            }

                            .centering {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                            }
                            </style>
                            <table class="StudentInfoTableCard">
                                <!-- <tr>
                                    <th class="thWidth" style="display: flex;">
                                        <h4>Name : </h4>
                                        <h4 style="padding-left: 10px;" class="fontWeightlight"> Hsouna Nasfi </h4>
                                    </th>
                                    <th class="thWidth">
                                        <h4> School year : </h4>
                                    </th>
                                </tr>


                                <tr>
                                    <th class="thWidth" style="display: flex;">
                                        <h4>Class : </h4>
                                        <h4 style="padding-left: 10px;" class="fontWeightlight"> 6èmeB </h4>
                                    </th>
                                    <th class="thWidth">
                                        <h4> Semestre : </h4>
                                    </th>
                                </tr> -->




                                <tr class=" trElem">
                                    <th class="thElem thWidth">
                                        <div style="display: flex;">
                                            <h4>Name : </h4>
                                            <h4 id="Name" style="padding-left: 10px;" class="fontWeightlight">

                                            </h4>
                                        </div>
                                    </th>
                                    <th class="thElem thWidth">
                                        <div style="display: flex;">
                                            <h4>School Year : </h4>
                                            <h4 id="SchoolYear" style="padding-left: 10px;" class="fontWeightlight">

                                            </h4>
                                        </div>

                                    </th>
                                </tr>

                                <tr class="trElem">
                                    <th class=" thElem thWidth">
                                        <div style="display: flex;">
                                            <h4>Class : </h4>
                                            <h4 id="Class" style="padding-left: 10px;" class="fontWeightlight">

                                            </h4>
                                        </div>
                                    </th>
                                    <th class=" thElem thWidth">
                                        <div style="display: flex;">
                                            <h4>Semestre : </h4>

                                            <h4 id="period" style="padding-left: 10px;" class="fontWeightlight">

                                            </h4>
                                        </div>
                                    </th>
                                </tr>

                                <tr class="trElem">
                                    <th class=" thElem thWidth">
                                        <div style="display: flex;">
                                            <h4>Global Average : </h4>
                                            <h4 id="GlobalAverage" style="padding-left: 10px;" class="fontWeightlight">

                                            </h4>
                                        </div>
                                    </th>
                                    <th class=" thElem thWidth">

                                        <div style="display: flex;">
                                            <h4>Birht Date : </h4>
                                            <h4 id="DateExtraction" style="padding-left: 10px;" class="fontWeightlight">

                                            </h4>
                                        </div>
                                    </th>
                                </tr>

                            </table>

                        </div>

                    </div>
                    <div style="padding-top: 10px;">

                        <div style="display:flex;justify-content:center">
                            <h5> Grades </h5>
                        </div>
                    </div>



                    <div class="Line2Container" style="display:flex;justify-content:center; padding-top:30px;">


                        <table class="studentGradesTab">
                            <tr class="trElem">
                                <th class="thElem" style="width: 180px;">
                                    <h4 class="centering">Subject</h4>
                                </th>
                                <th class="thElem" style=" width: 60px;">
                                    <h4 class="centering">Grade </h4>
                                </th>
                                <th class="thElem" style=" width: 250px;">
                                    <h4 class="centering">Teacher's remarks </h4>
                                </th>
                                <th class="thElem" style=" width: 60px;">
                                    <h4 style="font-size: 18px;" class="centering">Highest Grade </h4>
                                </th>
                                <th class="thElem" style=" width: 60px;">
                                    <h4 style="font-size: 18px;" class="centering">lowest Grade </h4>
                                </th>

                            </tr>

                            <tr class="trElem">
                                <th class="thElem">
                                    <h4 class="centering"> Arabic </h4>
                                </th>
                                <th class="thElem">
                                    <h4 id="ArabicGrades" class="centering fontWeightlight"> </h4>
                                </th>
                                <th class="thElem" style=" ">
                                    <h5 id="ArabicRemarks" class=" fontWeightlight"> </h5>
                                </th>
                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="ArabicHighest" class="centering fontWeightlight"> </h4>
                                </th>

                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="ArabicLowest" class="centering fontWeightlight"> </h4>
                                </th>

                            </tr>

                            <tr class="trElem">
                                <th class="thElem" class="">
                                    <h4 class="centering"> English </h4>
                                </th>
                                <th class="thElem" class="">
                                    <h4 id="EnglishGrades" class="centering fontWeightlight"> </h4>
                                </th>
                                <th class="thElem" style=" ">
                                    <h5 id="EnglishRemarks" class=" fontWeightlight"> </h5>
                                </th>

                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="EnglishHighest" class="centering fontWeightlight"> </h4>
                                </th>

                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="EnglishLowest" class="centering fontWeightlight"> </h4>
                                </th>
                            </tr>

                            <tr class="trElem">
                                <th class="thElem" class="">
                                    <h4 class="centering"> French </h4>
                                </th>
                                <th class="thElem" class="">
                                    <h4 id="FrenchGrades" class="centering fontWeightlight"> </h4>
                                </th>
                                <th class="thElem" style="">
                                    <h5 id="FrenchRemarks" class=" fontWeightlight"> </h5>
                                </th>
                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="FrenchHighest" class="centering fontWeightlight"> </h4>
                                </th>

                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="FrenchLowest" class="centering fontWeightlight"> </h4>
                                </th>
                            </tr>


                            <tr class="trElem">
                                <th class="thElem" class="">
                                    <h4 class="centering"> Science </h4>
                                </th>
                                <th class="thElem" class="">
                                    <h4 id="ScienceGrades" class="centering fontWeightlight"> </h4>
                                </th>
                                <th class="thElem" class="">
                                    <h5 id="ScienceRemarks" class=" fontWeightlight"> </h5>
                                </th>
                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="ScienceHighest" class="centering fontWeightlight"> </h4>
                                </th>

                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="ScienceLowest" class="centering fontWeightlight"> </h4>
                                </th>
                            </tr>



                            <tr class="trElem">
                                <th class="thElem" class="">
                                    <h4 class="centering"> Average </h4>
                                </th>


                                <th class="thElem" style=" ">
                                    <h4 id="GlobalAverageGrades" class="centering fontWeightlight"> </h4>
                                </th>
                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="DirectorRemarks" class=" fontWeightlight"> </h4>
                                </th>
                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="AvgHighest" class="centering fontWeightlight"> </h4>
                                </th>

                                <th class="thElem" style=" width: 60px;">
                                    <h4 id="AvgLowest" class="centering fontWeightlight"> </h4>
                                </th>
                            </tr class="trElem">

                        </table>

                    </div>


                    <div style="display: flex;justify-content:space-between">

                        <div class="lastLine">
                            <div class="SchoolInfo" style="width:300px;margin-left:40px;margin-top:100px;">
                                <h6> www.ecolepirmairerousseau.com </h6>
                                <h6> 75 Rue d'Algérie 2028</h6>
                                <h6> 71 200 587 / 23654789</h6>
                            </div>
                        </div>


                        <div class="StampSignatureContainer" style=" margin-right:40px;margin-top:10px">
                            <div>
                                <span> Tunis, le </span> <span id="ExtractionDateInfo"> </span>
                            </div>

                            <div class="centering">
                                <span>
                                    The director
                                </span>
                            </div>
                            <div class="centering">
                                <span>
                                    Mme Naziha Cherif
                                </span>
                            </div>

                            <div style="position:relative;">
                                <div class="centering">
                                    <img style="position:relative;width:140px;height:140px;border-radius:50%"
                                        src="../../../Ressorces/images/photosElèves/RousseauSchoolStamp.png">
                                </div>

                                <div class="centering">
                                    <img style="  width:130px;height:58px;border-radius:50%"
                                        src="../../../Ressorces/images/DirectorSignature.png">
                                </div>
                            </div>


                        </div>

                    </div>


                    <div style="padding-left:20px;padding-bottom:7px;display:flex">
                        <div>
                            verification code:
                        </div>
                        <div style="padding-left: 4px;">
                            <span id="verificationCode"> </span>
                        </div>
                    </div>



                </div>






                <div class="modal-footer">
                    <div id="editor"> </div>
                    <button id="btn-print-this" type="button" class="btn btn-primary">Download
                    </button>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
function TéléVerification() {
    VerificationCode = RandomVerificationCode(8);

    document.getElementById("verificationCode").value = VerificationCode;
    document.getElementById("verificationCode").innerHTML = VerificationCode;

}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
    integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script src="printThis.js"> </script>
<script src="custom.js"> </script>