<?php
mysql_connect("localhost","root","");
mysql_select_db('pr');


$pd=$_POST['pd'];
$ma=$_POST['mail'];
$prn=$_POST['pn'];
$tl=$_POST['nt'];
$adr=$_POST['ad'];
$nbp=$_POST['nbp'];
$nm=$_POST['nm'];

$q1='INSERT INTO comd(nom,prenom,Tel,Adr) values ($nm,$prn,$tl,$adr)';

mysql_query($q1);

?>