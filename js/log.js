
onload(document.body.style.backgroundColor='black')
function Ni(){
    document.body.style.backgroundColor='white'
    document.getElementById('no').style.display='none'
    document.getElementById('yes').style.display='inline'
    
   
}
function Li(){
    document.body.style.backgroundColor='black'
    document.getElementById('yes').style.display='none'
    document.getElementById('no').style.display='inline'
}





function sing(){
    var ln=document.getElementById("pl")
    var pn=document.getElementById("pn")
    var tel=document.getElementById("pt")
    var em=document.getElementById("pe")
    var pas=document.getElementById("pp")

    vef=true

    if(ln.value.length<=3){
        document.getElementById('mpl').innerHTML='The minimum number of letters in the last name is 3 '
        vef= false;
    }
    else{
        document.getElementById('mpl').innerHTML=''
    }
    
    if(pn.value.length<=3){
        document.getElementById('mpn').innerHTML='The minimum number of characters for name is 3 '
        vef= false;
    }
    else{
        document.getElementById('mpn').innerHTML=''
    }

     if(tel.value.length!=8||isNaN(tel.value)){
        document.getElementById('mpt').innerHTML='The phone number must consist of 8 digits '
        vef= false;
    }
    else{
        document.getElementById('mpt').innerHTML=''
    }

    if(em.value.length<=3){
        document.getElementById('mpe').innerHTML='Email error '
        vef= false;
    }
    else{
        document.getElementById('mpe').innerHTML=''
    }

    if(pas.value.length<8){
        vef=false
    }

  
    return vef;

}

function ada(){
    var pas=document.getElementById("pp")
    var x=document.getElementById('mpp')
    
    if(pas.value.length<=4){
        x.style.backgroundColor='red'
        x.style.width="50px"
        
    }
    else if(pas.value.length<=7){
        x.style.backgroundColor='yellow'
        x.style.width="250px"
    }
    else if(pas.value.length>=9){
        x.style.backgroundColor='green'
        x.style.width="515px"
    }
    }

function rest(){
document.getElementById('mpl').innerHTML=''
document.getElementById('mpl').innerHTML=''
document.getElementById('mpn').innerHTML=''
document.getElementById('mpn').innerHTML=''
document.getElementById('mpt').innerHTML=''
document.getElementById('mpt').innerHTML=''
document.getElementById('mpe').innerHTML=''
document.getElementById('mpe').innerHTML=''


var x=document.getElementById('mpp')
x.style.backgroundColor='red'
x.style.width="50px"
}





function valid(){

if(sing()==true ){
document.getElementById('msg').style.display='inherit'
}


}
