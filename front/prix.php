<?php
mysql_connect("localhost","root","");
mysql_select_db('pr');

if(isset($_POST['nm'])){

$pd=$_POST['pd'];
$nbp=$_POST['nbp'];
$ma=$_POST['mail'];
$nm=$_POST['nm'];
$prn=$_POST['pn'];
$tl=$_POST['nt'];
$adr=$_POST['ad'];
$sm=25*$nbp;



 $q1="INSERT INTO comd(Pic,Npic,nom,prenom,mail,Tel,Adr,smt) values ('$pd','$nbp','$nm','$prn','$ma','$tl','$adr','$sm')";
 $req=mysql_query($q1);
 

 include_once '../front/vprix.php';


}

else{
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/H.css">
    <link rel="stylesheet" href="../css/prix.css">
    <script src="../js/comd.js"></script>
    <title>Prix</title>
</head>
<body>
<nav>
        <ul>
            <li class="nli"><a href="../index.html"><img src="../img/logo.png" alt="" srcset=""></a></li>
          <li class="nli"><a href="../front/shop.php">Shop</a></li>
          <li class="nli"><a href="../front/club.php">Club membership</a></li>
           <li class="nli"></li>
        <li class="nli"></li>
           <span class='buzou'>
            <a href="../front/flog.php"><li class="nli">Log-out</li></a>
        
            </span>
        </ul>
    </nav>
    
<div id='price' class='price'>


<p>Your purchase price:</p>
<p id='som'>0</p>



</div>


    <div class="prix">

    <div class="prix-card">
        <h1> Card Commande </h1>
        
<form  action="./prix.php" method="POST" onsubmit='return vercomonde()'>

        <select class="form-itm" name="pd" id='pd'> 
            <option value="none" >Choose Produit</option>
            <option value="protege">protege</option>
            <option value="Kemino">Kemino</option>
            <option value="Caque">Caque</option>
            <option value="bondage">bondage</option>
            <option value="Tenue-F">Tenue-F</option>
            <option value="Tenue-M">Tenue-M</option>
        </select>

        <input type="number" class="form-itm" value="0" name="nbp" id='nb' onInput='somme()'>
       
       


        <input type="email" name="mail" class="form-itm" id="ma" placeholder="Mali">


        <input type="text" name="nm" class="form-itm" id="na" placeholder="Name">


       <input type="text" name="pn" class="form-itm" id="ln" placeholder="Last-Name">


       <input type="tel" name="nt" class="form-itm" id="nt" placeholder="Num-Tell">


       <input type="" name="ad" class="form-itm" id="ad" placeholder="Adresse">


       <button type="submit" class="form-btn">Submit</button>
       <button type="reset" class="form-btn">Reset</button>

        




    </div>
</div>

</form>

<script src="../js/shop.js"></script>

</body>
</html>
<?php } ?>