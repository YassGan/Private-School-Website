$(document).ready(function(){
   
    $('#btn-print-this').click(function(){

html2canvas(document.querySelector("#content")).then((canvas)=>{
    let base64image=canvas.toDataURL("image/png");
    console.log(base64image);

    const link = document.createElement('a')
    const verificationCode=document.getElementById("verificationCode").value




    link.href = base64image
    link.download = 'studentGrades.png'
    document.body.appendChild(link)
    link.click()
    document.body.removeChild(link)

    $.ajax({
//        url: "addGradeVerif.php",
        url: "../../../adminSession/Pages/GradesPage/addGradeVerif.php",

        type: 'post',
        data: {
            SENDbase64image: base64image,
            SENDverification: verificationCode
        },
        success: function(data, status) {
            //displayData();
        }
    })



   



})


    });
});