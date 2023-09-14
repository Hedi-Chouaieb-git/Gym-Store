<?php
mysql_connect("localhost","root","");
mysql_select_db('pr');

if (isset($_POST['n'])){
    $sex=$_POST['sex'];
    $maj=$_POST['ma'];
    $nom=$_POST['n'];
    $prenom=$_POST['p'];
    $age=$_POST['a'];
    $tel=$_POST['t'];
    $mail=$_POST['m'];

    $req="INSERT INTO club(sex,major,nom,prenom,age,tel,mail)
    VALUES('$sex','$maj','$nom','$prenom','$age','$tel','$mail')";
    mysql_query($req);
    include_once '../front/card.php';
}
 
    



else{   
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/H.css">
    <link rel="stylesheet" href="../css/club.css">
    
    <title>Club</title>
</head>
<body>
    
    <nav>
        <ul>
            <li class="nli"><a href="../index.html"><img src="../img/logo.png" alt="" srcset=""></a></li>
          <li class="nli"><a href="../front/shop.php">Shop</a></li>
          <li class="nli"><a href="#">Club membership</a></li>
           <li class="nli"></li>
        <li class="nli"></li>
           <span class='buzou'>
            <a href="../front/flog.php"><li class="nli">Log-out</li></a>
            <li class="nli">  <span onclick="Li()" id="yes"></span> <span onclick="Ni()" id='no'></span></li>
            </span>
        </ul>
    </nav>

<div class="club" id="insc">
    <form action="club.php" method="POST" onsubmit='return clubver()'>




        <select name="sex" id="sex">
            <option value="n">Your Gender</option>
            <option value="G">Girl</option>
            <option value="B">Boy</option>
    
           </select><br>


           
        <input type="number" name="a" id="a"placeholder='Your Age' ><br>
        
        
        
        <select name="ma" id="tp">

            <option value="n">Your Major</option>
            <option value="Body Bilding">Body Bilding</option>
            <option value="Fitness Laides">Fitness Laides</option>
            <option value="Kick Boxing">Kick Boxing</option>
            <option value="Gym Kids">Gym Kids</option>
            <option value="Zumba">Zumba</option>
            <option value="Karate Kids">Karate Kids</option>

           </select><br>




    


        <input type="text" name="n" id="n"placeholder='Your Name' ><br>
        <input type="text" name="p" id="p"placeholder='Your Last-Name' ><br>
        

     
        <input type="tel" name="t" id="t" placeholder='Your Phone Number' ><br>
        <input type="mail" name="m" id="m"placeholder='Your Mail' ><br>
        
        <input type="submit" value="Inscri" onclick='card()' class="btn">
        <input type="reset" value="Reset"   class='btn'>
       


    </form>
</div>






    <script src="../js/club.js"></script>
    <script src="../js/log.js"></script> 
</body>
</html>
<?php }?>