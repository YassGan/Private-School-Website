


const currentDate=document.querySelector(".current-date"),
daysTag=document.querySelector(".days"),
prevNextIcon=document.querySelectorAll(".icons span")


function rendezVous(auj){
   alert("Date cliquée est "+auj);
} 


//getting new date, current year and month
let date =new Date(),
currYear=date.getFullYear(),
currMonth=date.getMonth();


const Months=["January","February","Mars","April","Mai","June","July","August","September",
"October","November","Decembre"];
 
const renderCalendar =()=>{
    let firstDateofMonth=new Date(currYear,currMonth,1).getDay();    //getting the first day of the month
    let lastDateofMonth=new Date(currYear,currMonth+1,0).getDate();    //getting the last date of the month
    let lastDayofMonth=new Date(currYear,currMonth,0).getDay();    //getting the last day of the month
    let lastDateofLastMonth=new Date(currYear,currMonth,0).getDate();    //getting the last date of the previous month




    let liTag="";
  

    for (let i=firstDateofMonth;i>0;i--){ // creating li of previous month last days
        liTag+=`<li class="inactive"> ${lastDateofLastMonth-i+1} </li>`;
    }


    for (let i=1;i<=lastDateofMonth;i++){ //creating li of all days of current month
        let isToday = i ===date.getDate() && currMonth ===new Date().getMonth() 
        && currYear === new Date().getFullYear() ? "active" : "";

        liTag+=`<li class="${isToday}" onclick="rendezVous(${i});"> ${i} </li>`;
    }

    for (let i=lastDayofMonth;i<6;i++){//creating li of next month first days
        liTag+=`<li class="inactive"> ${i-lastDayofMonth+1} </li>`;
    }
  
  
  
    currentDate.innerText=`${Months[currMonth]} ${currYear}`;
    daysTag.innerHTML=liTag; 

}

renderCalendar();

prevNextIcon.forEach(icon => {
    icon.addEventListener("click",()=>{
        currMonth=icon.id ==="prev" ? currMonth-1:currMonth+1;
       
        if (currMonth <0 || currMonth>11){// if current month is less than 0 or greater than 11
            date=new Date(currYear,currMonth);
            currYear=date.getFullYear();
            currMonth=date.getMonth();
            }else{//else pass new Date as date value
                date= new Date();
            }

       
       
       
       
        renderCalendar();

    })
});