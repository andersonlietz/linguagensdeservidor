<?php 


$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'meu_banco';
 $con = mysqli_connect($host, $user , $pass, $db);

 $sql = "SELECT * FROM usuarios";
$res = mysqli_query($con, $sql);
  

?>