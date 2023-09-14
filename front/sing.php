<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/L.css">
    <link rel="shortcut icon" href="../img/fav.ico" type="image/x-icon">
    <title>Login</title>
</head>
<body>

    <div class="si" id="sing">
        <div><a href="../index.html"class='back'>⬅</a></div>
    <h1><img src="../img/logo.png"   alt=""></h1>
    <form action="../Phpback/sing.php" method="POST" name='singo' onsubmit="return sing()" >

    

       <p class='msg' id='msg'> <?php print $msg;?> </p>
        <input type="text" name="a" id="pl" placeholder="Last-Name">
        
        <div class="i_msg" id="mpl"></div>

        <br>
        <input type="text" name="b" id="pn" placeholder="Name">
        
        <div class="i_msg" id="mpn"></div>

        <br>
        <input type="tel" name="e" id="pt" placeholder="Tel" >
        
        <div class="i_msg"id="mpt"></div>
        
        <br>
        <input type="email" name="c" id="pe" placeholder="Email">
        
        <div class="i_msg" id="mpe"></div>
        
        <br>
        <input type="password" name="d" oninput='ada()' id="pp"placeholder="Password">
        
        <div class="i_msgp" id="mpp"></div>

        <br>
        <input type="submit" value="Sing-In"id='bts' onclick='valid()'>
        <input type="reset" onclick='rest()' id="btr">
    </form>
<h1>  </h1>
</div>
<script src="../js/log.js"></script>
</body>
</html>