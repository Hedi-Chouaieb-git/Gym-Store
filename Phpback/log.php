<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('pr');


if(isset($_POST['ps']) && isset($_POST['ma'])){
$p=$_POST["ps"];
$m=$_POST["ma"];

$req="SELECT * FROM ins WHERE MA='$m' and PA= '$p' ";
$res=mysql_query($req);
$rw=mysql_num_rows($res);
// echo "<p style='color:white'>". $rw ."</p>";

if($p=='admin'&& $m=="admin@gmail.com"){
    include '../front/admin.php';
}


elseif($rw>=1){
    include '../front/Home.php';  
}

else{
    include '../front/flog_2.php';
    
}


}
?>