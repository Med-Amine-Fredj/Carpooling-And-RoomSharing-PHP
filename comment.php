<?php
     include("ConfigPro.php");
session_start();
$id=$_SESSION['id'];
if(ISSET($_POST['comment']))
                {
                  include("ConfigPro.php");
                  $datec=date("Y-m-d h:i:s");
                  $cmt=$_POST['cmt'];
                  $t=$_POST['t'];
                  $res10=mysqli_query($c,"INSERT INTO comment VALUES(NULL,'$t','$id','$cmt','$datec')");
                  header("location:Page1.php");
                }
                ?>