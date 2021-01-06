<?php
include("ConfigPro.php");
session_start();
$id=$_SESSION['id'];
$res=mysqli_query($c,"select * from user where id='$id'");
if(ISSET($_POST['ok'])){
	$libelle=$_POST['libelle'];
	$c=mysqli_connect("localhost","root","","projet");
	$res1=mysqli_query($c,"insert into chat values(NULL,'$libelle',$id)");
	$tab=$_POST['tab'];
	$resx=mysqli_query($c,"select max(idchat) from chat");
	if($lx=mysqli_fetch_array($resx))
	{
		$idchat=$lx[0];
foreach($tab as $v) // pour chaque element tu tableau selectionner 
{
	$res2=mysqli_query($c,"insert into chatuser values($idchat,$v)");  
}
	}
	mysqli_close($c);
	header("location:Chat.php");
	}
?>