
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/L.css"> 
     <link rel="shortcut icon" href="../img/fav.ico" type="image/x-icon">
    <title>login</title>
</head>
<body>

<div class="lm"  >
<h1><img src="../img/logo.png" alt=""></h1>
<div><a href="../index.html"class='back'>⬅</a></div>
    <form action="../Phpback/log.php" method="POST" class="formle">
        <input type="email" name="ma" id="ema" class='dns' placeholder="Email"><br>
        <input type="password" name="ps" id="pas"   class='dns'  placeholder="Password"><br>
        <input type="submit" value="Log-In"id='bts'>
        <input type="reset" value="Reset" id='btr'>
        <h3> </h3>
    </form>
    
</div>
<script src="../js/log.js"></script> 
</body>
</html>