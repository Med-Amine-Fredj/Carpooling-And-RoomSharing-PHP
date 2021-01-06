<?php
     include("ConfigPro.php");
session_start();
$id=$_SESSION['id'];
if(ISSET($_POST['like']))
                {
                  include("ConfigPro.php");
                  $l=$_POST['l'];
                  $res12=mysqli_query($c,"INSERT INTO like1 VALUES(NULL,'$l','$id')");
                  header("location:Page1.php");
                }
                ?>