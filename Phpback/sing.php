
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('pr');


if((isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && isset($_POST['d']) && isset($_POST['e']))){
$n=$_POST["a"];
$p=$_POST["b"];
$m=$_POST["c"];
$ps=$_POST["d"];
$te=$_POST["e"];

$sqlver="SELECT * FROM ins where MA = '$m' ";
$verif=mysql_query($sqlver);
$ver=mysql_num_rows($verif);

if($ver>=1){

   $msg='This email already exists';
   include "../front/sing.php";
}

if($ver==0){
$msg='hjkkkkjjh';
$req="INSERT INTO ins (NM,PN,MA,PA,TEL) VALUES ('$n','$p','$m','$ps',$te)";
$cmp=mysql_query($req);
include '../front/flog.php';
}





}








