

function getTodayDate() {
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
  }

function pupilPaimentMonths(){


    let pupilId=document.getElementById("PupilIdInput").value;

    $.ajax({
        url: "clientPaimentAJAXQueries/clientPaimentAJAXQuery.php",
        type: "post",
        data: {
            pupilIdPaiment: pupilId
        },
        success: function(data, status) {
            var PaidMonths = JSON.parse(data);
            console.table(PaidMonths);

            let i=0;



            let septemberTest=0;
            let OcotberTest=0;
            let NovemberTest=0;
            let DecemberTest=0;
            let JanuaryTest=0;
            let FebruaryTest=0;
            let MarchTest=0;
            let AprilTest=0;
            let MayTest=0;
            let  JuneTest=0;








            while (i<9){
                // working with september
                let todayDate = new Date(getTodayDate());
                let SeptemberDeadLine = new Date('2022-09-31');
                let september= document.getElementById("SeptemberPaimentStatue");

                if( PaidMonths[i]["nomMoisPayé"]=="Septembre" ){
                    september.innerHTML="Paid";
                    september.style.color = "green";
                    let septemberPaimentDate= document.getElementById("SeptemberPaimentDate");
                    septemberPaimentDate.innerHTML=PaidMonths[i]["date"];
                    septemberTest=1;
                } 
                if (((SeptemberDeadLine) <(todayDate)) && septemberTest!=1) {
                    september.innerHTML="Unpaid";
                    september.style.color = "red";
                    }
                

                // working with october
                let OcotberDeadLine = new Date('2022-10-31');
                let Ocotber= document.getElementById("OcotberPaimentStatue");
                if( PaidMonths[i]["nomMoisPayé"]=="Octobre" ){
                    Ocotber.innerHTML="Paid";
                    Ocotber.style.color = "green";
                    OcotberTest=1;
                    let OcotberPaimentDate= document.getElementById("OcotberPaimentDate");
                    OcotberPaimentDate.innerHTML=PaidMonths[i]["date"];
                } 
                if (((OcotberDeadLine) <(todayDate)) && OcotberTest!=1) {

                    Ocotber.innerHTML="Unpaid";
                    Ocotber.style.color = "red";
                    }
                    // alert("OcotberTest "+OcotberTest);
                    // alert("todayDate "+todayDate);
                    // alert("OcotberDeadLine "+OcotberDeadLine);




                // working with november
                let NovemberDeadLine = new Date('2022-11-31');
                let November= document.getElementById("NovemberPaimentStatue");
                if( PaidMonths[i]["nomMoisPayé"]=="Novembre" ){
                    November.innerHTML="Paid";
                    November.style.color = "green";
                    NovemberTest=1;
                    let NovemberPaimentDate= document.getElementById("NovemberPaimentDate");
                    NovemberPaimentDate.innerHTML=PaidMonths[i]["date"];
                } 
                if (((NovemberDeadLine) <(todayDate)) && NovemberTest!=1) {

                    November.innerHTML="Unpaid";
                    November.style.color = "red";
                    }
                    // alert("OcotberTest "+OcotberTest);
                    // alert("todayDate "+todayDate);
                    // alert("OcotberDeadLine "+OcotberDeadLine);                    



                // working with december
                let DecemberDeadLine = new Date('2022-12-31');
                let December= document.getElementById("DecemberPaimentStatue");
                if( PaidMonths[i]["nomMoisPayé"]=="Décembre" ){
                    December.innerHTML="Paid";
                    December.style.color = "green";
                    DecemberTest=1;
                    let DecemberPaimentDate= document.getElementById("DecemberPaimentDate");
                    DecemberPaimentDate.innerHTML=PaidMonths[i]["date"];
                } 
                if (((DecemberDeadLine) <(todayDate)) && DecemberTest!=1) {

                    December.innerHTML="Unpaid";
                    December.style.color = "red";
                    }
                    // alert("OcotberTest "+OcotberTest);
                    // alert("todayDate "+todayDate);
                    // alert("OcotberDeadLine "+OcotberDeadLine);                    




                // working with January
                let JanuaryDeadLine = new Date('2023-01-31');
                let January= document.getElementById("JanuaryPaimentStatue");
                if( PaidMonths[i]["nomMoisPayé"]=="Janvier" ){
                    January.innerHTML="Paid";
                    January.style.color = "green";
                    JanuaryTest=1;
                    let JanuaryPaimentDate= document.getElementById("JanuaryPaimentDate");
                    JanuaryPaimentDate.innerHTML=PaidMonths[i]["date"];
                } 
                if (((JanuaryDeadLine) <(todayDate)) && JanuaryTest!=1) {

                    January.innerHTML="Unpaid";
                    January.style.color = "red";
                    }
                    // alert("OcotberTest "+OcotberTest);
                    // alert("todayDate "+todayDate);
                    // alert("OcotberDeadLine "+OcotberDeadLine);                    
                


                 // working with February
                 let FebruaryDeadLine = new Date('2023-02-28');
                 let February= document.getElementById("FebruaryPaimentStatue");
                 if( PaidMonths[i]["nomMoisPayé"]=="Février" ){
                     February.innerHTML="Paid";
                     February.style.color = "green";
                     FebruaryTest=1;
                     let FebruaryPaimentDate= document.getElementById("FebruaryPaimentDate");
                     FebruaryPaimentDate.innerHTML=PaidMonths[i]["date"];
                 } 
                 if (((FebruaryDeadLine) <(todayDate)) && FebruaryTest!=1) {
 
                     FebruaryTest.innerHTML="Unpaid";
                     February.style.color = "red";
                     }
                     // alert("OcotberTest "+OcotberTest);
                     // alert("todayDate "+todayDate);
                     // alert("OcotberDeadLine "+OcotberDeadLine);   
                     
 
                     

                // working with March
                 let MarchDeadLine = new Date('2023-03-30');
                 let March= document.getElementById("MarchPaimentStatue");
                 if( PaidMonths[i]["nomMoisPayé"]=="Mars" ){
                     March.innerHTML="Paid";
                     March.style.color = "green";
                     MarchTest=1;
                     let MarchPaimentDate= document.getElementById("MarchPaimentDate");
                     MarchPaimentDate.innerHTML=PaidMonths[i]["date"];
                 } 
                 if (((MarchDeadLine) <(todayDate)) && MarchTest!=1) {
 
                    MarchTest.innerHTML="Unpaid";
                    March.style.color = "red";
                     }
                     // alert("OcotberTest "+OcotberTest);
                     // alert("todayDate "+todayDate);
                     // alert("OcotberDeadLine "+OcotberDeadLine);   

     
                     



                // working with April
                let AprilDeadLine = new Date('2023-04-30');
                let April= document.getElementById("AprilPaimentStatue");
                if( PaidMonths[i]["nomMoisPayé"]=="Avril" ){
                    April.innerHTML="Paid";
                    April.style.color = "green";
                    AprilTest=1;
                    let AprilPaimentDate= document.getElementById("AprilPaimentDate");
                    AprilPaimentDate.innerHTML=PaidMonths[i]["date"];
                } 
                if (((AprilDeadLine) <(todayDate)) && AprilTest!=1) {

                    AprilTest.innerHTML="Unpaid";
                    April.style.color = "red";
                    }
                    // alert("OcotberTest "+OcotberTest);
                    // alert("todayDate "+todayDate);
                    // alert("OcotberDeadLine "+OcotberDeadLine);  




                // working with May
                let MayDeadLine = new Date('2023-05-30');
                let May= document.getElementById("MayPaimentStatue");
                if( PaidMonths[i]["nomMoisPayé"]=="Mai" ){
                    May.innerHTML="Paid";
                    May.style.color = "green";
                    MayTest=1;
                    let MayPaimentDate= document.getElementById("MayPaimentDate");
                    MayPaimentDate.innerHTML=PaidMonths[i]["date"];
                } 
                if (((MayDeadLine) <(todayDate)) && MayTest!=1) {

                    MayTest.innerHTML="Unpaid";
                    May.style.color = "red";
                    }
                    // alert("OcotberTest "+OcotberTest);
                    // alert("todayDate "+todayDate);
                    // alert("OcotberDeadLine "+OcotberDeadLine);




                                    // working with June
                let JuneDeadLine = new Date('2023-06-30');
                let June= document.getElementById("JunePaimentStatue");
                if( PaidMonths[i]["nomMoisPayé"]=="Juin" ){
                    June.innerHTML="Paid";
                    June.style.color = "green";
                    JuneTest=1;
                    let JunePaimentDate= document.getElementById("JunePaimentDate");
                    JunePaimentDate.innerHTML=PaidMonths[i]["date"];
                } 
                if (((JuneDeadLine) <(todayDate)) && JuneTest!=1) {

                    JuneTest.innerHTML="Unpaid";
                    June.style.color = "red";
                    }
                    // alert("OcotberTest "+OcotberTest);
                    // alert("todayDate "+todayDate);
                    // alert("OcotberDeadLine "+OcotberDeadLine);




                
                i++;
            }

        }
    })





}