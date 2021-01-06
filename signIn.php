<?php
if(ISSET($_POST['signin'])){
$login=$_POST['login'];
$psw=$_POST['psw'];
include("ConfigPro.php");
$res1=mysqli_query($c,"SELECT * FROM user where login='$login' AND mdp='$psw'");
if($l=mysqli_fetch_array($res1))
{ 
	session_start();
	$_SESSION['id']=$l[0];
    header("location:Page1.php"); //aller a la page du tableau
	}else
	{
		header("location:Verif.html");
		}
	

}

?>