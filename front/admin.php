<?php


$conn=mysql_connect("localhost","root","");
mysql_select_db('pr');

$req="SELECT * From ins";
$cmp=mysql_query($req);


if(empty($_POST['SU'])==FALSE){
    $id=$_POST["SU"];
    $req2="DELETE FROM ins WHERE ID=$id";
    mysql_query($req2);
 


    if (is_int($id)){
    include './admin.php';}
   
    
 }
// if(isset($_POST['sub'])){
//     $nam=$_POST["SE"];
//     $req3="SELECT * FROM ins WHERE NM like '$nam%' ";
//     $exe=mysql_query($req3);
    
//         $cmp=$exe;
//     }

    

    $req4="SELECT * FROM comd";
    $comd=mysql_query($req4);



    $req5="SELECT * From club";
    $clb=mysql_query($req5);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="shortcut icon" href="../img/fav.ico" type="image/x-icon">
    <title>Admin</title>
</head>
<body>
<a href="../index.html"><img class='hm' src="../img/hm.png" alt="" srcset=""></a>
<h1>Hi Mr Hedi</h1>



<div id='SUP'>
    <span id="msg">Attention!</span> <span id='X' onclick='cls()'>❌</span>
    
    <form action="../front/admin.php" method="post" name='fd'>
    <input type="number" name="SU" id="pis" placeholder='ID'><br>
        <input type="submit" value="Delete" onclick='cls()' class='bt'>
        <input type="reset" value="Reset"  class='bt'>
        
    </form>


</div>




</div>
<table>
 
        <!-- <th id='ser'>
          
        <form action="../front/admin.php" method='POST' id='sea'>
        <input type="search"name='SE' id='se'>
        <button type="submit"name='sub' id='su'><img id='serc'src="../img/se.png" alt="" srcset=""></button>
        </form>

        </th>
         -->

        <th class='type 'id='t1' onclick='inscri()' >INSCRIPTION</th>
        <th class='type 'id='t2' onclick='comande()'>COMONDE</th>
        <th class='type 'id='t3' onclick='club()'>Club</th>

       

</table>


    <table id='tab1'>

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Last-Name</th>
        <th>Mail</th>
        <th>Tel</th>
        <th>Delete</th>
   
    <?php while($en=mysql_fetch_array($cmp)){ ?>
    <tr>
        <td><?php echo $en["ID"];?></td>
        <td><?php echo $en["NM"];?></td>
        <td><?php echo $en["PN"];?></td>
        <td><?php echo $en["MA"];?></td>
        <td><?php echo $en["TEL"];?></td>
        <td><span onclick='dele()'>⛔</span></td>
      
    </tr>
    <?php } ?>
    </tr>
    </table>

    <!-- for produit -->


    <table  id='tab2'>

<tr>
    <th>ID</th>
    <th>Product</th>
    <th>Nom piece</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Tel</th>
    <th>Adr</th>
    <th>Somme Totale</th>
    <th>Refuse</th>
    <th>Confirme</th>

<?php while($en=mysql_fetch_array($comd)){ ?>
<tr>
    <td><?php echo $en["id"];?></td>
    <td><?php echo $en["Pic"];?></td>
    <td><?php echo $en["Npic"];?></td>
    <td><?php echo $en["nom"];?></td>
    <td><?php echo $en["prenom"];?></td>
    <td><?php echo $en["Tel"];?></td>
    <td><?php echo $en["Adr"];?></td>
    <td><?php echo $en["smt"];?></td>
    
    <td><span onclick='ref()'>✖</span></td>
    <td><span onclick='conf()'>✔</span></td>

  
</tr>
<?php } ?>
</tr>
</table>


<!-- table of club -->

<table id='tab3'>

<tr>
    <th>ID</th>
    <th>Sex</th>
    <th>Major</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Age</th>
    <th>Tel</th>
    <th>Mail</th>

<?php while($en=mysql_fetch_array($clb)){ ?>
<tr>
    <td><?php echo $en["id"];?></td>
    <td><?php echo $en["sex"];?></td>
    <td><?php echo $en["major"];?></td>
    <td><?php echo $en["nom"];?></td>
    <td><?php echo $en["prenom"];?></td>
    <td><?php echo $en["age"];?></td>
    <td><?php echo $en["tel"];?></td>
    <td><?php echo $en["mail"];?></td>
 
  
</tr>
<?php } ?>
</tr>
</table>











    <script src="../js/admin.js"></script>
</body>
</html>