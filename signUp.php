<?php
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $Matricule=$_POST['Matricule'];
    $email=$_POST['email'];
    $login=$_POST['login'];
    $psw=$_POST['psw'];

if(ISSET($_POST['signup']))
{
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $Matricule=$_POST['Matricule'];
    $email=$_POST['email'];
    $login=$_POST['login'];
    $psw=$_POST['psw'];
    include("ConfigPro.php");
	$res=mysqli_query($c,"INSERT INTO user VALUES(NULL,'$name','$lastname','$age','$Matricule','$email','$login','$psw')");
    $res1=mysqli_query($c,"SELECT * FROM user where login='$login' AND mdp='$psw'");
if($l=mysqli_fetch_array($res1))
{ 
	session_start();
	$_SESSION['id']=$l[0];
    header("location:Page1.php"); //aller a la page du tableau
	}else
	{
		echo"verifier votre mdp et votre login";
		}
}

?>