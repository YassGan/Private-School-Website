



function clickedLogin(){
var EmailMessageWrong=document.getElementById("EmailMessageWrong");
EmailMessageWrong.style.display = 'flex';
}

var submitButton=document.getElementById("submitButton");
submitButton.addEventListener("click", SubmitClick);

function SubmitClick() {
    var emailTest=2;
    var passordTest=2;

    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;

    // Email Check
    var emailcheck = email.includes("@");
    if (emailcheck==false){
        var EmailMessageWrong=document.getElementById("EmailMessageWrong");
        EmailMessageWrong.style.display = 'flex';
    }if(emailcheck==true){
        var EmailMessageWrong=document.getElementById("EmailMessageWrong");
        EmailMessageWrong.style.display = 'none';
        emailTest=1;
    }

    //password Check
    if (password==''){
        var PasswordMessageWrong=document.getElementById("PasswordMessageWrong");
        PasswordMessageWrong.style.display = 'flex';
        passordTest=0;
    } 
    if (password!=''){
        var PasswordMessageWrong=document.getElementById("PasswordMessageWrong");
        PasswordMessageWrong.style.display = 'none';
        passordTest=1;
    }

    alert(passordTest+"/"+emailTest)

    if (passordTest==1 && emailTest==1){
           //post method to get the details of the user
           $.post("getDetails.php", {
            updateidSend: email
        }, function(data, status) {
       

        });
    }

}








function submitFunction(){
    
}