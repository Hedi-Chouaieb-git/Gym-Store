var sex =document.getElementById("sex");
var tp =document.getElementById("tp");
var nom =document.getElementById("n");
var pnm =document.getElementById("p");
var age =document.getElementById("a");
var tel =document.getElementById("t");
var mail =document.getElementById("m");

function clubver(){
    t=true
    if(sex.value=='n'){
        t=false
        alert("your sex please")
        return false
    }
    else if(tp.value=='n'){
        t=false
        alert("your Major please")
        return false
    }
    else if(nom.value==''){
        t=false
        alert("your name please")
        return false
    }
    else if(pnm.value==''){
        t=false
        alert("your last-name please")
        return false
    }
    else if(age.value==''){
        t=false
        alert("your age please")
        return false
    }
    else if(tel.value==''){
        t=false
        alert("your number phone please")
        return false
    }
    else if(mail.value==''){
        t=false
        alert("your mail please")
        return false
    }

    else if(girls==false){
        alert("The Sex and Major don't get along")
        return false
    }
   



   
 

}



function girls(){

   if(sex.value=="G" && tp.value !='Fitness Laides' || sex.value=="G" && tp.value !='Zumba' ){
        return false
    }
    else if (sex.value=="G" && tp.value !='Fitness Laides' && age.value <18 || sex.value=="G" && tp.value !='Zumba' && age.value>=18){}
    return false


}