
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/club.css">
    <title>card</title>
    <link rel="stylesheet" href="../css/H.css">
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

<div class="cardClub"  id='card'>
    <img src="../img/man.png" class='photo' alt="">


    <div class="information">
    
        <p class='age'><?php echo $maj ?></p>

        <label for="" class='inf'>Name:</label>
        <p class='na'><?php echo $nom ?></p>

        <label for="" class='inf'>Last-Name:</label>
        <p class='pr'> <?php echo $prenom ?></p>

        <label for="" class='inf'>Age:</label>
        <p class='age'><?php echo $age ?></p>
    </div>
</div>
<script src="../js/log.js"></script> 
</body>
</html>