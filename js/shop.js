var prd=document.getElementById('pd')
var nb=document.getElementById('nb')
var ma=document.getElementById('ma')
var na=document.getElementById('na')
var ln=document.getElementById('ln')
var nt=document.getElementById('nt')
var adr=document.getElementById('ad')


function vercomonde(){
    if(prd.selectedIndex == 0){
        alert('please choose un produit')
        return false
    }
    else if(nb.value<=0){
        alert('please choose number of your product')
        return false
    }
    else if(ma.value.length<=0){
        alert('your mail please')
        return false
    }
    else if(na.value.length<=1){
        alert('your name please')
        return false
    }

    else if(ln.value.length<=1){
        alert('your last-name please')
        return false
    }
    else if(nt.value.length<8 ||isNaN(nt.value)){
        alert('your num tell please')
        return false
    }
    else if(adr.value.length<=4){
        alert('Adress please')
        return false
    }







}



function somme(){
    if(prd.selectedIndex != 0 ){
        s=Number(nb.value)*25
        
        document.getElementById('som').innerHTML=s
        if(nb.value<=0){
            document.getElementById('som').innerHTML='none'
        }
    }
}